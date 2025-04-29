<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        'email' => 'required|email|max:255',
        'password' => 'required|min:8',
    ]);

    if (User::where('email', $validatedData['email'])->exists()) {
        // Set pesan flash error
        session()->flash('toastr_type', 'error');
        session()->flash('toastr_message', 'Email sudah terdaftar');
        return redirect()->back()->withInput();
    }

    User::create([
        'nama' => $validatedData['nama'],
        'alamat' => $validatedData['alamat'],
        'no_hp' => $validatedData['no_hp'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'pasien',
    ]);

    // Set pesan flash success
    session()->flash('toastr_type', 'success');
    session()->flash('toastr_message', 'Registrasi berhasil, silahkan login');
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

        session()->flash('toastr_type', 'success');
        session()->flash('toastr_message', 'Selamat datang ' . $user->nama);

        if ($user->role === 'dokter') {
            return redirect('dokter/dashboard');
        } elseif ($user->role === 'pasien') {
            return redirect('pasien/dashboard');
        } else {
            return abort(403, 'Unauthorized action.');
        }
    }

    session()->flash('toastr_type', 'error');
    session()->flash('toastr_message', 'Email atau password salah');
    return redirect()->back()->withInput();
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    session()->flash('toastr_type', 'success');
    session()->flash('toastr_message', 'Anda berhasil logout');
    return redirect('/login');
}

}