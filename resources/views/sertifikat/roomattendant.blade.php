<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profesi - Room Attendant LSP STP Bogor</title>

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

    <main class="content-section">
        <div class="main-wrapper">
            
            <section class="sidebar-section animate-in-left">
                <div class="image-frame">
                    <div class="image-content">
                        <img   src="{{ asset('image/stpimage3.jpg') }}" alt="Room Attendant Profesional">
                    </div>
                </div>

                <div class="sidebar-nav">
                    <p class="sidebar-nav-title">📚 Unit Kompetensi</p>
                    <a href="#pelayanan-tamu">Pembersihan & Persiapan Kamar</a>
                    <a href="#front-office">Operasional Housekeeping</a>
                    <a href="#finansial-admin">Administrasi Peralatan</a>
                    <a href="#industry-safety">Keselamatan & Prosedur Kerja</a>
                </div>

                <div class="elegant-card">
                    <h3>💼 Potensi Karir</h3>
                    <p style="color: #6B7280; font-size: 0.9rem; margin-bottom: 15px;">Profesi ini membuka peluang sebagai:</p>
                    <ul>
                        <li>Room Attendant</li>
                        <li>Housekeeping Staff</li>
                        <li>Linen & Laundry Staff</li>
                    </ul>
                </div>
            </section>

            <section class="content-wrapper animate-in-right">
                <div>
                    <h2 class="section-title" id="tentang-profesi">Peran Kunci Room Attendant</h2>
                    <p style="color: #374151; line-height: 1.8; font-size: 1.05rem;">
                        Room Attendant merupakan bagian vital dari departemen Housekeeping. Profesi ini bertanggung jawab untuk membersihkan, merapikan, dan menata kamar tamu sesuai standar hotel, termasuk memastikan kelengkapan amenities, kenyamanan tempat tidur, keamanan area kamar, serta memberikan pelayanan cepat dan ramah kepada tamu.
                    </p>
                </div>

                <div>
                    <h2 class="section-title mt-12" id="kompetensi">Unit Kompetensi Inti (SKKNI)</h2>
                    
                    <div class="competency-box">
                        <div class="competency-group-title" id="pelayanan-tamu">
                            🧽 Pembersihan & Persiapan Kamar
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🛏️</span>
                                <span class="competency-text">Membersihkan dan menata kamar tamu sesuai standar hotel</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🧴</span>
                                <span class="competency-text">Mengganti linen, handuk, dan amenities</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🧹</span>
                                <span class="competency-text">Membersihkan kamar mandi dan memastikan higienitas area</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🧼</span>
                                <span class="competency-text">Melakukan general cleaning pada furnitur & peralatan kamar</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="front-office">
                            🧺 Operasional Housekeeping
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">📦</span>
                                <span class="competency-text">Mengelola trolley house­keeping dan memastikan kelengkapan alat kerja</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🔧</span>
                                <span class="competency-text">Melaporkan kerusakan kamar kepada departemen terkait</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🔍</span>
                                <span class="competency-text">Melakukan room checking sebelum tamu check-in</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="finansial-admin">
                            📄 Administrasi Peralatan
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">📋</span>
                                <span class="competency-text">Mengisi logbook house­keeping dan laporan penggunaan linen</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">📦</span>
                                <span class="competency-text">Mengelola stok amenities dan bahan pembersih</span>
                            </div>
                        </div>

                        <div class="competency-group-title" id="industry-safety">
                            ⚠️ Keselamatan & Prosedur Kerja
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <span class="competency-icon">🔒</span>
                                <span class="competency-text">Menjaga keamanan barang tamu dan area kerja</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🔥</span>
                                <span class="competency-text">Menerapkan prosedur keselamatan kerja (K3)</span>
                            </div>
                            <div class="competency-item">
                                <span class="competency-icon">🧯</span>
                                <span class="competency-text">Menggunakan chemical dan peralatan dengan aman</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <p>ℹ️ Informasi Tambahan</p>
                    <p>
                        Sertifikasi <b>Room Attendant</b> sangat cocok bagi mahasiswa Perhotelan dan Pariwisata yang ingin memiliki pengakuan resmi kompetensi Housekeeping sesuai standar <b>BNSP</b>. Profesi ini merupakan salah satu posisi paling dibutuhkan di industri perhotelan.
                    </p>
                </div>
            </section>

        </div>
    </main>

</body>
</html>
