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

    <style>
        * { scroll-behavior: smooth; }

        .hero-section {
            background: linear-gradient(135deg, #0E7A4F 0%, #065F46 50%, #0a5a42 100%);
            position: relative;
            overflow: hidden;
            padding-top: 120px;
            padding-bottom: 80px;
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: clamp(2.5rem, 10vw, 4.5rem);
            font-weight: 900;
            line-height: 1.2;
            letter-spacing: -2px;
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 3vw, 1.3rem);
            font-weight: 300;
            opacity: 0.95;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.8;
        }

        .badge-hero {
            display: inline-block;
            padding: 12px 28px;
            background: rgba(255,255,255,0.15);
            border-radius: 50px;
            border: 1.5px solid rgba(255,255,255,0.3);
            cursor: pointer;
        }

        .form-card {
            border-radius: 1.5rem;
            box-shadow: 0 20px 60px rgba(14,122,79,0.12);
            max-width: 1100px;
            margin: 0 auto;
            background: white;
            border: 2px solid #E8F5F0;
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, rgba(16,185,129,0.12) 0%, rgba(209,250,229,0.15) 100%);
            border-bottom: 3px solid #10B981;
            padding: 2.5rem 0;
            margin-bottom: 2.5rem;
        }

        .form-header h2 {
            font-size: 1.875rem;
            font-weight: 800;
            color: #0E7A4F;
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0 2rem;
        }

        .form-header h2.data-peserta::before { content: '👤'; }
        .form-header h2.upload-sertifikat::before { content: '📄'; }

        .form-grid-2 { display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; }
        .form-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; }

        .form-label {
            font-weight: 700;
            margin-bottom: 0.875rem;
        }

        .input-style, .select-style {
            width: 100%;
            padding: 1.125rem 1.375rem;
            border: 2px solid #E5E7EB;
            border-radius: .875rem;
            font-size: 1rem;
        }

        textarea.input-style { min-height: 140px; }

        .file-input-style::before {
            content: 'Pilih File';
            background: #10B981;
            color: white;
            padding: .5rem 1rem;
            border-radius: .5rem;
            cursor: pointer;
        }

        .file-input-style.has-file::before { content: 'Ganti File'; }

        .btn-submit {
            width: 100%;
            padding: 1.25rem 2.5rem;
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            color: white;
            border-radius: .875rem;
            font-weight: 700;
            margin-top: 2.5rem;
            display: flex;
            justify-content: center;
            gap: .875rem;
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body class="bg-gradient-to-br from-soft-gray via-white to-soft-green font-sans">
     @include('partials.navbaradmin')
    <div class="min-h-screen flex flex-col">

        <header class="hero-section">
            <div class="max-w-7xl mx-auto px-4 hero-content">
                <h1 class="hero-title">Input Sertifikat</h1>
                <p class="hero-subtitle">Untuk Menambahkan Data Sertifikat</p>
                <div class="badge-hero">📝 Isi data Anda dengan benar</div>
            </div>
        </header>

        <main class="flex-grow py-12 px-4">
            <div class="max-w-7xl mx-auto">

                <div class="form-card p-8">

                    <form action="{{ route('admin.pendaftaransertifikat.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10 px-4 sm:px-8">
                        @csrf

                        <!-- DATA PESERTA -->
                        <div class="form-header -mx-4 sm:-mx-8">
                            <h2 class="data-peserta">Data Peserta</h2>
                        </div>

                        <div class="space-y-8">

                            <div class="form-grid-3">
                                <div>
                                    <label class="form-label">Nama Lengkap <span>*</span></label>
                                    <input type="text" name="nama" value="{{ old('nama') }}" required class="input-style" placeholder="Contoh: Budi Santoso">
                                </div>

                                <div>
                                    <label class="form-label">NIM <span>*</span></label>
                                    <input type="text" name="nim" value="{{ old('nim') }}" required class="input-style">
                                </div>

                                <div>
                                    <label class="form-label">Jenis Kelamin <span>*</span></label>
                                    <select name="jenis_kelamin" class="select-style" required>
                                        <option value="" disabled selected>Pilih</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-grid-2">
                                <div>
                                    <label class="form-label">Email <span>*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" required class="input-style">
                                </div>
                                <div>
                                    <label class="form-label">Telepon <span>*</span></label>
                                    <input type="tel" name="telepon" value="{{ old('telepon') }}" required class="input-style">
                                </div>
                            </div>

                            <div class="form-grid-2">
                                <div>
                                    <label class="form-label">Tempat Lahir <span>*</span></label>
                                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required class="input-style">
                                </div>
                                <div>
                                    <label class="form-label">Tanggal Lahir <span>*</span></label>
                                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required class="input-style">
                                </div>
                            </div>

                            <div class="form-grid-2">
                                <div>
                                    <label class="form-label">Nama Universitas <span>*</span></label>
                                    <input type="text" name="nama_universitas" value="{{ old('nama_universitas') }}" required class="input-style">
                                </div>

                                <div>
                                    <label class="form-label">Kompetensi <span>*</span></label>
                                    <select name="kompetensi" class="select-style" required>
                                        <option value="" disabled selected>Pilih Kompetensi</option>
                                        <option>Receptionist</option>
                                        <option>Waiter</option>
                                        <option>Room Attendant</option>
                                        <option>Commis Pastry</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="form-label">Alamat Lengkap <span>*</span></label>
                                <textarea name="alamat" class="input-style" required>{{ old('alamat') }}</textarea>
                            </div>
                        </div>

                        <!-- UPLOAD -->
                        <div class="form-header -mx-4 sm:-mx-8 mt-12">
                            <h2 class="upload-sertifikat">Upload Dokumen</h2>
                        </div>

                        <div class="form-grid-2">
                            <div>
                                <label class="form-label">Sertifikat Depan <span>*</span></label>
                                <input type="file" name="sertifikat_depan" accept="image/*,application/pdf" required class="" onchange="checkFile(this)">
                            </div>

                            <div>
                                <label class="form-label">Sertifikat Belakang <span>*</span></label>
                                <input type="file" name="sertifikat_belakang" accept="image/*,application/pdf" required class="" onchange="checkFile(this)">
                            </div>
                        </div>

                        <button class="btn-submit" type="submit">
                            <svg width="20" height="20" fill="none" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Kirim Pendaftaran
                        </button>

                    </form>

                </div>

            </div>
        </main>
    </div>

    <script>
        function checkFile(input) {
            if (input.files.length > 0) input.classList.add("has-file");
            else input.classList.remove("has-file");
        }
    </script>
</body>
</html>
