<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Asesor Kompetensi - LSP STP Bogor</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

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
                        'accent-blue': '#3B82F6',
                        'met': '#3B82F6',
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

 <link rel="stylesheet" href="{{ asset('css/asesor.css') }}">
       <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
</head>

<body class="bg-soft-gray text-gray-800 antialiased font-sans">
    @include('partials.navbar')
    <div class="min-h-screen">

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
        <div class="section-subtitle">Tenaga Profesional Penjamin Mutu</div>
        <h1 class="hero-title">Daftar Asesor Kompetensi</h1>
        <p class="hero-subtitle">Mengenal tim asesor berlisensi yang bertanggung jawab memastikan objektivitas dan validitas proses uji kompetensi di LSP STP Bogor.</p>
        <button class="badge-hero">Lihat Profil</button>
    </div>
</section>

        <section class="section-container">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                <div class="section-header">
                    <span class="section-badge">🔍 Registrasi BNSP</span>
                    <h3 class="section-title">Asesor Kompetensi Metodologi</h3>
                </div>

                <div class="asesor-grid">

                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img1.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Usman, A.Md.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001289.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img2.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Arion Praja Silalahi, S. Tr. Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001292.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img3.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Dhanik Puspita Sari, M.Pd., M.Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001296.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img4.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Tatik Sriwulandari, S.Tr.Par., M.M.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001293.2022</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img5.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Saleha, S.Pd., M.M. Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001297.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                           <div class="asesor-photo-area">
                            <img src="/build/assets/image/img6.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Samuel, SST.Par., MM.Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001287.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                      <div class="asesor-photo-area">
                            <img src="/build/assets/image/img7.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Muhammad Affan</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001288.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                        <div class="asesor-photo-area">
                            <img src="/build/assets/image/img8.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Raditya Bimantoro A.Md Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001291.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                      <div class="asesor-photo-area">
                            <img src="/build/assets/image/img10.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Wiwik Suprapto, S.Tr.Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001295.2022</p>
                            </div>
                        </div>
                    </div>

                    <div class="asesor-card">
                       <div class="asesor-photo-area">
                            <img src="/build/assets/image/img9.png" alt="Foto Asesor"
                                class="w-40 h-40 object-cover rounded-full border-4 border-white shadow-lg">
                        </div>
                        <div class="asesor-content">
                            <div class="asesor-info">
                                <h4 class="asesor-name">Mega Jayanti Sutisna, S.Tr.Par, M.Par.</h4>
                                <p class="asesor-title">Asesor Metodologi</p>
                            </div>
                            <div class="asesor-registration">
                                <span class="asesor-reg-label">No. Registrasi MET:</span>
                                <p class="asesor-reg-number">MET.000.001286.2022</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</body>

</html>