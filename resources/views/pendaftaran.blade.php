<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta - LSP STP Bogor</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0E7A4F',
                        'primary-light': '#10B981',
                        'primary-dark': '#065F46',
                        'soft-green': '#D1FAE5',
                        'soft-gray': '#F9FAFB',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/pendaftaran.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body class="bg-gradient-to-br from-soft-gray via-white to-soft-green text-gray-800 antialiased font-sans">
    
    @include('partials.navbar')

    <div class="min-h-screen flex flex-col">
        
        <header class="hero-section">
            <div class="max-w-7xl mx-auto px-4 hero-content">
                <h1 class="hero-title">Pendaftaran Peserta</h1>
                <p class="hero-subtitle">
                    FORMULIR PENDAFTARAN SERTIFIKASI UJI KOMPETENSI
                </p>
                <div class="badge-hero">📝 Isi data Anda dengan benar</div>
            </div>
        </header>

        <main class="flex-grow py-12 px-4">
            <div class="max-w-7xl mx-auto">

                <div class="form-card p-8">

                    <div class="form-header">
                        <h2>Data Peserta</h2>
                    </div>

                    {{-- Pesan Error Global jika ada masalah database --}}
                    @if(session('error'))
                        <div style="color: #b91c1c; background-color: #fee2e2; padding: 1rem; border-radius: 0.5rem; margin-bottom: 1.5rem;">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('pendaftaranlsp.store') }}" 
                          method="POST" 
                          enctype="multipart/form-data"
                          class="space-y-8 px-4 sm:px-8">
                        @csrf

                        <div class="form-grid-3">
                            <div>
                                <label class="form-label">Nama Lengkap <span>*</span></label>
                                <input type="text" name="nama" required class="input-style"
                                    value="{{ old('nama') }}">
                                @error('nama') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">NIK <span>*</span></label>
                                <input type="text" name="nik" required class="input-style"
                                    value="{{ old('nik') }}">
                                @error('nik') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Email Google</label>
                                <input type="email" name="email_google" class="input-style"
                                    value="{{ old('email_google') }}">
                                @error('email_google') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Email Aktif <span>*</span></label>
                                <input type="email" name="email" required class="input-style"
                                    value="{{ old('email') }}">
                                @error('email') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">No. Telepon <span>*</span></label>
                                <input type="text" name="telepon" required class="input-style"
                                    value="{{ old('telepon') }}">
                                @error('telepon') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Tempat Lahir <span>*</span></label>
                                <input type="text" name="tempat_lahir" required class="input-style"
                                    value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Tanggal Lahir <span>*</span></label>
                                <input type="date" name="tanggal_lahir" required class="input-style"
                                    value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="form-label">Alamat Lengkap <span>*</span></label>
                            <textarea name="alamat" required class="input-style">{{ old('alamat') }}</textarea>
                            @error('alamat') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-grid-3">
                            <div>
                                <label class="form-label">Program Studi <span>*</span></label>
                                <select name="program_studi" required class="select-style">
                                    <option value="">Pilih Program Studi</option>
                                    <option value="S1 Pariwisata" {{ old('program_studi') == 'S1 Pariwisata' ? 'selected' : '' }}>S1 Pariwisata</option>
                                    <option value="D3 Perhotelan" {{ old('program_studi') == 'D3 Perhotelan' ? 'selected' : '' }}>D3 Perhotelan</option>
                                    <option value="D4 Perhotelan" {{ old('program_studi') == 'D4 Perhotelan' ? 'selected' : '' }}>D4 Perhotelan</option>
                                </select>
                                @error('program_studi') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Batch <span>*</span></label>
                                <input type="text" name="batch" required class="input-style"
                                    value="{{ old('batch') }}">
                                @error('batch') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Skema <span>*</span></label>
                                <select name="skema" required class="select-style">
                                    <option value="">Pilih Skema</option>
                                    <option value="Receptionist" {{ old('skema') == 'Receptionist' ? 'selected' : '' }}>Receptionist</option>
                                    <option value="Waiter" {{ old('skema') == 'Waiter' ? 'selected' : '' }}>Waiter</option>
                                    <option value="Room Attendant" {{ old('skema') == 'Room Attendant' ? 'selected' : '' }}>Room Attendant</option>
                                    <option value="Commis Pastry" {{ old('skema') == 'Commis Pastry' ? 'selected' : '' }}>Commis Pastry</option>
                                </select>
                                @error('skema') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Transkrip Nilai (PDF) </label>
                                <input type="file" name="transkrip_nilai" class="input-style">
                                @error('transkrip_nilai') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Sertifikat OJT (PDF) </label>
                                <input type="file" name="sertifikat_otjt" class="input-style">
                                @error('sertifikat_otjt') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Surat Referensi (PDF) </label>
                                <input type="file" name="reference_letter" class="input-style">
                                @error('reference_letter') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Scan KTP (PDF) </label>
                                <input type="file" name="ktp_file" class="input-style">
                                @error('ktp_file') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">CV (PDF) </label>
                                <input type="file" name="cv" class="input-style">
                                @error('cv') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="form-label">Kartu Mahasiswa (PDF) </label>
                                <input type="file" name="kartu_mahasiswa" class="input-style">
                                @error('kartu_mahasiswa') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="form-label">Pas Foto (IMG) </label>
                            <input type="file" name="pas_foto" class="input-style">
                            @error('pas_foto') <span style="color:red; font-size:12px;">{{ $message }}</span> @enderror
                        </div>

                        <button class="btn-submit w-full" type="submit">
                            Kirim Pendaftaran
                        </button>
                    </form>

                </div>

            </div>
        </main>
    </div>

</body>
</html>