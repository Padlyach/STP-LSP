<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranSertifikat;

class PendaftaranSertifikatController extends Controller
{
    /**
     * Menampilkan daftar pendaftar sertifikat
     * View: resources/views/admin/listdaftarsertifikat.blade.php
     */
    public function index()
    {
        $data = PendaftaranSertifikat::all();
        return view('admin.listdaftarsertifikat', compact('data'));
    }

    /**
     * Menampilkan halaman form pendaftaran
     * View: resources/views/admin/pendaftaransertifikat.blade.php
     */
    public function create()
    {
        return view('admin.pendaftaransertifikat');
    }

    /**
     * Menyimpan data pendaftaran sertifikat
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nama_universitas' => 'required',
            'kompetensi' => 'required',
            'alamat' => 'required',
            'sertifikat_depan' => 'required|mimes:jpg,jpeg,png,pdf|max:10240',
            'sertifikat_belakang' => 'required|mimes:jpg,jpeg,png,pdf|max:10240'
        ]);

        // Upload file
        $depan = $request->file('sertifikat_depan')->store('sertifikat', 'public');
        $belakang = $request->file('sertifikat_belakang')->store('sertifikat', 'public');

        // Simpan ke database
        PendaftaranSertifikat::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_universitas' => $request->nama_universitas,
            'kompetensi' => $request->kompetensi,
            'alamat' => $request->alamat,
            'sertifikat_depan' => $depan,
            'sertifikat_belakang' => $belakang,
        ]);

        // Redirect KE HALAMAN LIST
        return redirect()->route('admin.pendaftaransertifikat.index')
            ->with('success', "Data pendaftaran berhasil disimpan.");
    }

    public function beritaSertifikat()
{
    $data = PendaftaranSertifikat::all();
    return view('beritasertifikat', compact('data'));
}

public function destroy($id)
{
    $data = PendaftaranSertifikat::findOrFail($id);

    // Hapus file dari storage
    if ($data->sertifikat_depan && \Storage::exists('public/' . $data->sertifikat_depan)) {
        \Storage::delete('public/' . $data->sertifikat_depan);
    }

    if ($data->sertifikat_belakang && \Storage::exists('public/' . $data->sertifikat_belakang)) {
        \Storage::delete('public/' . $data->sertifikat_belakang);
    }

    // Hapus data dari database
    $data->delete();

    return redirect()->route('admin.pendaftaransertifikat.index')
        ->with('success', 'Data berhasil dihapus!');
}
}
