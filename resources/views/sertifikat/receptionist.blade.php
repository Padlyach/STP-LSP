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

         // hero section animation
        const heroSection = document.querySelector('.hero-section');
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;
        let isInHeroSection = false;

        // Track mouse movement
        document.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            
            // Check if mouse is in hero section
            isInHeroSection = e.clientY >= rect.top && e.clientY <= rect.bottom;
            
            if (isInHeroSection) {
                targetX = e.clientX - rect.left;
                targetY = e.clientY - rect.top;
            }
        });

        // Smooth animation loop
        function animateLight() {
            // Lerp (linear interpolation) for smooth following
            mouseX += (targetX - mouseX) * 0.08;
            mouseY += (targetY - mouseY) * 0.08;
            
            // Update CSS variables
            heroSection.style.setProperty('--mouse-x', mouseX + 'px');
            heroSection.style.setProperty('--mouse-y', mouseY + 'px');
            
            requestAnimationFrame(animateLight);
        }

        // Start animation loop
        animateLight();

        // Show/hide light effect based on hover
        heroSection.addEventListener('mouseenter', () => {
            heroSection.classList.add('mouse-active');
        });

        heroSection.addEventListener('mouseleave', () => {
            heroSection.classList.remove('mouse-active');
        });

        // Particle interaction with mouse
        const particles = document.querySelectorAll('.particle');
        document.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            
            if (isInHeroSection) {
                const angle = Math.atan2(
                    e.clientY - rect.top - rect.height / 2, 
                    e.clientX - rect.left - rect.width / 2
                );
                
                particles.forEach((particle, index) => {
                    const distance = (index + 1) * 3;
                    const moveX = Math.cos(angle) * distance;
                    const moveY = Math.sin(angle) * distance;
                    
                    particle.style.transform = `translate(${moveX}px, ${moveY}px)`;
                });
            }
        });

        // Reset particles on mouse leave
        heroSection.addEventListener('mouseleave', () => {
            particles.forEach(particle => {
                particle.style.transform = 'translate(0, 0)';
            });
        });
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styledetailsertifikat.css') }}">

   
</head>

