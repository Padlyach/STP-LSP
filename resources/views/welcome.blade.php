<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSP STP Bogor - Lembaga Sertifikasi Profesi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

       
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

<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">


    
</head>

<body class="font-sans bg-white">
    @include('partials.navbar')
   
   <!-- ============= HERO SECTION ============= -->
    <section class="hero-container">
        <!-- Background Elements -->
        <div class="hero-bg">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="grid-bg"></div>
            <div class="overlay"></div>
        </div>

        <!-- Content -->
        <div class="hero-content">
            <!-- Badge -->
            <div class="badge">✓ Sertifikasi Profesional ASEAN</div>

            <!-- Title -->
            <h1 class="hero-title">
                LSP STP <span class="hero-title">Bogor</span>
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle">
                <span class="hero-subtitle-highlight">Lembaga Sertifikasi Profesi</span><br>
                Sekolah Tinggi Pariwisata Bogor
            </p>

            <p class="hero-subtitle" style="font-size: 1rem; font-weight: 400; animation-delay: 0.55s;">
                Menghasilkan tenaga profesional berkompeten dan diakui secara <span class="hero-subtitle-highlight">internasional</span>
            </p>

            <!-- Buttons -->
            <div class="button-group">
                <button class="btn btn-primary">Jelajahi Lebih Lanjut</button>
                <button class="btn btn-secondary">Hubungi Kami</button>
            </div>
        </div>

    </section>



    <!-- ============= TENTANG SECTION ============= -->
    <section id="tentang" class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">

            <div class="text-center mb-10 sm:mb-12 md:mb-16 fade-in-up">
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-4 sm:mb-6">
                    Tentang LSP STP Bogor
                </h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-light">
                    Komitmen kami adalah menghasilkan tenaga profesional berkompeten dan diakui secara internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 md:gap-8 fade-in-up stagger-2">

                <div
                    class="group bg-gradient-to-r from-soft-green/40 to-transparent p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm">
                    <div class="relative pb-4">
                        <p
                            class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 leading-relaxed group-hover:text-gray-900 transition font-normal">
                            <span class="font-bold text-primary text-base sm:text-lg">LSP STP Bogor</span> adalah
                            Lembaga Sertifikasi Profesi (LSP) P1 yang dinaungi oleh Lembaga Pendidikan Sekolah Tinggi
                            Pariwisata Bogor. Kami telah memiliki lisensi dari Badan Nasional Sertifikasi Profesi dengan
                            nomor
                            <span class="font-semibold text-primary">BNSP-LSP-2183-ID</span>.
                        </p>
                    </div>
                </div>

                <div
                    class="group bg-gradient-to-r from-soft-green/40 to-transparent p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm">
                    <p
                        class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 leading-relaxed group-hover:text-gray-900 transition font-normal">
                        LSP P1 STP Bogor melakukan <span class="font-semibold text-primary">Uji Kompetensi</span> kepada
                        mahasiswa dan mahasiswi internal Sekolah Tinggi Pariwisata Bogor untuk program D3 Perhotelan, D4
                        Perhotelan, dan S1 Pariwisata, baik program regular maupun kelas karyawan.
                    </p>
                </div>

                <div
                    class="group bg-gradient-to-r from-soft-green/40 to-transparent p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm">
                    <p
                        class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 leading-relaxed group-hover:text-gray-900 transition font-normal">
                        Pelaksanaan uji kompetensi dilaksanakan di TUK Sekolah Tinggi Pariwisata Bogor setelah mahasiswa
                        menyelesaikan masa <span class="font-semibold text-primary">On The Job Training</span> dan
                        sebelum kelulusan.
                    </p>
                </div>

                <div
                    class="group bg-gradient-to-r from-soft-green/40 to-transparent p-4 sm:p-6 md:p-8 rounded-2xl border-l-4 border-primary-light hover:border-primary-dark hover:shadow-glow transition-all duration-500 backdrop-blur-sm">
                    <p
                        class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 leading-relaxed group-hover:text-gray-900 transition font-normal">
                        LSP STP Bogor memiliki skema-skema berstandar <span
                            class="font-semibold text-primary">ASEAN</span> dan telah melakukan pelatihan Upgrading
                        Asean Toolbox. Para peserta akan mendapatkan sertifikat berstandar ASEAN dan <span
                            class="font-bold text-primary-light">diakui secara internasional</span>.
                    </p>
                </div>

            </div>

        </div>
    </section>



    <!-- ============= LISENSI SECTION ============= -->
    <section id="lisensi"
        class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-6 sm:mb-8 md:mb-10 fade-in-up">
                <h2 class="section-title text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-4">
                    Mengapa Memilih LSP STP Bogor?
                </h2>
                <p
                    class="text-xs sm:text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
                    LSP STP Bogor adalah pilihan terbaik untuk sertifikasi kompetensi Anda karena beberapa alasan
                    berikut:
                </p>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8 fade-in-up stagger-2">
                <!-- Card 1 -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full">
                    <div
                        class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">

                            <p class="text-white font-bold text-base sm:text-lg">BNSP Certified</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Lisensi Resmi</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Nomor: BNSP-LSP-2183-ID</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full">
                    <div
                        class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">

                            <p class="text-white font-bold text-base sm:text-lg">Standar ASEAN</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Internasional</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Diakui secara nasional dan
                            internasional</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg relative group h-full md:col-span-2 lg:col-span-1">
                    <div
                        class="h-56 sm:h-64 bg-gradient-to-br from-primary-light via-primary to-primary-dark flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 opacity-20 group-hover:opacity-40 transition"></div>
                        <div class="relative z-10 text-center">

                            <p class="text-white font-bold text-base sm:text-lg">Terpercaya</p>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold text-primary mb-2">Profesional</h3>
                        <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Menghasilkan tenaga
                            profesional berkompeten</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= STATISTIK SECTION ============= -->
    <section
        class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div
                class="absolute top-0 right-0 w-80 h-80 sm:w-96 sm:h-96 bg-primary rounded-full mix-blend-multiply filter blur-3xl">
            </div>
            <div
                class="absolute bottom-0 left-0 w-80 h-80 sm:w-96 sm:h-96 bg-primary-light rounded-full mix-blend-multiply filter blur-3xl">
            </div>
        </div>

        <div class="max-w-6xl mx-auto relative z-10">

            <!-- Judul diperbaiki -->
            <div class="text-center mb-8 sm:mb-12 md:mb-16 fade-in-up">
                <h2 class="section-title text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-4">
                    Jumlah Mahasiswa Tersertifikasi
                </h2>
                <p class="text-gray-600 text-sm sm:text-base md:text-lg font-light">Data Terbaru Tahun 2025</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-2 sm:gap-4 md:gap-6 fade-in-up stagger-2">

                <!-- Receptionist -->
                <div
                    class="counter-card rounded-2xl p-3 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter count-animation text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4"
                        data-target="8">8</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Receptionist</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <!-- Waiter -->
                <div
                    class="counter-card rounded-2xl p-3 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter count-animation text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4"
                        data-target="7">7</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Waiter</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <!-- Room Attendant -->
                <div
                    class="counter-card rounded-2xl p-3 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter count-animation text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4"
                        data-target="7">7</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Room Attendant</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

                <!-- Commis Pastry -->
                <div
                    class="counter-card rounded-2xl p-3 sm:p-6 md:p-8 text-center border-2 transform transition-all duration-500">
                    <div class="counter count-animation text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-black mb-2 sm:mb-4"
                        data-target="12">12</div>
                    <p class="text-gray-700 font-semibold text-xs sm:text-sm md:text-base">Commis Pastry</p>
                    <div class="mt-2 sm:mt-3 h-1 bg-gradient-to-r from-primary to-primary-light rounded-full"></div>
                </div>

            </div>
        </div>
    </section>


    <!-- ============= QUOTE SECTION ============= -->
    <section class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 quote-section">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden card-neon hover:shadow-neon-lg fade-in-up">
                <div class="grid md:grid-cols-5 gap-4 sm:gap-6 md:gap-8 p-4 sm:p-8 md:p-12 lg:p-16 items-center">

                    <!-- Quote Content -->
                    <div class="md:col-span-3 fade-in-left">
                        <div class="relative mb-6 sm:mb-8">

                            <!-- SVG opening quote -->
                            <svg class="w-12 h-12 text-primary opacity-50 mb-4 absolute top-0 left-0 -mt-6 -ml-6"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433 .917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>

                            <p
                                class="text-2xl md:text-3xl font-semibold text-gray-800 leading-relaxed mb-2 pt-10 pl-10">
                                Kami Ingin Mahasiswa STP Bogor memiliki
                                <span class="text-primary">Kualitas Skill</span> dan
                                <span class="text-primary">Kompetensi</span> yang Diakui Secara Nasional Maupun
                                Internasional.
                            </p>

                        </div>

                        <!-- Bagian identitas tanpa garis -->
                        <div class="flex items-center gap-3 sm:gap-4 pt-4 sm:pt-6">
                            <div class="w-1.5 h-12 sm:h-16 bg-primary rounded-full"></div>
                            <div>
                                <p class="font-bold text-base sm:text-lg md:text-xl text-primary">Usman</p>
                                <p class="text-gray-600 text-xs sm:text-sm md:text-base font-light">Ketua LSP STP Bogor
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <div class="md:col-span-2 flex justify-center fade-in-right">
                        <div class="relative group">

                            <div
                                class="absolute -inset-2 sm:-inset-3 bg-[#0E7A4F] rounded-full blur-xl opacity-50 group-hover:opacity-100 transition duration-500">
                            </div>

                            <div
                                class="relative w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 bg-[#0E7A4F] rounded-full flex items-center justify-center shadow-2xl group-hover:shadow-neon-lg transition-all duration-500">

                                <div
                                    class="w-36 h-36 sm:w-44 sm:h-44 md:w-52 md:h-52 bg-white rounded-full flex items-center justify-center">

                                    <img src="{{ asset('build/assets/image/ketuastp.png') }}"
                                        class="w-48 h-48 object-contain rounded-full">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- ============= CERTIFICATE SECTION ============= -->
    <section id="sertifikat"
        class="py-8 sm:py-12 md:py-14 lg:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-white via-soft-gray to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-6 sm:mb-8 md:mb-10 fade-in-up">
                <h2 class="section-title text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-primary mb-2">
                    Sertifikat Kami
                </h2>
                <p
                    class="text-xs sm:text-sm md:text-base lg:text-lg text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
                    LSP STP Bogor telah mendapatkan berbagai sertifikat yang menunjukkan komitmen kami terhadap kualitas
                    dan standar internasional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 fade-in-up stagger-2">
                <!-- Card 1: Receptionist -->
                <div
                    class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 hover:scale-[1.03] h-full flex flex-col">

                    <!-- FOTO - TANPA ZOOM -->
                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="/build/assets/image/stpimage1.jpg" alt="Receptionist Image"
                            class="w-full h-full object-cover transition-none">
                    </div>

                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3
                            class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">
                            Receptionist
                        </h3>

                        <p
                            class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pelayanan dan administrasi front office profesional
                        </p>

                        <a href="/sertifikat/receptionist" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer 
                        
                        /* Kondisi Normal: Hijau Gelap + Glassy */
                        bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 
                        backdrop-blur-sm bg-opacity-95
                        
                        /* Efek Hover: Putih Solid, Teks Hijau Gelap, Zoom */
                        hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C]
                        hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60
                        
                        /* Efek Active (Saat Diklik): Tertekan */
                        active:scale-95 active:bg-white active:text-[#147D4C]">
                            Lihat Detail
                        </a>
                    </div>
                </div>






                <!-- Card 2: Waiter -->
                <div
                    class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 h-full flex flex-col">

                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="/build/assets/image/stpimage2.jpg" alt="Waiter Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3
                            class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">
                            Waiter </h3>
                        <p
                            class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pelayanan restoran profesional </p>

                        <a href="/sertifikat/waiter" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer 
                        
                        /* Kondisi Normal: Hijau Gelap + Glassy */
                        bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 
                        backdrop-blur-sm bg-opacity-95
                        
                        /* Efek Hover: Putih Solid, Teks Hijau Gelap, Zoom */
                        hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C]
                        hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60
                        
                        /* Efek Active (Saat Diklik): Tertekan */
                        active:scale-95 active:bg-white active:text-[#147D4C]">
                            Lihat Detail
                        </a>
                    </div>
                </div>


                <!-- Card 3: Room Attendant -->
                <div
                    class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 h-full flex flex-col">

                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="/build/assets/image/stpimage3.jpg" alt="Room Attendant Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3
                            class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">
                            Room Attendant </h3>
                        <p
                            class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi housekeeping hotel profesional </p>

                        <a href="/sertifikat/roomattendant" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer 
                        
                        /* Kondisi Normal: Hijau Gelap + Glassy */
                        bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 
                        backdrop-blur-sm bg-opacity-95
                        
                        /* Efek Hover: Putih Solid, Teks Hijau Gelap, Zoom */
                        hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C]
                        hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60
                        
                        /* Efek Active (Saat Diklik): Tertekan */
                        active:scale-95 active:bg-white active:text-[#147D4C]">
                            Lihat Detail
                        </a>
                    </div>
                </div>

                <div
                    class="card-neon rounded-2xl overflow-hidden shadow-lg hover:shadow-neon-lg border-2 group transform transition-all duration-500 h-full flex flex-col">

                    <div class="h-40 sm:h-48 md:h-56 relative overflow-hidden flex-shrink-0">
                        <img src="/build/assets/image/stpimage4.jpg" alt="Commis Pastry Image"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>

                    <div class="p-4 sm:p-5 md:p-6 flex flex-col flex-grow">
                        <h3
                            class="text-base sm:text-lg md:text-xl font-bold text-primary mb-1 sm:mb-2 group-hover:text-primary-light transition">
                            Commis Pastry
                        </h3>

                        <p
                            class="text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-3 sm:mb-4 flex-grow font-light">
                            Sertifikasi kompetensi pastry & bakery profesional
                        </p>

                        <a href="/sertifikat/commispastry" class="inline-block w-full text-center px-4 py-2 text-xs sm:text-sm font-semibold rounded-xl transition-all duration-300 cursor-pointer 
                        
                        /* Kondisi Normal: Hijau Gelap + Glassy */
                        bg-[#147D4C] text-white border-2 border-transparent shadow-md shadow-[#147D4C]/40 
                        backdrop-blur-sm bg-opacity-95
                        
                        /* Efek Hover: Putih Solid, Teks Hijau Gelap, Zoom */
                        hover:bg-white hover:text-[#147D4C] hover:border-[#147D4C]
                        hover:scale-[1.02] hover:shadow-lg hover:shadow-[#147D4C]/60
                        
                        /* Efek Active (Saat Diklik): Tertekan */
                        active:scale-95 active:bg-white active:text-[#147D4C]">
                            Lihat Detail
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ============= FOOTER ============= -->
    <footer id="kontak" class="relative bg-primary text-white">
        <div class="relative z-10 py-6 sm:py-8 md:py-10 lg:py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 md:gap-6 mb-4 sm:mb-6 fade-in-up">

                    <!-- Tentang -->
                    <div class="fade-in-left">
                        <h3
                            class="text-xl sm:text-2xl md:text-3xl font-black mb-3 sm:mb-4 flex items-center gap-2 sm:gap-3">
                            <div class="w-1.5 h-6 sm:h-8 bg-soft-green rounded-full"></div>
                            LSP STP Bogor
                        </h3>
                        <p class="text-gray-100 leading-relaxed text-xs sm:text-sm md:text-base font-light">
                            Lembaga Sertifikasi Profesi yang berkomitmen menghasilkan tenaga profesional berkompeten dan
                            diakui secara internasional.
                        </p>
                    </div>

                    <!-- Kontak -->
                    <div class="fade-in-up stagger-2">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 sm:mb-6">Hubungi Kami</h3>
                        <div class="space-y-2 sm:space-y-3 md:space-y-4 text-xs sm:text-sm md:text-base">
                            <a href="#" class="flex items-start gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <svg class="w-4 sm:w-5 h-4 sm:h-5 mt-0.5 flex-shrink-0 group-hover:scale-110 transition"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                </svg>
                                <span class="leading-relaxed">Jl. Padjajaran No. 12<br />Bogor, Jawa Barat 16143</span>
                            </a>
                            <a href="tel:+6251832416"
                                class="flex items-center gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <svg class="w-4 sm:w-5 h-4 sm:h-5 flex-shrink-0 group-hover:scale-110 transition"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                </svg>
                                <span>(0251) 8324163</span>
                            </a>
                            <a href="mailto:lsp@stpbogor.ac.id"
                                class="flex items-center gap-2 sm:gap-3 hover:text-soft-green transition group">
                                <svg class="w-4 sm:w-5 h-4 sm:h-5 flex-shrink-0 group-hover:scale-110 transition"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                </svg>
                                <span>lsp@stpbogor.ac.id</span>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="fade-in-right stagger-3">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-4 sm:mb-6">Navigasi Cepat</h3>
                        <ul class="space-y-1 sm:space-y-2 md:space-y-3 text-xs sm:text-sm md:text-base">
                            <li><a href="#beranda"
                                    class="flex items-center gap-2 hover:text-soft-green transition group">
                                    <span
                                        class="w-1.5 h-1.5 bg-soft-green rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                    Beranda
                                </a></li>
                            <li><a href="#tentang"
                                    class="flex items-center gap-2 hover:text-soft-green transition group">
                                    <span
                                        class="w-1.5 h-1.5 bg-soft-green rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                    Tentang
                                </a></li>
                            <li><a href="#sertifikat"
                                    class="flex items-center gap-2 hover:text-soft-green transition group">
                                    <span
                                        class="w-1.5 h-1.5 bg-soft-green rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                    Sertifikat
                                </a></li>
                            <li><a href="#skema" class="flex items-center gap-2 hover:text-soft-green transition group">
                                    <span
                                        class="w-1.5 h-1.5 bg-soft-green rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                    Skema
                                </a></li>
                            <li><a href="#kontak"
                                    class="flex items-center gap-2 hover:text-soft-green transition group">
                                    <span
                                        class="w-1.5 h-1.5 bg-soft-green rounded-full opacity-0 group-hover:opacity-100 transition"></span>
                                    Kontak
                                </a></li>
                        </ul>
                    </div>

                </div>

                <!-- Divider -->
                <div class="border-t border-white/20 pt-3 sm:pt-4 text-center fade-in-up stagger-4">
                    <p class="text-gray-200 text-xs sm:text-sm md:text-base font-light">&copy; 2025 LSP STP Bogor. Semua
                        Hak Dilindungi.</p>
                    <p class="text-gray-300 text-xs mt-1 sm:mt-2">Lembaga Sertifikasi Profesi | BNSP-LSP-2183-ID</p>
                </div>
            </div>
        </div>
    </footer>


    <script>
           // Add smooth scroll behavior
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 200);
            });
        });

        // Parallax effect on mouse move
        document.addEventListener('mousemove', (e) => {
            const shapes = document.querySelectorAll('.shape');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            shapes.forEach((shape, index) => {
                const moveX = x * (index + 1) * 20;
                const moveY = y * (index + 1) * 20;
                shape.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });
        });
        // Intersection Observer untuk Scroll Reveal
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.classList.add('show');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right').forEach(el => {
            observer.observe(el);
        });

        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        let countStarted = false;

        const startCounter = (counter) => {
            const target = parseInt(counter.dataset.target);
            const duration = 2500;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        };

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countStarted) {
                    countStarted = true;
                    counters.forEach(counter => startCounter(counter));
                }
            });
        }, { threshold: 0.5 });

        const counterSection = document.querySelector('.counter');
        if (counterSection) {
            counterObserver.observe(counterSection.closest('section'));
        }

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Stagger Animation Delay
        const staggerElements = document.querySelectorAll('[class*="stagger-"]');
        staggerElements.forEach((el) => {
            const staggerClass = el.className.match(/stagger-(\d+)/);
            if (staggerClass) {
                el.style.animationDelay = `${staggerClass[1] * 0.15}s`;
            }
        });

        // Add responsive observer
        const handleResize = () => {
            document.documentElement.style.fontSize = window.innerWidth < 640 ? '14px' : '16px';
        };

        window.addEventListener('resize', handleResize);
        handleResize();

        // Mobile touch optimization
        document.addEventListener('touchstart', function () {
            document.body.style.WebkitUserSelect = 'none';
            document.body.style.userSelect = 'none';
        }, false);

        document.addEventListener('touchend', function () {
            document.body.style.WebkitUserSelect = 'auto';
            document.body.style.use... (1 KB left)rSelect = 'auto';
        }, false);
    </script>
</body>

</html>