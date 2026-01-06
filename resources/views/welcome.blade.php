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
                        'primary-lighter': '#34D399',
                        'soft-green': '#D1FAE5',
                        'soft-gray': '#F9FAFB',
                        'dark-gray': '#1F2937',
                        'neon-green': '#00FF88',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                    fontSize: {
                        'xs': ['0.75rem', { lineHeight: '1rem' }],
                        'sm': ['0.875rem', { lineHeight: '1.25rem' }],
                        'base': ['1rem', { lineHeight: '1.5rem' }],
                        'lg': ['1.125rem', { lineHeight: '1.75rem' }],
                        'xl': ['1.25rem', { lineHeight: '1.75rem' }],
                        '2xl': ['1.5rem', { lineHeight: '2rem' }],
                        '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
                        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
                        '5xl': ['3rem', { lineHeight: '1' }],
                        '6xl': ['3.75rem', { lineHeight: '1' }],
                        '7xl': ['4.5rem', { lineHeight: '1' }],
                    },
                    boxShadow: {
                        'neon': '0 0 20px rgba(16, 185, 129, 0.5), inset 0 0 20px rgba(16, 185, 129, 0.1)',
                        'neon-lg': '0 0 40px rgba(16, 185, 129, 0.6), inset 0 0 30px rgba(16, 185, 129, 0.2)',
                        'glow': '0 0 30px rgba(16, 185, 129, 0.4)',
                    },
                    backdropFilter: {
                        'none': 'none',
                        'blur': 'blur(10px)',
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

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background: #FFFFFF;
            color: #1F2937;
        }

        /* HERO SECTION STYLES */
        .hero-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            background: #000;
        }

        .slider-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .slide.active {
            opacity: 1;
            z-index: 10;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: transparent;
            z-index: 2;
        }

        /* Navigation Controls */
        .controls {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            padding: 0 40px;
            display: flex;
            justify-content: space-between;
            z-index: 20;
        }

        .control-btn {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.5);
            color: white;
            font-size: 28px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .control-btn:hover {
            background: rgba(16, 185, 129, 0.5);
            border-color: #10B981;
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);
        }

        /* Dots Indicator */
        .dots {
            position: absolute;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 15px;
            z-index: 20;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 2px solid rgba(255, 255, 255, 0.6);
        }

        .dot.active {
            background: #10B981;
            border-color: #fff;
            transform: scale(1.3);
            box-shadow: 0 0 15px rgba(16, 185, 129, 0.6);
        }

        /* Animations */
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                box-shadow: 0 0 20px rgba(16, 185, 129, 0.4), inset 0 0 15px rgba(16, 185, 129, 0.1);
            }
            50% {
                box-shadow: 0 0 40px rgba(16, 185, 129, 0.7), inset 0 0 25px rgba(16, 185, 129, 0.2);
            }
        }

        .fade-in-up {
            animation: slideInUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
        }

        .fade-in-left {
            animation: slideInLeft 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
        }

        .fade-in-right {
            animation: slideInRight 0.8s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
            opacity: 0;
        }

        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }

        /* Card Styles */
        .card-neon {
            position: relative;
            border: 2px solid transparent;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            background: linear-gradient(135deg, #ffffff 0%, #f8feff 100%);
        }

        .card-neon:hover {
            border-color: #10B981;
            box-shadow: 0 0 40px rgba(16, 185, 129, 0.5), inset 0 0 20px rgba(16, 185, 129, 0.1);
            transform: translateY(-15px) scale(1.02);
        }

        .card-neon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0), rgba(16, 185, 129, 0.1));
            border-radius: inherit;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .card-neon:hover::before {
            opacity: 1;
        }

        /* Counter Card */
        .counter-card {
            background: linear-gradient(135deg, #f0fdf4 0%, #d1fae5 100%);
            border: 2px solid transparent;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            overflow: hidden;
        }

        .counter-card:hover {
            border-color: #10B981;
            background: linear-gradient(135deg, #10B981 0%, #059669 100%);
            box-shadow: 0 0 30px rgba(16, 185, 129, 0.6), inset 0 0 20px rgba(16, 185, 129, 0.2);
            transform: translateY(-12px) scale(1.05);
        }

        .counter-card:hover .counter {
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .counter-card:hover p {
            color: white;
        }

        .counter {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            color: #0E7A4F;
            text-shadow: 0 0 20px rgba(16, 185, 129, 0.3);
            letter-spacing: -1px;
        }

        /* Quote Box */
        .quote-section {
            background: linear-gradient(135deg, rgba(14, 122, 79, 0.08) 0%, rgba(16, 185, 129, 0.08) 100%);
        }

        .text-gradient {
            background: linear-gradient(135deg, #0E7A4F 0%, #10B981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        .image-overlay {
            position: relative;
            overflow: hidden;
        }

        .image-overlay::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 122, 79, 0.4) 0%, rgba(16, 185, 129, 0.2) 100%);
            transition: all 0.5s ease;
            opacity: 0;
        }

        .image-overlay:hover::after {
            opacity: 1;
        }

        .glow-button {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 10px 25px rgba(14, 122, 79, 0.2);
        }

        .glow-button:hover {
            box-shadow: 0 15px 40px rgba(14, 122, 79, 0.4);
            transform: scale(1.08);
        }

        .glow-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            transition: left 0.6s ease;
            z-index: 1;
        }

        .glow-button:hover::before {
            left: 100%;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .controls {
                padding: 0 20px;
            }

            .control-btn {
                width: 60px;
                height: 60px;
                font-size: 22px;
            }

            .counter {
                font-size: 2.25rem;
            }

            .dots {
                bottom: 80px;
                gap: 12px;
            }

            .dot {
                width: 10px;
                height: 10px;
            }
        }

        @media (max-width: 480px) {
            .controls {
                padding: 0 15px;
            }

            .control-btn {
                width: 50px;
                height: 50px;
                font-size: 18px;
            }

            .counter {
                font-size: 1.875rem;
            }

            .dots {
                bottom: 60px;
                gap: 8px;
            }

            .dot {
                width: 8px;
                height: 8px;
            }
        }

        p, span, a, li {
            font-weight: 400;
            letter-spacing: 0.3px;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }

        .mobile-menu.active {
            max-height: 800px;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body class="font-sans bg-white">
      @include('partials.navbar')
   

    <!-- HERO SECTION -->
    <section id="beranda" class="hero-container">
        <div class="slider-wrapper">
            <div class="slide active">
                <img src="{{ asset('image/stpimage2.jpg') }}" alt="Professional Team">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1542437503-52582f3b227d?w=1920&h=1080&fit=crop&q=80" alt="Training">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1920&h=1080&fit=crop&q=80" alt="Certification">
            </div>
            <div class="slide">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=1920&h=1080&fit=crop&q=80" alt="Development">
            </div>

            <div class="controls">
                <button class="control-btn" id="prevBtn" title="Slide Sebelumnya">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="control-btn" id="nextBtn" title="Slide Berikutnya">
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
    <section id="tentang" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-6">
                    Tentang LSP STP Bogor
                </h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-light">
                    Komitmen kami adalah menghasilkan tenaga profesional berkompeten dan diakui secara internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <div class="group bg-gradient-to-r from-soft-green/40 to-transparent p-6 sm:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm fade-in-up stagger-1">
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed group-hover:text-gray-900 font-normal">
                        <span class="font-bold text-primary text-base sm:text-lg">LSP STP Bogor</span> adalah Lembaga Sertifikasi Profesi (LSP) P1 yang dinaungi oleh Lembaga Pendidikan Sekolah Tinggi Pariwisata Bogor. Kami telah memiliki lisensi dari Badan Nasional Sertifikasi Profesi dengan nomor <span class="font-semibold text-primary">BNSP-LSP-2183-ID</span>.
                    </p>
                </div>

                <div class="group bg-gradient-to-r from-soft-green/40 to-transparent p-6 sm:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm fade-in-up stagger-2">
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed group-hover:text-gray-900 font-normal">
                        LSP P1 STP Bogor melakukan <span class="font-semibold text-primary">Uji Kompetensi</span> kepada mahasiswa dan mahasiswi internal Sekolah Tinggi Pariwisata Bogor untuk program D3 Perhotelan, D4 Perhotelan, dan S1 Pariwisata, baik program regular maupun kelas karyawan.
                    </p>
                </div>

                <div class="group bg-gradient-to-r from-soft-green/40 to-transparent p-6 sm:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm fade-in-up stagger-3">
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed group-hover:text-gray-900 font-normal">
                        Pelaksanaan uji kompetensi dilaksanakan di TUK Sekolah Tinggi Pariwisata Bogor setelah mahasiswa menyelesaikan masa <span class="font-semibold text-primary">On The Job Training</span> dan sebelum kelulusan.
                    </p>
                </div>

                <div class="group bg-gradient-to-r from-soft-green/40 to-transparent p-6 sm:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm fade-in-up stagger-4">
                    <p class="text-sm sm:text-base md:text-lg text-gray-700 leading-relaxed group-hover:text-gray-900 font-normal">
                        LSP STP Bogor memiliki skema-skema berstandar <span class="font-semibold text-primary">ASEAN</span> dan telah melakukan pelatihan Upgrading Asean Toolbox. Para peserta akan mendapatkan sertifikat berstandar ASEAN dan <span class="font-bold text-primary-light">diakui secara internasional</span>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- LISENSI SECTION -->
    <section id="lisensi" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 fade-in-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-6">
                    Mengapa Memilih LSP STP Bogor?
                </h2>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
                    LSP STP Bogor adalah pilihan terbaik untuk sertifikasi kompetensi Anda karena beberapa alasan berikut:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 fade-in-up stagger-2">
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full">
                    <div class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">
                            <i class="fas fa-award text-white text-5xl mb-4 block"></i>
                            <p class="text-white font-bold text-base sm:text-lg">BNSP Certified</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Lisensi Resmi</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Nomor: BNSP-LSP-2183-ID</p>
                    </div>
                </div>

                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full">
                    <div class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">
                            <i class="fas fa-globe text-white text-5xl mb-4 block"></i>
                            <p class="text-white font-bold text-base sm:text-lg">Standar ASEAN</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Internasional</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Diakui secara nasional dan internasional</p>
                    </div>
                </div>

                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full md:col-span-2 lg:col-span-1">
                    <div class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">
                            <i class="fas fa-shield-alt text-white text-5xl mb-4 block"></i>
                            <p class="text-white font-bold text-base sm:text-lg">Terpercaya</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Profesional</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Menghasilkan tenaga profesional berkompeten</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATISTIK SECTION -->
    <section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 right-0 w-80 h-80 sm:w-96 sm:h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 sm:w-96 sm:h-96 bg-primary-light rounded-full mix-blend-multiply filter blur-3xl"></div>
        </div>

        <div class="max-w-6xl mx-auto relative z-10">
            <div class="text-center mb-12 sm:mb-16 md:mb-20 fade-in-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-4">
                    Jumlah Mahasiswa Tersertifikasi
                </h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg font-light">Data Terbaru Tahun 2025</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 fade-in-up stagger-2">
                <div class="counter-card rounded-2xl p-4 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4" data-target="8">8</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Receptionist</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <div class="counter-card rounded-2xl p-4 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4" data-target="7">7</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Waiter</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <div class="counter-card rounded-2xl p-4 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4" data-target="7">7</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Room Attendant</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <div class="counter-card rounded-2xl p-4 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4" data-target="12">12</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Commis Pastry</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUOTE SECTION -->
    <section class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 quote-section">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-neon hover:shadow-neon-lg fade-in-up">
                <div class="grid md:grid-cols-5 gap-6 sm:gap-8 md:gap-12 p-6 sm:p-8 md:p-16 items-center">
                    <div class="md:col-span-3 fade-in-left">
                        <div class="relative mb-6 sm:mb-8">
                            <i class="fas fa-quote-left text-primary opacity-30 text-5xl sm:text-6xl mb-2 sm:mb-4"></i>
                            <p class="text-xl sm:text-2xl md:text-3xl font-semibold text-gray-800 leading-relaxed mb-2 pt-4 sm:pt-8">
                                Kami Ingin Mahasiswa STP Bogor memiliki
                                <span class="text-primary">Kualitas Skill</span> dan
                                <span class="text-primary">Kompetensi</span> yang Diakui Secara Nasional Maupun
                                Internasional.
                            </p>
                        </div>

                        <div class="flex items-center gap-3 sm:gap-4 pt-4 sm:pt-6">
                            <div class="w-1.5 h-12 sm:h-16 bg-primary rounded-full"></div>
                            <div>
                                <p class="font-bold text-base sm:text-lg md:text-xl text-primary">Usman</p>
                                <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Ketua LSP STP Bogor</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-2 flex justify-center fade-in-right">
                        <div class="relative group">
                            <div class="absolute -inset-2 sm:-inset-3 bg-[#0E7A4F] rounded-full blur-xl opacity-50 group-hover:opacity-100 transition duration-500"></div>
                            <div class="relative w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 bg-[#0E7A4F] rounded-full flex items-center justify-center shadow-2xl group-hover:shadow-neon-lg transition-all duration-500">
                                <div class="w-36 h-36 sm:w-44 sm:h-44 md:w-52 md:h-52 bg-white rounded-full flex items-center justify-center">
                                    <img src="{{ asset('image/ketuastp.g') }}" alt="Usman Image" class="w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 object-cover rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATE SECTION -->
    <section id="sertifikat" class="py-16 sm:py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 sm:mb-16 md:mb-20 fade-in-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-4">
                    Sertifikat Kami
                </h2>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
                    LSP STP Bogor telah mendapatkan berbagai sertifikat yang menunjukkan komitmen kami terhadap kualitas
                    dan standar internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8 fade-in-up stagger-2">
                <!-- Receptionist -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 hover:scale-[1.03] h-full flex flex-col">
                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="{{ asset('image/stpimage1.jpg') }}" alt="Receptionist Image" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3 class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">Receptionist</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pelayanan dan administrasi front office profesional
                        </p>
                        <a href="/sertifikat/receptionist" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 backdrop-blur-sm hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C] hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60 active:scale-95">
                            <i class="fas fa-arrow-right mr-2"></i> Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Waiter -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 hover:scale-[1.03] h-full flex flex-col">
                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="{{ asset('image/stpimage2.jpg') }}" alt="Waiter Image" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3 class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">Waiter</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pelayanan restoran profesional
                        </p>
                        <a href="/sertifikat/waiter" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 backdrop-blur-sm hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C] hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60 active:scale-95">
                            <i class="fas fa-arrow-right mr-2"></i> Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Room Attendant -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 hover:scale-[1.03] h-full flex flex-col">
                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="{{ asset('image/stpimage3.jpg') }}" alt="Room Attendant Image" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3 class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">Room Attendant</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi housekeeping hotel profesional
                        </p>
                        <a href="/sertifikat/roomattendant" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 backdrop-blur-sm hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C] hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60 active:scale-95">
                            <i class="fas fa-arrow-right mr-2"></i> Lihat Detail
                        </a>
                    </div>
                </div>

                <!-- Commis Pastry -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 hover:scale-[1.03] h-full flex flex-col">
                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="{{ asset('image/stpimage4.jpg') }}" alt="Commis Pastry Image" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3 class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">Commis Pastry</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pastry & bakery profesional
                        </p>
                        <a href="/sertifikat/commispastry" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 backdrop-blur-sm hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C] hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60 active:scale-95">
                            <i class="fas fa-arrow-right mr-2"></i> Lihat Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="kontak" class="relative bg-primary text-white">
        <div class="py-12 sm:py-16 md:py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-12 mb-8">
                    <!-- About -->
                    <div class="fade-in-left">
                        <div class="flex items-center gap-2 sm:gap-3 mb-4 sm:mb-6">
                            <i class="fas fa-certificate text-soft-green text-xl sm:text-2xl"></i>
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-black">LSP STP Bogor</h3>
                        </div>
                        <p class="text-gray-100 leading-relaxed text-xs sm:text-sm md:text-base font-light">
                            Lembaga Sertifikasi Profesi yang berkomitmen menghasilkan tenaga profesional berkompeten dan diakui secara internasional.
                        </p>
                    </div>

                    <!-- Contact -->
                    <div class="fade-in-up stagger-2">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 sm:mb-6">Hubungi Kami</h3>
                        <div class="space-y-2 sm:space-y-3 md:space-y-4 text-xs sm:text-sm md:text-base">
                            <a href="#" class="flex items-start gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <i class="fas fa-map-marker-alt text-soft-green mt-0.5 flex-shrink-0"></i>
                                <span class="leading-relaxed">Jl. Padjajaran No. 12<br />Bogor, Jawa Barat 16143</span>
                            </a>
                            <a href="tel:+6251832416" class="flex items-center gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <i class="fas fa-phone text-soft-green flex-shrink-0"></i>
                                <span>(0251) 8324163</span>
                            </a>
                            <a href="mailto:lsp@stpbogor.ac.id" class="flex items-center gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <i class="fas fa-envelope text-soft-green flex-shrink-0"></i>
                                <span>lsp@stpbogor.ac.id</span>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="fade-in-right stagger-3">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 sm:mb-6">Navigasi Cepat</h3>
                        <ul class="space-y-1 sm:space-y-2 md:space-y-3 text-xs sm:text-sm md:text-base">
                            <li><a href="#beranda" class="flex items-center gap-2 hover:text-soft-green transition group">
                                <i class="fas fa-chevron-right text-soft-green"></i>
                                Beranda
                            </a></li>
                            <li><a href="#tentang" class="flex items-center gap-2 hover:text-soft-green transition group">
                                <i class="fas fa-chevron-right text-soft-green"></i>
                                Tentang
                            </a></li>
                            <li><a href="#sertifikat" class="flex items-center gap-2 hover:text-soft-green transition group">
                                <i class="fas fa-chevron-right text-soft-green"></i>
                                Sertifikat
                            </a></li>
                            <li><a href="#kontak" class="flex items-center gap-2 hover:text-soft-green transition group">
                                <i class="fas fa-chevron-right text-soft-green"></i>
                                Kontak
                            </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Divider -->
                <div class="border-t border-white/20 pt-6 sm:pt-8 text-center fade-in-up stagger-4">
                    <p class="text-gray-200 text-xs sm:text-sm md:text-base font-light">&copy; 2025 LSP STP Bogor. Semua Hak Dilindungi.</p>
                    <p class="text-gray-300 text-xs mt-1 sm:mt-2">Lembaga Sertifikasi Profesi | BNSP-LSP-2183-ID</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
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

        setInterval(nextSlide, 8000);
    </script>
</body>
</html>