<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar Hukum - LSP STP Bogor</title>

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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        * {
            scroll-behavior: smooth;
        }

        :root {
            --color-primary: #0E7A4F;
            --color-primary-dark: #065F46;
            --color-primary-light: #10B981;
            --color-soft-gray: #F9FAFB;
            --color-soft-green: #D1FAE5;
        }
        
        .bg-primary { background-color: var(--color-primary); }
        .bg-primary-dark { background-color: var(--color-primary-dark); }
        .bg-primary-light { background-color: var(--color-primary-light); }
        .text-primary { color: var(--color-primary); }
        .text-primary-dark { color: var(--color-primary-dark); }
        .text-primary-light { color: var(--color-primary-light); }
        .border-primary { border-color: var(--color-primary); }
        .bg-soft-gray { background-color: var(--color-soft-gray); }
        .bg-soft-green { background-color: var(--color-soft-green); }

      
        /* ===== IMPROVED CONTENT SECTION ===== */
        .content-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(209, 250, 229, 0.15) 100%);
            padding: 3.5rem 0;
        }

        .section-container {
            animation: fadeInUp 0.6s ease-out;
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

        /* Category Headers */
        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 3px solid #10B981;
            transition: all 0.3s ease;
            animation: slideInLeft 0.6s ease-out;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .category-header:hover {
            border-bottom-color: #0E7A4F;
        }

        .category-icon {
            font-size: 2.5rem;
            color: #0E7A4F;
            margin-right: 1.25rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .category-header:hover .category-icon {
            transform: scale(1.15) rotate(-5deg);
            color: #065F46;
        }

        .category-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #0E7A4F;
            letter-spacing: -0.3px;
            transition: color 0.3s ease;
        }

        .category-header:hover .category-title {
            color: #065F46;
        }

        /* Document Cards */
        .document-card {
            background: white;
            padding: 1.5rem;
            border-radius: 1rem;
            border-left: 5px solid #10B981;
            box-shadow: 0 2px 8px rgba(14, 122, 79, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out;
            animation-fill-mode: both;
        }

        .document-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #10B981, #0E7A4F, #065F46);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .document-card:hover::before {
            transform: scaleX(1);
        }

        .document-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(14, 122, 79, 0.18);
            border-left-color: #0E7A4F;
            background: linear-gradient(135deg, rgba(255, 255, 255, 1) 0%, rgba(209, 250, 229, 0.3) 100%);
        }

        /* Stagger animation for cards */
        .document-card:nth-child(1) { animation-delay: 0.1s; }
        .document-card:nth-child(2) { animation-delay: 0.15s; }
        .document-card:nth-child(3) { animation-delay: 0.2s; }
        .document-card:nth-child(4) { animation-delay: 0.25s; }
        .document-card:nth-child(5) { animation-delay: 0.3s; }
        .document-card:nth-child(6) { animation-delay: 0.35s; }

        .document-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: #1F2937;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            transition: color 0.3s ease;
        }

        .document-card:hover .document-title {
            color: #0E7A4F;
        }

        .document-description {
            font-size: 0.95rem;
            color: #6B7280;
            line-height: 1.6;
            transition: color 0.3s ease;
        }

        .document-card:hover .document-description {
            color: #4B5563;
        }

        /* Icon in card */
        .card-icon {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #10B981;
            border-radius: 50%;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }

        .document-card:hover .card-icon {
            background: #0E7A4F;
            transform: scale(1.3);
        }

        /* Grid Layout */
        .law-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .law-section {
            animation: fadeInUp 0.6s ease-out;
        }

        .law-section:nth-child(1) { animation-delay: 0.1s; }
        .law-section:nth-child(2) { animation-delay: 0.2s; }

        .laws-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(1fr, 1fr));
            gap: 1.5rem;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .law-grid {
                grid-template-columns: 1fr;
            }

            .category-title {
                font-size: 1.5rem;
            }

            .category-icon {
                font-size: 2rem;
                margin-right: 1rem;
            }
        }

        @media (max-width: 768px) {
            .content-section {
                padding: 2rem 0;
            }

            .law-grid {
                gap: 1.5rem;
            }

            .category-header {
                margin-bottom: 2rem;
                padding-bottom: 1rem;
            }

            .category-title {
                font-size: 1.35rem;
            }

            .category-icon {
                font-size: 1.75rem;
                margin-right: 0.75rem;
            }

            .document-card {
                padding: 1.25rem;
            }

            .document-title {
                font-size: 1rem;
            }

            .document-description {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 640px) {
            .content-section {
                padding: 1.5rem 0;
            }

            .category-header {
                margin-bottom: 1.5rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .category-icon {
                font-size: 1.5rem;
                margin-right: 0.5rem;
                margin-bottom: 0.5rem;
            }

            .category-title {
                font-size: 1.2rem;
            }

            .document-card {
                padding: 1rem;
            }

            .laws-container {
                gap: 1rem;
            }
        }

        /* Smooth border animation */
        .document-card {
            position: relative;
        }

        .document-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #10B981, transparent);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .document-card:hover::after {
            width: 100%;
        }
    </style>
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
        <div class="section-subtitle">Landasan Otoritas dan Regulasi</div>
        <h1 class="hero-title">Dasar Hukum Program</h1>
        <p class="hero-subtitle">Mencantumkan seluruh peraturan, undang-undang, dan kebijakan yang menjadi payung hukum serta legitimasi pelaksanaan program ini.</p>
        <button class="badge-hero">Lihat Regulasi</button>
    </div>
</section>
        
        <section class="content-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 section-container">
                
                <div class="law-grid">
                    
                    <!-- Section 1: Peraturan Perundang-undangan RI -->
                    <div class="law-section">
                        <div class="category-header">
                            <i class="fas fa-gavel category-icon"></i>
                            <h2 class="category-title">Peraturan Perundang-undangan RI</h2>
                        </div>
                        
                        <div class="laws-container">
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Undang-Undang RI Nomor 13 tahun 2003</h5>
                                        <p class="document-description">tentang Ketenagakerjaan.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Undang-undang Nomor 23 tahun 2004</h5>
                                        <p class="document-description">tentang Badan Nasional Sertifikasi Profesi (BNSP).</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Peraturan Pemerintah Nomor 31 Tahun 2006</h5>
                                        <p class="document-description">tentang Sistem Pelatihan Kerja Nasional.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Peraturan Presiden Nomor 8 Tahun 2012</h5>
                                        <p class="document-description">tentang Kerangka Kualifikasi Nasional Indonesia (KKNI).</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Peraturan Pemerintah RI Nomor 185 th 2018</h5>
                                        <p class="document-description">tentang jasa pendidikan bidang Standarisasi, Pelatihan dan Sertifikasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Pedoman BNSP & Standar Global -->
                    <div class="law-section">
                        <div class="category-header">
                            <i class="fas fa-globe-asia category-icon"></i>
                            <h2 class="category-title">Pedoman BNSP & Standar Global</h2>
                        </div>
                        
                        <div class="laws-container">
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">PEDOMAN BNSP 201</h5>
                                        <p class="document-description">Persyaratan Umum Lembaga Sertifikasi Profesi.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">Peraturan BNSP Nomor: 1 / BNSP / III / 2014 & 2 / BNSP / III / 2014</h5>
                                        <p class="document-description">Tentang Pedoman Pembentukan Lembaga Sertifikasi Profesi.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">PEDOMAN BNSP 206 & 207</h5>
                                        <p class="document-description">Persyaratan Umum TUK & Persyaratan Umum LSP Cabang.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">PEDOMAN BNSP 210-2006</h5>
                                        <p class="document-description">Persyaratan Umum Pengembangan dan Pemeliharaan Sertifikasi Profesi.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">PEDOMAN BNSP 301</h5>
                                        <p class="document-description">Pedoman Asesmen Kompetensi ASEAN.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="document-card">
                                <div style="display: flex; align-items: flex-start;">
                                    <span class="card-icon"></span>
                                    <div style="flex: 1;">
                                        <h5 class="document-title">MRA & ACCSTP</h5>
                                        <p class="document-description">Mutual Recognition Arrangement on Tourism Professional (2012) & ASEAN Common Competency Standards for Tourism Professionals (2005).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</body>
</html>