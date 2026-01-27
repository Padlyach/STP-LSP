<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profesi - Resepsionis LSP STP Bogor</title>

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
                        'accent': '#34D399',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
</head>

<body class="bg-soft-gray">
    @include('partials.navbar')
    
    <!-- Hero Section (Tidak Diubah) -->
    <section class="hero-section">
        <div class="hero-orb-1"></div>
        <div class="hero-orb-2"></div>
        <div class="hero-orb-3"></div>
        <div class="hero-grid"></div>
        <div class="hero-particles">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        
        <div class="hero-content">
            <div class="section-subtitle">Skema Sertifikasi Profesi Front Office</div>
            <h1 class="hero-title">Receptionist (Penerima Tamu)</h1>
            <p class="hero-subtitle">Dapatkan pengakuan resmi atas kompetensi Anda dalam pelayanan tamu, penanganan reservasi, dan komunikasi efektif sebagai seorang Receptionist profesional.</p>
            <button class="badge-hero">Detail Skema</button>
        </div>
    </section>

    <!-- Main Content - UPDATED -->
    <main class="py-12 sm:py-16 lg:py-20 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-primary-light opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-5 rounded-full blur-3xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <!-- SIDEBAR (KIRI) - STAY -->
                <aside class="lg:col-span-4 space-y-6">
                    
                    <!-- Image Card -->
                    <div class="glass-card overflow-hidden group" data-aos="fade-right">
                        <div class="image-wrapper">
                            <img src="{{ asset('image/stpimage1.jpg') }}" alt="Resepsionis Professional" class="image-display">
                            <div class="image-overlay"></div>
                        </div>
                    </div>

                    <!-- Navigation Menu -->
                    <div class="glass-card" data-aos="fade-right" data-aos-delay="100">
                        <div class="nav-header">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            <h3 class="nav-title">Unit Kompetensi</h3>
                        </div>
                        <div class="nav-links">
                            <a href="#pelayanan-tamu" class="nav-link-item">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Pelayanan Tamu & Komunikasi</span>
                            </a>
                            <a href="#front-office" class="nav-link-item">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Operasional Front Office</span>
                            </a>
                            <a href="#finansial-admin" class="nav-link-item">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Proses Finansial & Administrasi</span>
                            </a>
                            <a href="#industry-safety" class="nav-link-item">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                                <span>Pengetahuan Industri & Keselamatan</span>
                            </a>
                        </div>
                    </div>

                    <!-- Career Card -->
                    <div class="glass-card career-card" data-aos="fade-right" data-aos-delay="200">
                        <div class="career-header">
                            <div class="career-icon-wrapper">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="career-title">Potensi Karir</h3>
                        </div>
                        <p class="career-description">Sertifikasi ini membuka peluang sebagai:</p>
                        <ul class="career-list">
                            <li class="career-item">
                                <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Front Desk Agent (Hotel)</span>
                            </li>
                            <li class="career-item">
                                <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Customer Service Officer (Pariwisata)</span>
                            </li>
                            <li class="career-item">
                                <svg class="w-5 h-5 text-primary flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Travel Consultant</span>
                            </li>
                        </ul>
                    </div>

                </aside>

                <!-- MAIN CONTENT (KANAN) - SCROLLABLE -->
                <section class="lg:col-span-8 space-y-8 lg:sticky lg:top-24 lg:self-start lg:max-h-[calc(100vh-6rem)] lg:overflow-y-auto lg:pr-2">
                    
                    <!-- About Section -->
                    <div class="glass-card" data-aos="fade-left">
                        <div class="content-header">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h2 class="content-title">Peran Kunci Resepsionis</h2>
                        </div>
                        <p class="content-text">
                            Resepsionis adalah wajah dari sebuah institusi, bertanggung jawab untuk menyambut tamu, mengelola reservasi, menangani transaksi, dan memastikan semua kebutuhan tamu terpenuhi dengan efisien dan profesional.
                        </p>
                    </div>

                    <!-- Competency Section -->
                    <div class="glass-card" data-aos="fade-left" data-aos-delay="100">
                        <div class="content-header">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                            <h2 class="content-title">Unit Kompetensi Inti (SKKNI)</h2>
                        </div>

                        <!-- Competency Groups -->
                        <div class="space-y-6">
                            
                            <!-- Group 1 -->
                            <div class="competency-section" id="pelayanan-tamu">
                                <div class="competency-header">
                                    <div class="competency-icon-circle green-gradient">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                                        </svg>
                                    </div>
                                    <h3 class="competency-title">Pelayanan Tamu & Komunikasi</h3>
                                </div>
                                <div class="competency-items">
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Work effectively with customers and colleagues (Bekerja efektif dengan pelanggan dan rekan kerja)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Communicate effectively on the telephone (Berkomunikasi efektif melalui telepon)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Work in a socially diverse environment (Bekerja di lingkungan yang beragam secara sosial)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Promote products and services to customer (Mempromosikan produk dan layanan kepada pelanggan)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Use common business tools and technology (Menggunakan peralatan dan teknologi bisnis umum)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Manage and resolve a conflict situation (Mengelola dan menyelesaikan situasi konflik)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Speak English at a basic operational level (Berbicara Bahasa Inggris di tingkat operasional dasar)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Group 2 -->
                            <div class="competency-section" id="front-office">
                                <div class="competency-header">
                                    <div class="competency-icon-circle green-gradient">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <h3 class="competency-title">Operasional Front Office</h3>
                                </div>
                                <div class="competency-items">
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Provide accommodation services (Menyediakan layanan akomodasi)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Receive and process reservations (Menerima dan memproses reservasi)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Perform clerical procedures (Melakukan prosedur klerikal)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Access and retrieve computer-based data (Mengakses dan mengambil data berbasis komputer)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Maintain a paper-based filing and retrieval system (Memelihara sistem pengarsipan dan pengambilan berbasis kertas)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Group 3 -->
                            <div class="competency-section" id="finansial-admin">
                                <div class="competency-header">
                                    <div class="competency-icon-circle gray-gradient">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="competency-title">Proses Finansial & Administrasi</h3>
                                </div>
                                <div class="competency-items">
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Process a financial transaction for services rendered (Memproses transaksi keuangan untuk layanan yang diberikan)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Process transactions for purchase of goods or services (Memproses transaksi untuk pembelian barang atau jasa)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Maintain guests' financial records (Memelihara catatan keuangan tamu)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Prepare routine financial statements (Menyiapkan laporan keuangan rutin)</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Group 4 -->
                            <div class="competency-section" id="industry-safety">
                                <div class="competency-header">
                                    <div class="competency-icon-circle dark-gradient">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <h3 class="competency-title">Pengetahuan Industri & Keselamatan</h3>
                                </div>
                                <div class="competency-items">
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Maintain hospitality industry knowledge (Memelihara pengetahuan industri perhotelan)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Develop and update tourism industry knowledge (Mengembangkan dan memperbarui pengetahuan industri pariwisata)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Develop and update local knowledge (Mengembangkan dan memperbarui pengetahuan lokal)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Implement occupational health and safety procedures (Menerapkan prosedur kesehatan dan keselamatan kerja)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Establish and maintain a safe and secure workplace (Membangun dan memelihara tempat kerja yang aman dan terjamin)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Perform basic First Aid procedures (Melakukan prosedur Pertolongan Pertama dasar)</span>
                                    </div>
                                    <div class="competency-item-card">
                                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                        <span>Perform child protection duties relevant to the tourism industry (Melakukan tugas perlindungan anak yang relevan dengan industri pariwisata)</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Info Alert -->
                    <div class="info-alert" data-aos="fade-left" data-aos-delay="200">
                        <div class="info-icon-wrapper">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4 class="info-title">Informasi Tambahan</h4>
                            <p class="info-text">
                                Sertifikasi Resepsionis ini sangat cocok bagi mahasiswa <strong>D3/D4 Perhotelan</strong> dan <strong>S1 Pariwisata</strong> LSP STP Bogor yang ingin diakui secara resmi kompetensinya sesuai dengan standar <strong>BNSP</strong> (Badan Nasional Sertifikasi Profesi).
                            </p>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </main>

    <style>
        * {
            scroll-behavior: smooth;
        }

        /* Glass Card Base */
        .glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08),
                        0 0 1px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover {
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.12),
                        0 0 1px rgba(0, 0, 0, 0.1);
            border-color: rgba(16, 185, 129, 0.3);
            transform: translateY(-4px);
        }

        /* Image Card */
        .image-wrapper {
            position: relative;
            width: 100%;
            height: 320px;
            border-radius: 20px;
            overflow: hidden;
        }

        .image-display {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-card:hover .image-display {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(14, 122, 79, 0.3) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .glass-card:hover .image-overlay {
            opacity: 1;
        }

        /* Navigation */
        .nav-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(16, 185, 129, 0.2);
        }

        .nav-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1F2937;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .nav-link-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.875rem 1rem;
            border-radius: 12px;
            color: #4B5563;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            border: 1px solid transparent;
        }

        .nav-link-item:hover {
            background: rgba(16, 185, 129, 0.1);
            color: #0E7A4F;
            border-color: rgba(16, 185, 129, 0.3);
            transform: translateX(8px);
        }

        .nav-link-item.active {
            background: rgba(16, 185, 129, 0.15);
            color: #0E7A4F;
            border-color: rgba(16, 185, 129, 0.4);
            font-weight: 600;
        }

        .nav-link-item.active svg {
            color: #0E7A4F;
        }

        .nav-link-item svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .nav-link-item:hover svg {
            transform: translateX(4px);
        }

        /* Career Card */
        .career-card {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.05) 0%, rgba(14, 122, 79, 0.05) 100%);
        }

        .career-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .career-icon-wrapper {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            background: linear-gradient(135deg, #10B981, #0E7A4F);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(14, 122, 79, 0.3);
        }

        .career-title {
            font-size: 1.375rem;
            font-weight: 700;
            color: #1F2937;
        }

        .career-description {
            color: #6B7280;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        .career-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .career-item {
            display: flex;
            align-items: start;
            gap: 0.75rem;
            padding: 0.75rem;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 12px;
            font-size: 0.95rem;
            color: #374151;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .career-item:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(4px);
        }

        /* Content Header */
        .content-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 3px solid rgba(16, 185, 129, 0.2);
        }

        .content-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1F2937;
        }

        .content-text {
            color: #374151;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Competency Section */
        .competency-section {
            margin-bottom: 2rem;
        }

        .competency-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.25rem;
        }

        .competency-icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            flex-shrink: 0;
        }

        .green-gradient {
            background: linear-gradient(135deg, #10B981, #0E7A4F);
        }

        .gray-gradient {
            background: linear-gradient(135deg, #6B7280, #4B5563);
        }

        .dark-gradient {
            background: linear-gradient(135deg, #374151, #1F2937);
        }

        .competency-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1F2937;
        }

        .competency-items {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .competency-item-card {
            display: flex;
            align-items: start;
            gap: 0.875rem;
            padding: 1rem 1.25rem;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(229, 231, 235, 0.8);
            border-radius: 14px;
            font-size: 0.975rem;
            color: #374151;
            font-weight: 500;
            line-height: 1.6;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .competency-item-card:hover {
            background: rgba(16, 185, 129, 0.08);
            border-color: rgba(16, 185, 129, 0.3);
            transform: translateX(8px);
            box-shadow: 0 4px 16px rgba(14, 122, 79, 0.08);
        }

        .competency-item-card svg {
            flex-shrink: 0;
            margin-top: 2px;
        }

        /* Info Alert */
        .info-alert {
            display: flex;
            gap: 1.25rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.08) 0%, rgba(14, 122, 79, 0.08) 100%);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(16, 185, 129, 0.3);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.12);
        }

        .info-icon-wrapper {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(16, 185, 129, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-content {
            flex: 1;
        }

        .info-title {
            font-size: 1.125rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.5rem;
        }

        .info-text {
            color: #374151;
            font-size: 0.975rem;
            line-height: 1.7;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar for Sidebar */
        aside::-webkit-scrollbar {
            width: 6px;
        }

        aside::-webkit-scrollbar-track {
            background: rgba(229, 231, 235, 0.3);
            border-radius: 10px;
        }

        aside::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #10B981, #0E7A4F);
            border-radius: 10px;
        }

        aside::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #0E7A4F, #065F46);
        }

        /* Custom Scrollbar for Main Content */
        section::-webkit-scrollbar {
            width: 8px;
        }

        section::-webkit-scrollbar-track {
            background: rgba(229, 231, 235, 0.3);
            border-radius: 10px;
        }

        section::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #10B981, #0E7A4F);
            border-radius: 10px;
        }

        section::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #0E7A4F, #065F46);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .glass-card {
                padding: 1.5rem;
            }

            .content-title {
                font-size: 1.5rem;
            }

            .image-wrapper {
                height: 280px;
            }
        }

        @media (max-width: 768px) {
            .glass-card {
                padding: 1.25rem;
                border-radius: 20px;
            }

            .content-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .content-title {
                font-size: 1.375rem;
            }

            .competency-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .competency-title {
                font-size: 1.125rem;
            }

            .image-wrapper {
                height: 240px;
            }

            .info-alert {
                flex-direction: column;
                gap: 1rem;
            }
        }

        @media (max-width: 640px) {
            .glass-card {
                padding: 1rem;
                border-radius: 16px;
            }

            .nav-link-item {
                font-size: 0.9rem;
                padding: 0.75rem 0.875rem;
            }

            .competency-item-card {
                padding: 0.875rem 1rem;
                font-size: 0.925rem;
            }

            .career-item {
                font-size: 0.9rem;
                padding: 0.625rem;
            }

            .content-text {
                font-size: 1rem;
            }
        }

        /* Animation on Scroll */
        @media (prefers-reduced-motion: no-preference) {
            .glass-card {
                animation: fadeInUp 0.6s ease-out;
            }
        }

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
    </style>

    <script>
        // Get the main content section container
        const mainContentSection = document.querySelector('section.lg\\:col-span-8');
        const navLinks = document.querySelectorAll('.nav-link-item');
        const sections = document.querySelectorAll('.competency-section');

        // Smooth scroll for navigation links
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement && mainContentSection) {
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Calculate position relative to scrollable container
                    const containerRect = mainContentSection.getBoundingClientRect();
                    const targetRect = targetElement.getBoundingClientRect();
                    const offset = 20; // Small offset for better visibility
                    
                    // Scroll the container, not the window
                    const scrollPosition = mainContentSection.scrollTop + (targetRect.top - containerRect.top) - offset;
                    
                    mainContentSection.scrollTo({
                        top: scrollPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active navigation highlight on scroll within container
        function updateActiveLink() {
            if (!mainContentSection) return;
            
            let current = '';
            const containerRect = mainContentSection.getBoundingClientRect();
            const scrollTop = mainContentSection.scrollTop;
            
            sections.forEach(section => {
                const sectionRect = section.getBoundingClientRect();
                const sectionTop = scrollTop + (sectionRect.top - containerRect.top);
                const sectionHeight = section.clientHeight;
                
                if (scrollTop >= sectionTop - 100 && scrollTop < sectionTop + sectionHeight - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href && href.substring(1) === current) {
                    link.classList.add('active');
                }
            });
        }

        // Set first link as active on load
        window.addEventListener('load', () => {
            if (navLinks.length > 0) {
                navLinks[0].classList.add('active');
            }
        });

        // Update active link on scroll within the container
        if (mainContentSection) {
            let scrollTimeout;
            mainContentSection.addEventListener('scroll', () => {
                if (scrollTimeout) {
                    window.cancelAnimationFrame(scrollTimeout);
                }
                scrollTimeout = window.requestAnimationFrame(() => {
                    updateActiveLink();
                });
            });
        }
    </script>

</body>
</html>