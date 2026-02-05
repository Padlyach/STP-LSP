<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Lingkup - LSP STP Bogor</title>

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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            scroll-behavior: smooth;
        }

        /* Variabel Warna Kustom (Sinkronisasi dengan Tailwind Config) */
        :root {
            --color-primary: #0E7A4F; 
            --color-primary-dark: #065F46; 
            --color-primary-light: #10B981; 
            --color-soft-gray: #F9FAFB; 
            --color-soft-green: #D1FAE5; 
        }
        
        /* Utility Classes Kustom */
        .bg-primary { background-color: var(--color-primary); }
        .bg-primary-dark { background-color: var(--color-primary-dark); }
        .bg-primary-light { background-color: var(--color-primary-light); }
        .text-primary { color: var(--color-primary); }
        .text-primary-dark { color: var(--color-primary-dark); }
        .text-primary-light { color: var(--color-primary-light); }
        .border-primary { border-color: var(--color-primary); }
        .bg-soft-gray { background-color: var(--color-soft-gray); }
        .bg-soft-green { background-color: var(--color-soft-green); }

        /* Background Pattern */
        .bg-pattern {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(14, 122, 79, 0.03) 0%, transparent 50%);
        }

        /* Premium Card Design */
        .scope-item-card {
            position: relative;
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
            background: linear-gradient(145deg, #ffffff 0%, #fafffe 100%);
            border: 1px solid rgba(16, 185, 129, 0.1);
            overflow: hidden;
        }
        
        /* Glowing border effect */
        .scope-item-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, 
                var(--color-primary-light) 0%, 
                var(--color-primary) 50%, 
                var(--color-primary-light) 100%);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .scope-item-card:hover::before {
            transform: scaleX(1);
        }
        
        /* Shimmer effect on hover */
        .scope-item-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(16, 185, 129, 0.08),
                transparent
            );
            transition: left 0.7s ease;
        }
        
        .scope-item-card:hover::after {
            left: 100%;
        }
        
        .scope-item-card:hover {
            transform: translateY(-12px);
            box-shadow: 
                0 25px 50px -12px rgba(14, 122, 79, 0.25),
                0 12px 24px -8px rgba(16, 185, 129, 0.15),
                0 0 0 1px rgba(16, 185, 129, 0.1);
            border-color: rgba(16, 185, 129, 0.2);
        }

        /* Number Badge Design */
        .number-badge {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(14, 122, 79, 0.3);
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .number-badge::before {
            content: '';
            position: absolute;
            inset: -3px;
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
            border-radius: 22px;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .scope-item-card:hover .number-badge {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 122, 79, 0.4);
        }
        
        .scope-item-card:hover .number-badge::before {
            opacity: 0.5;
            animation: pulse-ring 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse-ring {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.1);
                opacity: 0;
            }
        }
        
        .number-badge span {
            font-size: 2rem;
            font-weight: 900;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Icon Container */
        .icon-container {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--color-soft-green), rgba(16, 185, 129, 0.1));
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        }
        
        .scope-item-card:hover .icon-container {
            transform: rotate(360deg) scale(1.1);
            background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
        }
        
        .icon-container svg {
            transition: all 0.4s ease;
        }
        
        .scope-item-card:hover .icon-container svg {
            color: white !important;
        }

        /* Decorative Elements */
        .card-decoration {
            position: absolute;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--color-primary-light) 0%, transparent 70%);
            opacity: 0.05;
            transition: all 0.5s ease;
        }
        
        .card-decoration-1 {
            top: -40px;
            right: -40px;
        }
        
        .card-decoration-2 {
            bottom: -40px;
            left: -40px;
        }
        
        .scope-item-card:hover .card-decoration {
            opacity: 0.1;
            transform: scale(1.2);
        }

        /* Text Effects */
        .gradient-text {
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-title {
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }
        
        .scope-item-card:hover .card-title {
            color: var(--color-primary);
        }

        /* Enhanced Info Badge */
        .info-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            background: white;
            border: 2px solid var(--color-primary-light);
            border-radius: 100px;
            font-weight: 600;
            color: var(--color-primary-dark);
            box-shadow: 
                0 4px 16px rgba(14, 122, 79, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
            transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
            position: relative;
            overflow: hidden;
        }
        
        .info-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.1), transparent);
            transition: left 0.5s ease;
        }
        
        .info-badge:hover::before {
            left: 100%;
        }
        
        .info-badge:hover {
            transform: translateY(-3px);
            box-shadow: 
                0 8px 24px rgba(14, 122, 79, 0.25),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
            border-color: var(--color-primary);
        }

        /* Section Header Underline */
        .section-header {
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }
        
        .section-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                var(--color-primary-light) 20%, 
                var(--color-primary) 50%, 
                var(--color-primary-light) 80%, 
                transparent 100%);
            border-radius: 10px;
        }

        /* Stats/Number Display */
        .stat-display {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.5rem 1.5rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(14, 122, 79, 0.05));
            border-radius: 50px;
            border: 1px solid rgba(16, 185, 129, 0.2);
            font-weight: 700;
            color: var(--color-primary-dark);
        }

        /* Smooth Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }
        
        .animate-fade-in-scale {
            animation: fadeInScale 0.6s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }
        
        .animate-delay-1 { animation-delay: 0.1s; opacity: 0; }
        .animate-delay-2 { animation-delay: 0.2s; opacity: 0; }
        .animate-delay-3 { animation-delay: 0.3s; opacity: 0; }
        .animate-delay-4 { animation-delay: 0.4s; opacity: 0; }
        .animate-delay-5 { animation-delay: 0.5s; opacity: 0; }

        /* Content Separator */
        .content-divider {
            height: 2px;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(16, 185, 129, 0.2) 50%, 
                transparent 100%);
            margin: 1.5rem 0;
        }

        /* Responsive Improvements */
        @media (max-width: 768px) {
            .number-badge {
                width: 64px;
                height: 64px;
                border-radius: 16px;
            }
            
            .number-badge span {
                font-size: 1.5rem;
            }
            
            .icon-container {
                width: 48px;
                height: 48px;
            }
            
            .scope-item-card:hover {
                transform: translateY(-6px);
            }
        }

        /* Glass morphism effect */
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
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
        <div class="section-subtitle">Struktur dan Batasan</div>
        <h1 class="hero-title">Ruang Lingkup Proyek</h1>
        <p class="hero-subtitle">Mendefinisikan batas-batas dan tujuan utama kami. Pahami secara jelas apa yang termasuk dan apa yang dikecualikan dalam inisiatif ini.</p>
        <button class="badge-hero">Lihat Detail</button>
    </div>
