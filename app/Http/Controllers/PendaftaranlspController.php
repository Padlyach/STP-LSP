<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaranlsp;
use Illuminate\Http\Request;

class PendaftaranlspController extends Controller
{
    /**
     * Menampilkan daftar (list) semua pendaftaran (Akses Admin).
     * View yang dipanggil: listpendaftaran.blade.php
     */
    public function index()
    {
        $data = Pendaftaranlsp::orderBy('created_at', 'desc')->get();
        
        // KOREKSI: Memanggil view 'listpendaftaran'
        return view('listpendaftaran', compact('data'));
    }

    /**
     * Menampilkan halaman formulir pendaftaran baru (Akses User).
     * View yang dipanggil: pendaftaran.blade.php
     */
    public function create()
    {
        // View yang dipanggil: 'pendaftaran'
        return view('pendaftaran');
    }

    /**
     * Menyimpan data pendaftaran baru ke database.
     * Setelah selesai, User harus diarahkan ke halaman sukses.
     */
    public function store(Request $request)
    {
        // Aturan validasi
        $request->validate([
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string',
            'email' => 'required|email',
            'telepon' => 'required|string|max:20',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'sekolah_asal' => 'required|string',
            // PENTING: Validasi 'in' untuk membatasi hanya opsi dropdown yang valid
            'kompetensi' => 'required|string|in:Receptionist,Waiter,Room Attendant,Commis Pastry',
        ]);

        // Simpan data
        Pendaftaranlsp::create([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'sekolah_asal' => $request->sekolah_asal,
            'kompetensi' => $request->kompetensi,
        ]);

        // ==========================================================
        // 🔥 PERBAIKAN UTAMA: Redirect User ke halaman sukses
        //    (sesuai rute 'pendaftaranlsp.success' di web.php)
        // ==========================================================
        return redirect()->route('pendaftaranlsp.success')->with('success', 'Pendaftaran berhasil disimpan!');
    }

    /**
     * Menampilkan formulir edit pendaftaran (Akses Admin).
     */
    public function edit($id)
    {
        $data = PendaftaranLsp::findOrFail($id);
        return view('pendaftaran.edit', compact('data'));
    }

    /**
     * Memperbarui data pendaftaran (Akses Admin).
     */
    public function update(Request $request, $id)
    {
        // Mendefinisikan aturan validasi secara eksplisit
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'required|string|max:20',
            'sekolah_asal' => 'required|string',
            'kompetensi' => 'required|string|in:Receptionist,Waiter,Room Attendant,Commis Pastry',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string',
            'jenis_kelamin' => 'required',
            // Catatan: Anda mungkin ingin menambahkan nisn dan alamat di sini
        ]);

        $data = PendaftaranLsp::findOrFail($id);
        // Menggunakan $validatedData untuk update agar lebih aman
        $data->update($validatedData); 

        return redirect()->route('admin.pendaftaranlsp.index')->with('success', 'Data peserta berhasil diperbarui!');
    }

    /**
     * Menghapus data pendaftaran (Akses Admin).
     */
   public function destroy($id)
{
    $data = Pendaftaranlsp::findOrFail($id);
    $data->delete();

    return redirect()->route('admin.pendaftaranlsp.index')
        ->with('success', 'Peserta berhasil dihapus!');
}
} 