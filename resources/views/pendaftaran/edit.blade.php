<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta - LSP STP Bogor</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E7A4F',
                        'primary-light': '#10B981',
                        'primary-dark': '#065F46',
                        'soft-green': '#D1FAE5',
                        'soft-gray': '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-soft-green min-h-screen">

    @include('partials.navbaradmin')

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- CARD -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-8">

            <!-- Header -->
            <div class="mb-10 pb-4 border-b border-gray-200">
                <h1 class="text-3xl font-extrabold text-primary-dark">Edit Data Peserta</h1>
                <p class="text-gray-500 mt-1 text-sm">
                    Perbarui informasi peserta pendaftaran LSP STP Bogor.
                </p>
            </div>

            <!-- FORM -->
            <form action="{{ route('admin.pendaftaranlsp.update', $data->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf
    @method('PUT')

    {{-- NAMA --}}
    <div>
        <label class="block font-semibold mb-1 text-gray-700">Nama Lengkap</label>
        <input type="text" name="nama"
            value="{{ old('nama', $data->nama) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
    </div>

    {{-- EMAIL & TELEPON --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block font-semibold mb-1 text-gray-700">Email</label>
            <input type="email" name="email"
                value="{{ old('email', $data->email) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
        </div>

        <div>
            <label class="block font-semibold mb-1 text-gray-700">Telepon</label>
            <input type="text" name="telepon"
                value="{{ old('telepon', $data->telepon) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
        </div>
    </div>

    {{-- PROGRAM STUDI --}}
    <div>
        <label class="block font-semibold mb-1 text-gray-700">Program Studi</label>
        <input type="text" name="program_studi"
            value="{{ old('program_studi', $data->program_studi) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
    </div>

    {{-- BATCH --}}
    <div>
        <label class="block font-semibold mb-1 text-gray-700">Batch</label>
        <input type="text" name="batch"
            value="{{ old('batch', $data->batch) }}"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
    </div>

    {{-- SKEMA --}}
    <div>
        <label class="block font-semibold mb-1 text-gray-700">Skema</label>
        <select name="skema" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all cursor-pointer">
            <option value="Receptionist"
                {{ old('skema', $data->skema) == 'Receptionist' ? 'selected' : '' }}>
                Receptionist
            </option>

            <option value="Waiter"
                {{ old('skema', $data->skema) == 'Waiter' ? 'selected' : '' }}>
                Waiter
            </option>

            <option value="Room Attendant"
                {{ old('skema', $data->skema) == 'Room Attendant' ? 'selected' : '' }}>
                Room Attendant
            </option>

            <option value="Commis Pastry"
                {{ old('skema', $data->skema) == 'Commis Pastry' ? 'selected' : '' }}>
                Commis Pastry
            </option>
        </select>
    </div>

    {{-- TEMPAT & TANGGAL LAHIR --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label class="block font-semibold mb-1 text-gray-700">Tempat Lahir</label>
            <input type="text" name="tempat_lahir"
                value="{{ old('tempat_lahir', $data->tempat_lahir) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
        </div>

        <div>
            <label class="block font-semibold mb-1 text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all">
        </div>
    </div>

    {{-- ALAMAT --}}
    <div>
        <label class="block font-semibold mb-1 text-gray-700">Alamat</label>
        <textarea name="alamat"
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all"
            rows="3">{{ old('alamat', $data->alamat) }}</textarea>
    </div>

     {{-- DOCUMENT UPROADS --}}
    <div class="pt-6 border-t border-gray-100 mt-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Dokumen Pendukung
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $files = [
                    'transkrip_nilai' => 'Transkrip Nilai',
                    'sertifikat_otjt' => 'Sertifikat OTJT',
                    'reference_letter' => 'Reference Letter',
                    'ktp_file' => 'KTP',
                    'cv' => 'CV (Curriculum Vitae)',
                    'kartu_mahasiswa' => 'Kartu Mahasiswa',
                    'pas_foto' => 'Pas Foto',
                ];
            @endphp

            @foreach($files as $field => $label)
                <div class="space-y-2">
                    <label class="block font-semibold text-gray-700 text-sm">{{ $label }}</label>
                    <input type="file" name="{{ $field }}" 
                           class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition-all cursor-pointer">
                    @if($data->{$field})
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-bold">TERSEDIA</span>
                            <a href="{{ asset('storage/' . $data->{$field}) }}" target="_blank" class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Lihat File
                            </a>
                        </div>
                    @else
                        <span class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded-full font-bold uppercase">BELUM ADA</span>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- BUTTON --}}
    <div class="flex justify-between pt-6">
        <a href="{{ route('admin.pendaftaranlsp.index') }}"
            class="px-6 py-2 bg-gray-200 rounded-lg">
            Kembali
        </a>

        <button type="submit"
            class="px-10 py-3 bg-green-600 text-white rounded-lg">
            Simpan Perubahan
        </button>
    </div>
</form>
        </div>

    </main>

</body>
</html>