</section>
        
        <!-- Premium Content Section -->
        <section class="py-24 sm:py-32 bg-pattern relative">
            <!-- Decorative Background Elements -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-primary-light opacity-5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-primary opacity-5 rounded-full blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <!-- Premium Header Section -->
                <div class="text-center mb-24 space-y-6">
                    <!-- Info Badge -->
                    <div class="animate-fade-in-scale animate-delay-1">
                        <span class="info-badge">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Lingkup Internal Mahasiswa STP Bogor
                        </span>
                    </div>
                    
                    <!-- Main Heading -->
                    <h2 class="section-header text-4xl sm:text-5xl lg:text-6xl font-black text-primary-dark leading-tight animate-fade-in-up animate-delay-2">
                        4 Pilar Utama<br class="hidden sm:block"/>Layanan Kami
                    </h2>
                    
                    <!-- Subtitle with Stats -->
                    <div class="space-y-4 animate-fade-in-up animate-delay-3">
                        <p class="text-xl sm:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed font-medium">
                            Fokus kegiatan sertifikasi LSP STP Bogor hanya mencakup lingkup internal mahasiswa STP Bogor
                        </p>
                        
                        <!-- Stats Display -->
                        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
                            <div class="stat-display">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                </svg>
                                <span>Mahasiswa STP</span>
                            </div>
                            <div class="stat-display">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span>Sertifikasi Profesional</span>
                            </div>
                            <div class="stat-display">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"/>
                                </svg>
                                <span>Standar Kompetensi</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Premium Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10">
                    
                    <!-- Card 1 -->
                    <div class="scope-item-card p-8 sm:p-10 rounded-3xl shadow-lg relative animate-fade-in-up animate-delay-1">
                        <div class="card-decoration card-decoration-1"></div>
                        <div class="card-decoration card-decoration-2"></div>
                        
                        <div class="flex flex-col sm:flex-row gap-6 relative z-10">
                            <!-- Number Badge -->
                            <div class="number-badge flex-shrink-0 self-start">
                                <span>01</span>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1 space-y-5">
                                <!-- Icon and Title -->
                                <div class="flex items-start gap-4">
                                    <div class="icon-container flex-shrink-0">
                                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <h3 class="card-title text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                                        Pengembangan Sistem dan Skema
                                    </h3>
                                </div>
                                
                                <!-- Divider -->
                                <div class="content-divider"></div>
                                
                                <!-- Description -->
                                <p class="text-lg text-gray-600 leading-relaxed">
                                    Mengembangkan sistem sertifikasi profesi dan skema sertifikasi yang relevan bagi mahasiswa Sekolah Tinggi Pariwisata Bogor.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="scope-item-card p-8 sm:p-10 rounded-3xl shadow-lg relative animate-fade-in-up animate-delay-2">
                        <div class="card-decoration card-decoration-1"></div>
                        <div class="card-decoration card-decoration-2"></div>
                        
                        <div class="flex flex-col sm:flex-row gap-6 relative z-10">
                            <!-- Number Badge -->
                            <div class="number-badge flex-shrink-0 self-start">
                                <span>02</span>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1 space-y-5">
                                <!-- Icon and Title -->
                                <div class="flex items-start gap-4">
                                    <div class="icon-container flex-shrink-0">
                                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.322A4.95 4.95 0 0012 3a4.95 4.95 0 00-7.757 1.258A5 5 0 002 8.5V17a2 2 0 002 2h16a2 2 0 002-2V8.5a5 5 0 00-1.243-3.242z"/>
                                        </svg>
                                    </div>
                                    <h3 class="card-title text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                                        Pelaksanaan Uji dan Penerbitan
                                    </h3>
                                </div>
                                
                                <!-- Divider -->
                                <div class="content-divider"></div>
                                
                                <!-- Description -->
                                <p class="text-lg text-gray-600 leading-relaxed">
                                    Melaksanakan kegiatan sertifikasi profesi secara profesional dan objektif, serta menerbitkan sertifikat kompetensi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="scope-item-card p-8 sm:p-10 rounded-3xl shadow-lg relative animate-fade-in-up animate-delay-3">
                        <div class="card-decoration card-decoration-1"></div>
                        <div class="card-decoration card-decoration-2"></div>
                        
                        <div class="flex flex-col sm:flex-row gap-6 relative z-10">
                            <!-- Number Badge -->
                            <div class="number-badge flex-shrink-0 self-start">
                                <span>03</span>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1 space-y-5">
                                <!-- Icon and Title -->
                                <div class="flex items-start gap-4">
                                    <div class="icon-container flex-shrink-0">
                                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11.134 1.356A8.001 8.001 0 0115.418 20.5M20 19v-5h-.582"/>
                                        </svg>
                                    </div>
                                    <h3 class="card-title text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                                        Pemeliharaan Kompetensi Lulusan
                                    </h3>
                                </div>
                                
                                <!-- Divider -->
                                <div class="content-divider"></div>
                                
                                <!-- Description -->
                                <p class="text-lg text-gray-600 leading-relaxed">
                                    Menyelengarakan pemeliharaan kompetensi (<em>surveillance</em>) terhadap mahasiswa yang telah memiliki sertifikat kompetensi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="scope-item-card p-8 sm:p-10 rounded-3xl shadow-lg relative animate-fade-in-up animate-delay-4">
                        <div class="card-decoration card-decoration-1"></div>
                        <div class="card-decoration card-decoration-2"></div>
                        
                        <div class="flex flex-col sm:flex-row gap-6 relative z-10">
                            <!-- Number Badge -->
                            <div class="number-badge flex-shrink-0 self-start">
                                <span>04</span>
                            </div>
                            
                            <!-- Content -->
                            <div class="flex-1 space-y-5">
                                <!-- Icon and Title -->
                                <div class="flex items-start gap-4">
                                    <div class="icon-container flex-shrink-0">
                                        <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                        </svg>
                                    </div>
                                    <h3 class="card-title text-2xl sm:text-3xl font-bold text-gray-900 leading-tight">
                                        Evaluasi Mutu dan Perbaikan
                                    </h3>
                                </div>
                                
                                <!-- Divider -->
                                <div class="content-divider"></div>
                                
                                <!-- Description -->
                                <p class="text-lg text-gray-600 leading-relaxed">
                                    Mengevaluasi pelaksanaan sertifikasi profesi dan pemeliharaan kompetensi secara berkala untuk perbaikan kualitas berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Bottom CTA Section (Optional) -->
                <div class="mt-20 text-center animate-fade-in-up animate-delay-5">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-white rounded-2xl shadow-lg border border-gray-100">
                        <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-gray-700 font-medium">
                            Butuh informasi lebih lanjut? 
                            <a href="#" class="text-primary font-bold hover:text-primary-light transition-colors ml-1">Hubungi Kami</a>
                        </p>
                    </div>
                </div>
                
            </div>
        </section>
        
    </div>
</body>
</html>