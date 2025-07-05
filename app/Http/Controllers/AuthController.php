<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flasher\Laravel\Facade\Flasher;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|max:255',
            'no_ktp' => 'required|numeric',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        if (User::where('email', $validatedData['email'])->exists()) {
            Flasher::addError('Email sudah terdaftar');
            return redirect()->back()->withInput();
        }

        if (User::where('no_ktp', $validatedData['no_ktp'])->exists()) {
            Flasher::addError('Nomor KTP sudah terdaftar');
            return redirect()->back()->withInput();
        }

        $prefix = now()->format('Y-m');
        $lastPatient = User::where('role', 'pasien')
            ->where('no_rm', 'like', $prefix . '-%')
            ->orderByDesc('no_rm')
            ->first();

        $nextNumber = $lastPatient ? ((int)substr($lastPatient->no_rm, -3) + 1) : 1;
        $urutan = str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
        $no_rm = $prefix . '-' . $urutan;

        User::create([
            'nama' => $validatedData['nama'],
            'alamat' => $validatedData['alamat'],
            'no_hp' => $validatedData['no_hp'],
            'no_ktp' => $validatedData['no_ktp'],
            'no_rm' => $no_rm,
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'pasien',
        ]);

        Flasher::addSuccess('Registrasi berhasil, silahkan login');
        return redirect('/login')->withInput();
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            Flasher::addSuccess('Selamat datang ' . $user->nama);

            if ($user->role === 'dokter') {
                return redirect('dokter/dashboard');
            } elseif ($user->role === 'pasien') {
                return redirect('pasien/dashboard');
            } elseif ($user->role === 'admin') {
                return redirect('admin/dashboard');
            } else {
                abort(403, 'Unauthorized action.');
            }
        }

        Flasher::addError('Email atau password salah');
        return redirect()->back()->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Flasher::addSuccess('Anda berhasil logout');
        return redirect('/login');
    }
}