<body>
     @include('partials.navbar')
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

    <!-- MAIN CONTENT -->
    <main class="content-section">
        <div class="main-wrapper">
            
            <!-- SIDEBAR - FIXED (KIRI) -->
            <section class="sidebar-section animate-in-left">
                <!-- Gambar -->
                <div class="image-frame">
                    <div class="image-content">
                        <img  src="{{ asset('image/stpimage1.jpg') }}" alt="Resepsionis Professional">
                    </div>
                </div>

                <!-- Navigasi Sidebar -->
                <div class="sidebar-nav">
                    <p class="sidebar-nav-title">📚 Unit Kompetensi</p>
                    <a href="#pelayanan-tamu">Pelayanan Tamu & Komunikasi</a>
                    <a href="#front-office">Operasional Front Office</a>
                    <a href="#finansial-admin">Proses Finansial & Administrasi</a>
                    <a href="#industry-safety">Pengetahuan Industri & Keselamatan</a>
                </div>

                <!-- Career Card -->
                <div class="elegant-card">
                    <h3>💼 Potensi Karir</h3>
                    <p style="color: #6B7280; font-size: 0.9rem; margin-bottom: 15px;">Sertifikasi ini membuka peluang sebagai:</p>
                    <ul>
                        <li>Front Desk Agent (Hotel)</li>
                        <li>Customer Service Officer (Pariwisata)</li>
                        <li>Travel Consultant</li>
                    </ul>
                </div>
            </section>

            <!-- MAIN CONTENT (KANAN) - SCROLLABLE -->
            <section class="content-wrapper animate-in-right">
                <!-- Tentang Profesi -->
                <div>
                    <h2 class="section-title" id="tentang-profesi">Peran Kunci Resepsionis</h2>
                    <p style="color: #374151; line-height: 1.8; font-size: 1.05rem;">
                        Resepsionis adalah wajah dari sebuah institusi, bertanggung jawab untuk menyambut tamu, mengelola reservasi, menangani transaksi, dan memastikan semua kebutuhan tamu terpenuhi dengan efisien dan profesional.
                    </p>
                </div>

                <!-- Unit Kompetensi Inti -->
                <div>
                    <h2 class="section-title mt-12" id="kompetensi">Unit Kompetensi Inti (SKKNI)</h2>
                    
                    <div class="competency-box">
                        <!-- Kompetensi 1 -->
                        <div class="competency-group-title" id="pelayanan-tamu">
                            🗣️ Pelayanan Tamu & Komunikasi
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">👥</span>
                                <span class="competency-text">Work effectively with customers and colleagues (Bekerja efektif dengan pelanggan dan rekan kerja)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">☎️</span>
                                <span class="competency-text">Communicate effectively on the telephone (Berkomunikasi efektif melalui telepon)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🌐</span>
                                <span class="competency-text">Work in a socially diverse environment (Bekerja di lingkungan yang beragam secara sosial)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📢</span>
                                <span class="competency-text">Promote products and services to customer (Mempromosikan produk dan layanan kepada pelanggan)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">💻</span>
                                <span class="competency-text">Use common business tools and technology (Menggunakan peralatan dan teknologi bisnis umum)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">⚡</span>
                                <span class="competency-text">Manage and resolve a conflict situation (Mengelola dan menyelesaikan situasi konflik)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🇬🇧</span>
                                <span class="competency-text">Speak English at a basic operational level (Berbicara Bahasa Inggris di tingkat operasional dasar)</span>
                            </div>
                        </div>

                        <!-- Kompetensi 2 -->
                        <div class="competency-group-title" id="front-office">
                            🏢 Operasional Front Office
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🔐</span>
                                <span class="competency-text">Provide accommodation services (Menyediakan layanan akomodasi)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📅</span>
                                <span class="competency-text">Receive and process reservations (Menerima dan memproses reservasi)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📋</span>
                                <span class="competency-text">Perform clerical procedures (Melakukan prosedur klerikal)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🖥️</span>
                                <span class="competency-text">Access and retrieve computer-based data (Mengakses dan mengambil data berbasis komputer)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📁</span>
                                <span class="competency-text">Maintain a paper-based filing and retrieval system (Memelihara sistem pengarsipan dan pengambilan berbasis kertas)</span>
                            </div>
                        </div>

                        <!-- Kompetensi 3 -->
                        <div class="competency-group-title" id="finansial-admin">
                            💰 Proses Finansial & Administrasi
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">💳</span>
                                <span class="competency-text">Process a financial transaction for services rendered (Memproses transaksi keuangan untuk layanan yang diberikan)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">💵</span>
                                <span class="competency-text">Process transactions for purchase of goods or services (Memproses transaksi untuk pembelian barang atau jasa)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📊</span>
                                <span class="competency-text">Maintain guests' financial records (Memelihara catatan keuangan tamu)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📈</span>
                                <span class="competency-text">Prepare routine financial statements (Menyiapkan laporan keuangan rutin)</span>
                            </div>
                        </div>

                        <!-- Kompetensi 4 -->
                        <div class="competency-group-title" id="industry-safety">
                            🏨 Pengetahuan Industri & Keselamatan
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🏩</span>
                                <span class="competency-text">Maintain hospitality industry knowledge (Memelihara pengetahuan industri perhotelan)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">✈️</span>
                                <span class="competency-text">Develop and update tourism industry knowledge (Mengembangkan dan memperbarui pengetahuan industri pariwisata)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🗺️</span>
                                <span class="competency-text">Develop and update local knowledge (Mengembangkan dan memperbarui pengetahuan lokal)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">⚠️</span>
                                <span class="competency-text">Implement occupational health and safety procedures (Menerapkan prosedur kesehatan dan keselamatan kerja)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🔒</span>
                                <span class="competency-text">Establish and maintain a safe and secure workplace (Membangun dan memelihara tempat kerja yang aman dan terjamin)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🩹</span>
                                <span class="competency-text">Perform basic First Aid procedures (Melakukan prosedur Pertolongan Pertama dasar)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">👶</span>
                                <span class="competency-text">Perform child protection duties relevant to the tourism industry (Melakukan tugas perlindungan anak yang relevan dengan industri pariwisata)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Box -->
                <div class="info-box">
                    <p>ℹ️ Informasi Tambahan</p>
                    <p>
                        Sertifikasi Resepsionis ini sangat cocok bagi mahasiswa <strong>D3/D4 Perhotelan</strong> dan <strong>S1 Pariwisata</strong> LSP STP Bogor yang ingin diakui secara resmi kompetensinya sesuai dengan standar <strong>BNSP</strong> (Badan Nasional Sertifikasi Profesi).
                    </p>
                </div>
            </section>

        </div>
    </main>

</body>
</html>