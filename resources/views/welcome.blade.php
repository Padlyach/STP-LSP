<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP STP Bogor - Lembaga Sertifikasi Profesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0E7A4F',
                        'primary-light': '#10B981',
                        'primary-dark': '#065F46',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background: #FFFFFF;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* HERO SLIDER */
        .hero-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .slide.active {
            opacity: 1;
            z-index: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.7);
        }

        .slide::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(14, 122, 79, 0.6) 0%, rgba(16, 185, 129, 0.4) 100%);
            z-index: 1;
        }

        /* Hero Content Overlay */
        .hero-content {
            position: absolute;
            inset: 0;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .hero-title {
            font-size: clamp(2rem, 6vw, 4.5rem);
            font-weight: 900;
            color: white;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
            line-height: 1.1;
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: clamp(1rem, 2vw, 1.5rem);
            color: rgba(255, 255, 255, 0.95);
            max-width: 700px;
            margin-bottom: 2.5rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1s ease-out 0.2s;
            animation-fill-mode: both;
        }

        .hero-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2.5rem;
            background: white;
            color: #0E7A4F;
            font-weight: 700;
            border-radius: 50px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            animation: fadeInUp 1s ease-out 0.4s;
            animation-fill-mode: both;
            text-decoration: none;
        }

        .hero-cta:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.4);
            background: #10B981;
            color: white;
        }

        /* Navigation Controls */
        .controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            z-index: 15;
        }

        .control-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .control-btn:hover {
            background: rgba(16, 185, 129, 0.8);
            border-color: white;
            transform: scale(1.15);
        }

        /* Dots Indicator */
        .dots {
            position: absolute;
            bottom: 3rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 0.75rem;
            z-index: 15;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.4s ease;
        }

        .dot.active {
            background: white;
            transform: scale(1.4);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Section Styles */
        .section-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 900;
            background: linear-gradient(135deg, #0E7A4F 0%, #10B981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            color: #6B7280;
            font-size: clamp(0.875rem, 2vw, 1.125rem);
            max-width: 700px;
            margin: 0 auto 3rem;
        }

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1.5rem;
            padding: 2rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(14, 122, 79, 0.15);
            border-color: rgba(16, 185, 129, 0.3);
        }

        /* Feature Card */
        .feature-card {
            position: relative;
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 2px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 60px rgba(14, 122, 79, 0.2);
            border-color: #10B981;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #0E7A4F, #10B981);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        /* Stats Card */
        .stats-card {
            background: linear-gradient(135deg, #f0fdf4 0%, #d1fae5 100%);
            border-radius: 1.5rem;
            padding: 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .stats-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #10B981, #059669);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .stats-card:hover::before {
            opacity: 1;
        }

        .stats-card:hover {
            transform: translateY(-10px) scale(1.05);
            border-color: #10B981;
            box-shadow: 0 20px 50px rgba(16, 185, 129, 0.3);
        }

        .stats-card:hover .counter,
        .stats-card:hover p {
            color: white;
            position: relative;
            z-index: 1;
        }

        .counter {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 900;
            color: #0E7A4F;
            margin-bottom: 0.5rem;
            transition: all 0.4s ease;
        }

        /* Certificate Card */
        .cert-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .cert-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 60px rgba(14, 122, 79, 0.2);
            border-color: #10B981;
        }

        .cert-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .cert-card:hover img {
            transform: scale(1.1);
        }

        /* Quote Section */
        .quote-card {
            background: white;
            border-radius: 2rem;
            padding: 3rem;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.1);
            border: 2px solid transparent;
            transition: all 0.4s ease;
        }

        .quote-card:hover {
            border-color: #10B981;
            box-shadow: 0 20px 70px rgba(14, 122, 79, 0.15);
        }

        /* Button Styles */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.875rem 1.75rem;
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            color: white;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 15px rgba(14, 122, 79, 0.3);
            text-decoration: none;
            border: 2px solid transparent;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(14, 122, 79, 0.4);
            background: white;
            color: #0E7A4F;
            border-color: #0E7A4F;
        }

        /* Scroll Animation */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .controls {
                padding: 0 1rem;
            }
            
            .control-btn {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }

            .dots {
                bottom: 2rem;
                gap: 0.5rem;
            }

            .glass-card,
            .quote-card {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <!-- HERO SECTION -->
    <section id="beranda" class="hero-container">
        <div class="slider-wrapper">
            <div class="slide active">
                <img src="{{ asset('image/gambar1.jpeg') }}"  alt="Professional Team">
            </div>
            <div class="slide">
                <img  src="{{ asset('image/gambar2.jpeg') }}"  alt="Training">
            </div>
            <div class="slide">
                <img  src="{{ asset('image/gambar3.jpeg') }}"  alt="Certification">
            </div>
            <div class="slide">
                <img  src="{{ asset('image/gambar4.jpeg') }}"  alt="Development">
            </div>

            <div class="hero-content">
                <h1 class="hero-title">
                    Lembaga Sertifikasi Profesi<br>
                    STP Bogor
                </h1>
                <p class="hero-subtitle">
                    Menghasilkan tenaga profesional berkompeten dan diakui secara nasional maupun internasional
                </p>
                <a href="#tentang" class="hero-cta">
                    <span>Pelajari Lebih Lanjut</span>
                    <i class="fas fa-arrow-down"></i>
                </a>
            </div>

            <div class="controls">
                <button class="control-btn" id="prevBtn" aria-label="Slide Sebelumnya">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="control-btn" id="nextBtn" aria-label="Slide Berikutnya">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
            </div>
        </div>
    </section>

    <!-- TENTANG SECTION -->
    <section id="tentang" class="py-24 px-4 bg-gradient-to-b from-white to-gray-50">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 scroll-reveal mt-20">
                <h2 class="section-title">Tentang LSP STP Bogor</h2>
                <p class="section-subtitle">
                    Komitmen kami adalah menghasilkan tenaga profesional berkompeten dan diakui secara internasional
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="glass-card scroll-reveal">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-certificate text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#0E7A4F] mb-2">Lembaga Terakreditasi</h3>
                            <p class="text-gray-700 leading-relaxed">
                                <span class="font-bold text-[#0E7A4F]">LSP STP Bogor</span> adalah Lembaga Sertifikasi Profesi (LSP) P1 yang dinaungi oleh Lembaga Pendidikan Sekolah Tinggi Pariwisata Bogor. Kami telah memiliki lisensi dari Badan Nasional Sertifikasi Profesi dengan nomor <span class="font-semibold text-[#0E7A4F]">BNSP-LSP-2183-ID</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="glass-card scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#0E7A4F] mb-2">Program Komprehensif</h3>
                            <p class="text-gray-700 leading-relaxed">
                                LSP P1 STP Bogor melakukan <span class="font-semibold text-[#0E7A4F]">Uji Kompetensi</span> kepada mahasiswa internal Sekolah Tinggi Pariwisata Bogor untuk program D3 Perhotelan, D4 Perhotelan, dan S1 Pariwisata, baik program regular maupun kelas karyawan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="glass-card scroll-reveal" style="transition-delay: 0.2s;">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#0E7A4F] mb-2">Fasilitas Modern</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Pelaksanaan uji kompetensi dilaksanakan di TUK Sekolah Tinggi Pariwisata Bogor setelah mahasiswa menyelesaikan masa <span class="font-semibold text-[#0E7A4F]">On The Job Training</span> dan sebelum kelulusan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="glass-card scroll-reveal" style="transition-delay: 0.3s;">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-globe text-white text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-[#0E7A4F] mb-2">Standar Internasional</h3>
                            <p class="text-gray-700 leading-relaxed">
                                LSP STP Bogor memiliki skema berstandar <span class="font-semibold text-[#0E7A4F]">ASEAN</span> dan telah melakukan pelatihan Upgrading Asean Toolbox. Para peserta akan mendapatkan sertifikat berstandar ASEAN dan <span class="font-bold text-[#10B981]">diakui secara internasional</span>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LISENSI SECTION -->
    <section id="lisensi" class="py-24 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="section-title">Mengapa Memilih LSP STP Bogor?</h2>
                <p class="section-subtitle">
                    LSP STP Bogor adalah pilihan terbaik untuk sertifikasi kompetensi Anda
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="feature-card scroll-reveal">
                    <div class="h-48 bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex flex-col items-center justify-center text-white p-6">
                        <i class="fas fa-award text-6xl mb-4"></i>
                        <p class="font-bold text-lg">BNSP Certified</p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Lisensi Resmi</h3>
                        <p class="text-gray-600 leading-relaxed">Nomor: BNSP-LSP-2183-ID</p>
                    </div>
                </div>

                <div class="feature-card scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="h-48 bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex flex-col items-center justify-center text-white p-6">
                        <i class="fas fa-globe text-6xl mb-4"></i>
                        <p class="font-bold text-lg">Standar ASEAN</p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Internasional</h3>
                        <p class="text-gray-600 leading-relaxed">Diakui secara nasional dan internasional</p>
                    </div>
                </div>

                <div class="feature-card scroll-reveal" style="transition-delay: 0.2s;">
                    <div class="h-48 bg-gradient-to-br from-[#0E7A4F] to-[#10B981] flex flex-col items-center justify-center text-white p-6">
                        <i class="fas fa-shield-alt text-6xl mb-4"></i>
                        <p class="font-bold text-lg">Terpercaya</p>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Profesional</h3>
                        <p class="text-gray-600 leading-relaxed">Menghasilkan tenaga profesional berkompeten</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATE SECTION -->
    <section id="sertifikat" class="py-24 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16 scroll-reveal">
                <h2 class="section-title">Skema Sertifikasi</h2>
                <p class="section-subtitle">
                    LSP STP Bogor menyediakan berbagai skema sertifikasi sesuai standar kompetensi internasional
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Receptionist -->
                <div class="cert-card scroll-reveal">
                    <div class="overflow-hidden">
                        <img src="{{ asset('image/stpimage1.jpg') }}" alt="Receptionist">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Receptionist</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 flex-grow">
                            Sertifikasi kompetensi pelayanan dan administrasi front office profesional
                        </p>
                        <a href="/sertifikat/receptionist" class="btn-primary w-full justify-center">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Waiter -->
                <div class="cert-card scroll-reveal" style="transition-delay: 0.1s;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('image/stpimage2.jpg') }}" alt="Waiter">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Waiter</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 flex-grow">
                            Sertifikasi kompetensi pelayanan restoran profesional
                        </p>
                        <a href="/sertifikat/waiter" class="btn-primary w-full justify-center">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Room Attendant -->
                <div class="cert-card scroll-reveal" style="transition-delay: 0.2s;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('image/stpimage3.jpg') }}" alt="Room Attendant">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Room Attendant</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 flex-grow">
                            Sertifikasi kompetensi housekeeping hotel profesional
                        </p>
                        <a href="/sertifikat/roomattendant" class="btn-primary w-full justify-center">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Commis Pastry -->
                <div class="cert-card scroll-reveal" style="transition-delay: 0.3s;">
                    <div class="overflow-hidden">
                        <img src="{{ asset('image/stpimage4.jpg') }}" alt="Commis Pastry">
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-2xl font-bold text-[#0E7A4F] mb-3">Commis Pastry</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 flex-grow">
                            Sertifikasi kompetensi pastry & bakery profesional
                        </p>
                        <a href="/sertifikat/commispastry" class="btn-primary w-full justify-center">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="kontak" class="bg-[#0E7A4F] text-white">
        <div class="py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <!-- About -->
                    <div class="scroll-reveal">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-12 h-12 bg-white/10 rounded-full flex items-center justify-center">
                                <i class="fas fa-certificate text-[#10B981] text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-black">LSP STP Bogor</h3>
                        </div>
                        <p class="text-gray-100 leading-relaxed">
                            Lembaga Sertifikasi Profesi yang berkomitmen menghasilkan tenaga profesional berkompeten dan diakui secara internasional.
                        </p>
                    </div>

                    <!-- Contact -->
                    <div class="scroll-reveal" style="transition-delay: 0.1s;">
                        <h3 class="text-xl font-bold mb-6">Hubungi Kami</h3>
                        <div class="space-y-4">
                            <a href="#" class="flex items-start gap-3 hover:text-[#10B981] transition group">
                                <i class="fas fa-map-marker-alt text-[#10B981] mt-1 flex-shrink-0"></i>
                                <span class="leading-relaxed">Jl. KH. R. Abdullah Bin Nuh Jl. Yasmin Raya No.16A, RT.01/RW.04, Curugmekar, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16113</span>
                            </a>
                            <a href="tel:+6251832416" class="flex items-center gap-3 hover:text-[#10B981] transition group">
                                <i class="fas fa-phone text-[#10B981] flex-shrink-0"></i>
                                <span>(0251) 8324163</span>
                            </a>
                            <a href="mailto:lsp@stpbogor.ac.id" class="flex items-center gap-3 hover:text-[#10B981] transition group">
                                <i class="fas fa-envelope text-[#10B981] flex-shrink-0"></i>
                                <span>lsp@stpbogor.ac.id</span>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="scroll-reveal" style="transition-delay: 0.2s;">
                        <h3 class="text-xl font-bold mb-6">Navigasi Cepat</h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="#beranda" class="flex items-center gap-2 hover:text-[#10B981] transition group">
                                    <i class="fas fa-chevron-right text-[#10B981] group-hover:translate-x-1 transition-transform"></i>
                                    Beranda
                                </a>
                            </li>
                            <li>
                                <a href="#tentang" class="flex items-center gap-2 hover:text-[#10B981] transition group">
                                    <i class="fas fa-chevron-right text-[#10B981] group-hover:translate-x-1 transition-transform"></i>
                                    Tentang
                                </a>
                            </li>
                            <li>
                                <a href="#sertifikat" class="flex items-center gap-2 hover:text-[#10B981] transition group">
                                    <i class="fas fa-chevron-right text-[#10B981] group-hover:translate-x-1 transition-transform"></i>
                                    Sertifikat
                                </a>
                            </li>
                            <li>
                                <a href="#kontak" class="flex items-center gap-2 hover:text-[#10B981] transition group">
                                    <i class="fas fa-chevron-right text-[#10B981] group-hover:translate-x-1 transition-transform"></i>
                                    Kontak
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-white/20 pt-8 text-center">
                    <p class="text-gray-200 mb-2">&copy; 2025 LSP STP Bogor. Semua Hak Dilindungi.</p>
                    <p class="text-gray-300 text-sm">Lembaga Sertifikasi Profesi | BNSP-LSP-2183-ID</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const totalSlides = slides.length;

        function goToSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            slides[n].classList.add('active');
            dots[n].classList.add('active');
            currentSlide = n;
        }

        function nextSlide() {
            let n = (currentSlide + 1) % totalSlides;
            goToSlide(n);
        }

        function prevSlide() {
            let n = (currentSlide - 1 + totalSlides) % totalSlides;
            goToSlide(n);
        }

        document.getElementById('nextBtn').addEventListener('click', nextSlide);
        document.getElementById('prevBtn').addEventListener('click', prevSlide);

        dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                const slideIndex = e.target.dataset.slide;
                goToSlide(parseInt(slideIndex));
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        });

        setInterval(nextSlide, 5000);

        // Counter Animation
        function animateCounter(element) {
            const target = parseInt(element.dataset.target);
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        }

        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    
                    // Animate counters when visible
                    const counter = entry.target.querySelector('.counter');
                    if (counter && !counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                }
            });
        }, observerOptions);

        // Observe all scroll-reveal elements
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>