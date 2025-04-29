<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    public function index() {
        $dokters = User::where('role', 'dokter')->latest()->get();

        // Ambil hanya data periksa milik pasien yang sedang login
        $periksas = Periksa::where('id_pasien', Auth::id())->latest()->paginate(10);

        return view('pasien.periksa.index', compact('periksas', 'dokters'));
    }
    /*
    public function create() {
        $dokters = User::where('role', 'dokter')->latest()->get();
        return view('pasien.periksa.create', compact('dokters'));
    }
    */
    public function store(Request $req) {
        $req->validate([
            'id_dokter' => ['required'],
            'catatan' => ['nullable', 'string'],  // Validasi untuk catatan
            'biaya_periksa' => ['nullable', 'numeric'],  // Validasi untuk biaya periksa
        ]);
    
        // Menambahkan data untuk insert ke tabel periksas
        $data = [
            'id_dokter' => $req['id_dokter'],
            'id_pasien' => Auth::id(),
            'catatan' => $req->catatan ?? 'No notes provided',  // Jika tidak ada catatan, berikan nilai default
            'biaya_periksa' => $req->biaya_periksa ?? 0,  // Jika tidak ada biaya, berikan nilai default 0
        ];
    
        // Menyimpan data ke tabel periksas
        Periksa::create($data);
    
        return redirect('/pasien/periksa')->with('success', 'Periksa berhasil ditambahkan');
    }
    
}