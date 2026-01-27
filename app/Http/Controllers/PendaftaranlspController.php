<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaranlsp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranlspController extends Controller
{
    /**
     * Menampilkan daftar semua pendaftaran (Akses Admin)   .
     */
    public function index()
    {
        $data = Pendaftaranlsp::orderBy('created_at', 'desc')->get();
        return view('listpendaftaran', compact('data'));
    }

    /**
     * Menampilkan halaman formulir pendaftaran (Akses User).
     */
    public function create()
    {
        return view('pendaftaran');
    }

    /**
     * Menyimpan data pendaftaran baru ke database.
     */
    public function store(Request $request)
{
    // 1. Validasi
    $validated = $request->validate([
        'email_google'   => 'nullable|email',
        'nama'           => 'required|string|max:255',
        'nik'            => 'required|string|max:20',
        'tempat_lahir'   => 'required|string|max:100',
        'tanggal_lahir'  => 'required|date',
        'alamat'         => 'required|string',
        'telepon'        => 'required|string|max:20',
        'email'          => 'required|email',
        'program_studi'  => 'required|string',
        'batch'          => 'required|string',
        'skema'          => 'required|in:Receptionist,Waiter,Room Attendant,Commis Pastry',
        
        // File validation
        'transkrip_nilai'  => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        'sertifikat_otjt'  => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        'reference_letter' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
        'ktp_file'         => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        'cv'               => 'nullable|file|mimes:pdf|max:2048',
        'kartu_mahasiswa'  => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        'pas_foto'         => 'nullable|image|max:2048',
    ]);

    DB::beginTransaction();
    try {
        // 2. Olah Upload File
        $fileFields = ['transkrip_nilai', 'sertifikat_otjt', 'reference_letter', 'ktp_file', 'cv', 'kartu_mahasiswa', 'pas_foto'];
        
        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                // Simpan file dan ambil path-nya
                $path = $request->file($field)->store('pendaftaran_lsp', 'public');
                $validated[$field] = $path; 
            }
        }

        // 3. Simpan ke Database
        Pendaftaranlsp::create($validated);

        DB::commit();
        return redirect()->route('pendaftaranlsp.success')->with('success', 'Pendaftaran berhasil!');
        
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

    /**
     * Menampilkan form edit (Akses Admin).
     */
    public function edit($id)
    {
        $data = Pendaftaranlsp::findOrFail($id);
        return view('pendaftaran.edit', compact('data'));
    }

    /**
     * Update data pendaftaran (Akses Admin).
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama'          => 'required|string|max:255',
            'email'         => 'required|email',
            'telepon'       => 'required|string|max:20',
            'program_studi' => 'required|string',
            'batch'         => 'required|string',
            'skema'         => 'required|in:Receptionist,Waiter,Room Attendant,Commis Pastry',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir'  => 'required|string',
            'alamat'        => 'required|string',
        ]);

        $data = Pendaftaranlsp::findOrFail($id);
        $data->update($validated);

        return redirect()
            ->route('admin.pendaftaranlsp.index')
            ->with('success', 'Data peserta berhasil diperbarui!');
    }

    /**
     * Menghapus data pendaftaran (Akses Admin).
     */
    public function destroy($id)
    {
        $data = Pendaftaranlsp::findOrFail($id);
        $data->delete();

        return redirect()
            ->route('admin.pendaftaranlsp.index')
            ->with('success', 'Peserta berhasil dihapus!');
    }
}
