<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profesi - Waiter (Pramusaji) LSP STP Bogor</title>

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
        <div class="section-subtitle">Skema Sertifikasi Layanan Makanan & Minuman</div>
        <h1 class="hero-title">Waiter (Pelayan Restoran)</h1>
        <p class="hero-subtitle">Tunjukkan kompetensi Anda dalam menyajikan hidangan, melayani kebutuhan tamu, dan mengoperasikan layanan F&B sesuai prosedur standar internasional.</p>
        <button class="badge-hero">Detail Skema</button>
    </div>
</section>

    <main class="content-section">
        <div class="main-wrapper">
            
            <section class="sidebar-section animate-in-left">
                <div class="image-frame">
                    <div class="image-content">
                        <img src="/build/assets/image/stpimage2.jpg" alt="Waiter Profesional">
                    </div>
                </div>

                <div class="sidebar-nav">
                    <p class="sidebar-nav-title">📚 Unit Kompetensi</p>
                    <a href="#pelayanan-tamu">Persiapan & Pelayanan Dasar</a>
                    <a href="#front-office">Operasi Layanan Makanan</a>
                    <a href="#finansial-admin">Administrasi & Transaksi</a>
                    <a href="#industry-safety">Pengetahuan Industri & Keselamatan</a>
                </div>

                <div class="elegant-card">
                    <h3>💼 Potensi Karir</h3>
                    <p style="color: #6B7280; font-size: 0.9rem; margin-bottom: 15px;">Sertifikasi ini membuka peluang sebagai:</p>
                    <ul>
                        <li>Waiter/Waitress Restoran</li>
                        <li>Bartender/Bar Attendant</li>
                        <li>Banquet Server</li>
                    </ul>
                </div>
            </section>

            <section class="content-wrapper animate-in-right">
                <div>
                    <h2 class="section-title" id="tentang-profesi">Peran Kunci Waiter (Pramusaji)</h2>
                    <p style="color: #374151; line-height: 1.8; font-size: 1.05rem;">
                        Waiter atau Pramusaji adalah pilar utama dalam layanan F&B (Food & Beverage), bertanggung jawab mulai dari mempersiapkan area pelayanan, mengambil pesanan, menyajikan hidangan dengan tepat, hingga menangani transaksi dan memastikan kepuasan tamu.
                    </p>
                </div>

                <div>
                    <h2 class="section-title mt-12" id="kompetensi">Unit Kompetensi Inti (SKKNI)</h2>
                    
                    <div class="competency-box">
                        <div class="competency-group-title" id="pelayanan-tamu">
                            🔪 Persiapan & Pelayanan Dasar
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🧼</span>
                                <span class="competency-text">Clean and tidy bar areas (Membersihkan dan merapikan area bar)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🧺</span>
                                <span class="competency-text">Clean and tidy food service areas (Membersihkan dan merapikan area layanan makanan)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🍹</span>
                                <span class="competency-text">Provide basic advice on food and beverage (Memberikan saran dasar tentang makanan dan minuman)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">💬</span>
                                <span class="competency-text">Work effectively with customers and colleagues (Bekerja efektif dengan pelanggan dan rekan kerja)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🌐</span>
                                <span class="competency-text">Work in a socially diverse environment (Bekerja di lingkungan yang beragam secara sosial)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🇬🇧</span>
                                <span class="competency-text">Speak English at a basic operational level (Berbicara Bahasa Inggris di tingkat operasional dasar)</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="front-office">
                            🍽️ Operasi Layanan Makanan
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">📋</span>
                                <span class="competency-text">Receive and store kitchen supplies (Menerima dan menyimpan persediaan dapur)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">✍️</span>
                                <span class="competency-text">Take food and beverage orders (Mengambil pesanan makanan dan minuman)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🛎️</span>
                                <span class="competency-text">Provide table service (Menyediakan layanan meja)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">☕</span>
                                <span class="competency-text">Provide silver service (Menyediakan layanan perak/fine dining)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🥂</span>
                                <span class="competency-text">Prepare and serve non-alcoholic beverages (Menyiapkan dan menyajikan minuman non-alkohol)</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="finansial-admin">
                            💳 Administrasi & Transaksi
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">💻</span>
                                <span class="competency-text">Use common business tools and technology (Menggunakan peralatan dan teknologi bisnis umum)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">💵</span>
                                <span class="competency-text">Process a financial transaction for services rendered (Memproses transaksi keuangan untuk layanan yang diberikan)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📢</span>
                                <span class="competency-text">Promote products and services to customer (Mempromosikan produk dan layanan kepada pelanggan)</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="industry-safety">
                            ⚠️ Pengetahuan Industri & Keselamatan
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🔥</span>
                                <span class="competency-text">Monitor work operations (Memantau operasional kerja)</span>
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
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <p>ℹ️ Informasi Tambahan</p>
                    <p>
                        Sertifikasi **Waiter (Pramusaji)** ini sangat cocok bagi mahasiswa **D3/D4 Perhotelan** dan **S1 Pariwisata** LSP STP Bogor yang ingin diakui secara resmi kompetensinya sesuai dengan standar **BNSP** (Badan Nasional Sertifikasi Profesi) di bidang layanan F&B.
                    </p>
                </div>
            </section>

        </div>
    </main>

</body>
</html>