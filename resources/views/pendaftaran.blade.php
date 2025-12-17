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
    {{-- @include('partials.navbar') --}}
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

                    <form action="{{ route('pendaftaranlsp.store') }}" method="POST" class="space-y-8 px-4 sm:px-8">
                        @csrf

                        <div class="form-grid-3">
                            <div>
                                <label class="form-label">Nama Lengkap <span>*</span></label>
                                <input type="text" name="nama" required class="input-style" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso">
                            </div>
                            <div>
                                <label class="form-label">NISN <span>*</span></label>
                                <input type="text" name="nisn" required class="input-style" value="{{ old('nisn') }}" placeholder="Contoh: 0051234567">
                            </div>
                            <div>
                                <label class="form-label">Jenis Kelamin <span>*</span></label>
                                <select name="jenis_kelamin" required class="select-style">
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Email <span>*</span></label>
                                <input type="email" name="email" required class="input-style" value="{{ old('email') }}" placeholder="Contoh: nama@example.com">
                            </div>
                            <div>
                                <label class="form-label">Nomor Telepon (Aktif) <span>*</span></label>
                                <input type="tel" name="telepon" required class="input-style" value="{{ old('telepon') }}" placeholder="Contoh: 08123456789">
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Tempat Lahir <span>*</span></label>
                                <input type="text" name="tempat_lahir" required class="input-style" value="{{ old('tempat_lahir') }}" placeholder="Contoh: Bogor">
                            </div>
                            <div>
                                <label class="form-label">Tanggal Lahir <span>*</span></label>
                                <input type="date" name="tanggal_lahir" required class="input-style" value="{{ old('tanggal_lahir') }}">
                            </div>
                        </div>
                        
                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Sekolah Asal <span>*</span></label>
                                <input type="text" name="sekolah_asal" required class="input-style" value="{{ old('sekolah_asal') }}" placeholder="Contoh: SMK Negeri 1 Jakarta">
                            </div>
                            <div>
                                <label class="form-label">Kompetensi/Jurusan <span>*</span></label>
                                <select name="kompetensi" required class="select-style">
                                    <option value="" disabled selected>Pilih Kompetensi/Jurusan</option>
                                    <option value="Receptionist" {{ old('kompetensi') == 'Receptionist' ? 'selected' : '' }}>Receptionist</option>
                                    <option value="Waiter" {{ old('kompetensi') == 'Waiter' ? 'selected' : '' }}>Waiter</option>
                                    <option value="Room Attendant" {{ old('kompetensi') == 'Room Attendant' ? 'selected' : '' }}>Room Attendant</option>
                                    <option value="Commis Pastry" {{ old('kompetensi') == 'Commis Pastry' ? 'selected' : '' }}>Commis Pastry</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="form-label">Alamat Lengkap <span>*</span></label>
                            <textarea name="alamat" required class="input-style" placeholder="Masukkan alamat lengkap Anda">{{ old('alamat') }}</textarea>
                        </div>

                        <button class="btn-submit" type="submit">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Kirim Pendaftaran
                        </button>
                    </form>

                </div>

            </div>
        </main>
    </div>

</body>
</html>