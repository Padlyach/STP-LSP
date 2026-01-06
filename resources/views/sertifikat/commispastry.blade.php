<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Profesi - Commis Pastry LSP STP Bogor</title>

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
        <div class="section-subtitle">Skema Sertifikasi Profesi Kuliner</div>
        <h1 class="hero-title">Commis Pastry (Juru Kue Muda)</h1>
        <p class="hero-subtitle">Tingkatkan karir Anda dengan sertifikasi Commis Pastry. Uji kompetensi keahlian Anda dalam pembuatan roti, kue, dan hidangan penutup standar industri.</p>
        <button class="badge-hero">Detail Skema</button>
    </div>
</section>

    <main class="content-section">
        <div class="main-wrapper">
            
            <!-- SIDEBAR -->
            <section class="sidebar-section animate-in-left">
                <div class="image-frame">
                    <div class="image-content">
                        <img  src="{{ asset('image/stpimage4.jpg') }}" alt="Commis Pastry">
                    </div>
                </div>

                <div class="sidebar-nav">
                    <p class="sidebar-nav-title">📚 Unit Kompetensi</p>
                    <a href="#pelayanan-tamu">Persiapan Bahan & Dasar Pastry</a>
                    <a href="#front-office">Pengolahan & Teknik Pastry</a>
                    <a href="#finansial-admin">Produksi & Administrasi Dapur</a>
                    <a href="#industry-safety">Keamanan Pangan & Kebersihan</a>
                </div>

                <div class="elegant-card">
                    <h3>💼 Potensi Karir</h3>
                    <p style="color:#6B7280;font-size:.9rem;margin-bottom:15px;">Sertifikasi ini membuka peluang sebagai:</p>
                    <ul>
                        <li>Commis Pastry</li>
                        <li>Pastry Helper di Bakery/Patisserie</li>
                        <li>Dessert Assistant di Hotel/Restaurant</li>
                    </ul>
                </div>
            </section>

            <!-- CONTENT AREA -->
            <section class="content-wrapper animate-in-right">
                <div>
                    <h2 class="section-title" id="tentang-profesi">Peran Kunci Commis Pastry</h2>

                    <p style="color:#374151;line-height:1.8;font-size:1.05rem;">
                        Commis Pastry berperan penting dalam dapur pastry dengan membantu proses persiapan bahan, pembuatan adonan, pengolahan kue dan pastry, hingga dekorasi dan penyajian dessert. Profesi ini membutuhkan ketelitian, kreativitas, dan konsistensi tinggi.
                    </p>
                </div>

                <!-- KOMPETENSI -->
                <div>
                    <h2 class="section-title mt-12" id="kompetensi">Unit Kompetensi Inti (SKKNI)</h2>

                    <div class="competency-box">

                        <!-- GROUP 1 -->
                        <div class="competency-group-title" id="pelayanan-tamu">
                            🧁 Persiapan Bahan & Dasar Pastry
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <div class="competency-icon">🥣</div>
                                <div class="competency-text">Menyiapkan bahan dasar pastry sesuai standar (tepung, gula, butter, cream)</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🍫</div>
                                <div class="competency-text">Mengukur dan menakar bahan dengan akurat</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🧈</div>
                                <div class="competency-text">Mengenal jenis-jenis bahan pastry dan fungsinya</div>
                            </div>
                        </div>

                        <!-- GROUP 2 -->
                        <div class="competency-group-title" id="front-office">
                            🍰 Pengolahan & Teknik Pastry
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <div class="competency-icon">🌀</div>
                                <div class="competency-text">Membuat adonan pastry: mixing, folding, proofing</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🔥</div>
                                <div class="competency-text">Mengoperasikan oven dan peralatan pastry</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🍮</div>
                                <div class="competency-text">Membuat produk pastry seperti tart, cake, puff pastry, dan dessert</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🎨</div>
                                <div class="competency-text">Melakukan dekorasi dasar pastry dan dessert plating</div>
                            </div>
                        </div>

                        <!-- GROUP 3 -->
                        <div class="competency-group-title" id="finansial-admin">
                            📦 Produksi & Administrasi Dapur
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <div class="competency-icon">📊</div>
                                <div class="competency-text">Melakukan pencatatan dan kontrol stok bahan pastry</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">📝</div>
                                <div class="competency-text">Mengikuti SOP produksi pastry</div>
                            </div>
                        </div>

                        <!-- GROUP 4 -->
                        <div class="competency-group-title" id="industry-safety">
                            ⚠️ Keamanan Pangan & Kebersihan
                        </div>
                        <div class="space-y-1">
                            <div class="competency-item">
                                <div class="competency-icon">🧼</div>
                                <div class="competency-text">Menjaga kebersihan area pastry sesuai standar higienitas</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🔒</div>
                                <div class="competency-text">Menerapkan food safety & sanitation (HACCP dasar)</div>
                            </div>
                            <div class="competency-item">
                                <div class="competency-icon">🩹</div>
                                <div class="competency-text">Melaksanakan prosedur keselamatan kerja dasar</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INFO BOX -->
                <div class="info-box">
                    <p>ℹ️ Informasi Tambahan</p>
                    <p>
                        Sertifikasi **Commis Pastry** ini sangat sesuai untuk mahasiswa **D3/D4 Tata Boga**, **Perhotelan**, dan peserta LSP STP Bogor yang ingin mendapatkan pengakuan resmi kompetensi di bidang pastry sesuai standar **BNSP**.
                    </p>
                </div>
            </section>

        </div>
    </main>

</body>
</html>
