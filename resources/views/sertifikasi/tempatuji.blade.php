<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempat Uji Kompetensi - LSP STP Bogor</title>

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

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tempatuji.css') }}">

</head>
<body class="bg-soft-gray text-gray-800 antialiased font-sans">
    @include('partials.navbar')
    <div class="min-h-screen">
        
        <!-- HERO SECTION -->
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
        <div class="section-subtitle">Lokasi Resmi Pelaksanaan Asesmen</div>
        <h1 class="hero-title">Tempat Uji Kompetensi (TUK)</h1>
        <p class="hero-subtitle">Informasi lengkap mengenai fasilitas dan lokasi TUK (Tempat Uji Kompetensi) yang telah terverifikasi dan memenuhi standar BNSP untuk asesmen.</p>
        <button class="badge-hero">Lihat Lokasi</button>
    </div>
</section>

        <!-- GALLERY SECTION -->
        <section class="gallery-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="gallery-header">
                    <h2>Galeri Fasilitas Uji</h2>
                    <p>Lihatlah beberapa gambaran fasilitas modern yang kami sediakan untuk mendukung uji kompetensi Anda</p>
                </div>

                <div class="gallery-grid">
                    
                    <!-- CARD 1 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stpdapur.jpg') }}" alt="Dapur Uji Kompetensi Commis Pastry">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Dapur Uji - Commis Pastry</h4>
                            <p class="card-description">Dapur modern dilengkapi dengan peralatan profesional dan standar internasional untuk praktik dan uji kompetensi bidang pastry.</p>
                            <div class="card-badge">
                                <span>🎓</span> Skema Pastry
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stprecepsionist.jpg') }}" alt="Lokasi Uji Kompetensi Receptionist">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Simulasi Front Office</h4>
                            <p class="card-description">Area resepsionis yang disimulasikan dengan standar hotel profesional untuk praktik pelayanan tamu dan customer service.</p>
                            <div class="card-badge">
                                <span>👔</span> Skema Receptionist
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stpkamar.jpg') }}" alt="Lokasi Uji Kompetensi Room Attendant">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Kamar Hotel - Room Service</h4>
                            <p class="card-description">Unit kamar hotel yang fully equipped untuk praktik tata graha, house keeping, dan layanan kamar berstandar internasional.</p>
                            <div class="card-badge">
                                <span>🛏️</span> Skema Room Attendant
                            </div>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stpresto.jpg') }}" alt="Lokasi Uji Kompetensi Waiter">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Restoran Pelatihan</h4>
                            <p class="card-description">Area restoran lengkap dengan meja, kursi, dan peralatan food & beverage untuk praktik pelayanan makanan dan minuman profesional.</p>
                            <div class="card-badge">
                                <span>🍽️</span> Skema Waiter
                            </div>
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stpruangbrefing.jpg') }}" alt="Lokasi Uji Kompetensi Ruang Briefing">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Ruang Briefing Asesor</h4>
                            <p class="card-description">Ruangan nyaman dan kondusif dilengkapi dengan fasilitas lengkap untuk briefing, evaluasi, dan diskusi bersama para asesor profesional.</p>
                            <div class="card-badge">
                                <span>📋</span> Ruang Asesor
                            </div>
                        </div>
                    </div>

                    <!-- CARD 6 -->
                    <div class="gallery-card">
                        <div class="image-placeholder">
                            <img src="{{ asset('image/stpruangtunggu.jpg') }}" alt="Lokasi Uji Kompetensi Area Tunggu">
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Area Tunggu Peserta Uji</h4>
                            <p class="card-description">Area yang nyaman, tenang, dan penuh dengan fasilitas modern untuk menunggu giliran uji dengan santai dan fokus.</p>
                            <div class="card-badge">
                                <span>☕</span> Area Istirahat
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</body>
</html>