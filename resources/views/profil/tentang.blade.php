<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LSP STP Bogor</title>

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
                    backdropBlur: {
                        'xs': '2px',
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
        /* [SEMUA STYLE CSS TETAP SAMA] */
        * {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            overflow-x: hidden;
        }

        /* ===== NAVBAR (Dibiarkan kosong, hanya untuk jaga-jaga jika ada class yang dipakai) ===== */
        nav {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.7);
            border-bottom: 1px solid rgba(16, 185, 129, 0.1);
            transition: all 0.3s ease;
        }

        nav:hover {
            background: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(16, 185, 129, 0.3);
        }

        nav a {
            position: relative;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #10B981, #34D399);
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        .logo {
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 800;
            letter-spacing: -1px;
        }

        

        /* ===== MAIN CONTENT SECTION ===== */
        .content-section {
            position: relative;
            padding: 80px 0;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        /* ===== CARDS & BOXES ===== */
        .elegant-card {
            background: white;
            border-radius: 20px;
            padding: 0;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 1px solid rgba(16, 185, 129, 0.1);
            overflow: hidden;
            position: relative;
            box-shadow: 0 10px 30px rgba(14, 122, 79, 0.08);
        }

        .elegant-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(52, 211, 153, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .elegant-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px rgba(14, 122, 79, 0.15);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .elegant-card:hover::before {
            left: 100%;
        }

        .card-inner {
            padding: 40px 35px;
            position: relative;
            z-index: 2;
        }

        /* ===== FEATURE LIST ===== */
        .feature-item {
            display: flex;
            gap: 20px;
            padding: 18px 20px;
            margin-bottom: 12px;
            border-radius: 12px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: linear-gradient(180deg, #10B981, #34D399);
            transform: scaleY(0);
            transform-origin: top;
            transition: transform 0.4s ease;
        }

        .feature-item:hover {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(52, 211, 153, 0.05));
        }

        .feature-item:hover::before {
            transform: scaleY(1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(52, 211, 153, 0.15));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0E7A4F;
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover .feature-icon {
            background: linear-gradient(135deg, #10B981, #34D399);
            color: white;
            transform: scale(1.1) rotate(5deg);
        }

        .feature-text h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0E7A4F;
            margin-bottom: 4px;
            transition: color 0.3s ease;
        }

        .feature-item:hover .feature-text h4 {
            color: #0E7A4F;
        }

        .feature-text p {
            font-size: 0.9rem;
            color: #64748b;
            margin: 0;
        }

        /* ===== INFO BOX ===== */
        .info-box {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(52, 211, 153, 0.05));
            border: 1.5px solid rgba(16, 185, 129, 0.2);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .info-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #10B981, #34D399);
        }

        .info-box:hover {
            border-color: rgba(16, 185, 129, 0.5);
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.12), rgba(52, 211, 153, 0.08));
            transform: translateX(4px);
        }

        /* ===== LICENSE BOX ===== */
        .license-box {
            background: linear-gradient(135deg, #f0fdf4, #ecfdf5);
            border: 2px solid rgba(16, 185, 129, 0.3);
            border-radius: 12px;
            padding: 16px;
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #0E7A4F;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .license-box:hover {
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            border-color: rgba(16, 185, 129, 0.6);
            transform: scale(1.02);
        }

        /* ===== IMAGE GALLERY ===== */
        .image-showcase {
            position: relative;
            perspective: 1200px;
        }

        .image-frame {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.2);
            transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 8px solid white;
        }

        .image-frame:hover {
            transform: rotateY(3deg) rotateX(-3deg) translateZ(20px);
        }

        .image-content {
            width: 100%;
            height: 420px;
            background: linear-gradient(135deg, #d1fae5, #a7f3d0);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
        }

        /* ===== BADGE FLOATING ===== */
        .floating-badge {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            background: white;
            padding: 24px 32px;
            border-radius: 16px;
            box-shadow: 0 20px 50px rgba(14, 122, 79, 0.15);
            border: 2px solid rgba(16, 185, 129, 0.2);
            animation: float 6s ease-in-out infinite;
            z-index: 20;
            max-width: 90%;
            transition: all 0.3s ease;
        }

        .floating-badge:hover {
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 30px 70px rgba(14, 122, 79, 0.25);
        }

        .badge-content {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .badge-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #10B981, #34D399);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
        }

        .badge-text h4 {
            font-size: 1rem;
            font-weight: 700;
            color: #0E7A4F;
            margin-bottom: 4px;
        }

        .badge-text p {
            font-size: 0.85rem;
            color: #64748b;
            margin: 0;
        }

        /* ===== TEXT & TYPOGRAPHY ===== */
        .section-title {
            font-size: clamp(1.5rem, 5vw, 2.8rem);
            font-weight: 900;
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: -1px;
            margin-bottom: 12px;
        }

        .section-subtitle {
            font-size: 0.95rem;
            font-weight: 600;
            color: #10B981;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 1rem;
        }

        .accent-line {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #10B981, #34D399);
            border-radius: 2px;
            margin-bottom: 24px;
        }

        /* ===== STATS SECTION ===== */
        .stats-section {
            background: linear-gradient(135deg, #0E7A4F 0%, #065F46 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            border: 1.5px solid rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            color: white;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .stat-card:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }

        .stat-card:hover::before {
            left: 100%;
        }

        .stat-number {
            font-size: clamp(2.5rem, 8vw, 4rem);
            font-weight: 900;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #34D399, #10B981);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1.05rem;
            font-weight: 600;
            opacity: 0.95;
        }

        /* ===== ANIMATIONS (Dibiarkan) ===== */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .animate-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-in-left {
            animation: fadeInLeft 0.8s ease-out;
        }

        .animate-in-right {
            animation: fadeInRight 0.8s ease-out;
        }

        /* ===== RESPONSIVE (Dibiarkan) ===== */
        @media (max-width: 768px) {
            .hero-section {
                padding-top: 100px;
                padding-bottom: 60px;
            }

            .card-inner {
                padding: 30px 25px;
            }

            .content-section {
                padding: 60px 0;
            }

            .stats-section {
                padding: 60px 0;
            }

            .image-content {
                height: 300px;
            }

            .floating-badge {
                padding: 16px 20px;
            }

            .stat-card {
                padding: 30px 20px;
            }
        }

        /* ===== SCROLLBAR (Dibiarkan) ===== */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: linear-gradient(135deg, #f8fafc, #f1f5f9);
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #10B981, #34D399);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #0E7A4F, #10B981);
        }
    </style>
       <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
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
        <div class="section-subtitle">Visi, Misi, dan Nilai Kami</div>
        <h1 class="hero-title">Tentang LSP STP Bogor</h1>
        <p class="hero-subtitle">Mengenal lebih dalam komitmen kami dalam meningkatkan kualitas sumber daya manusia melalui sertifikasi kompetensi yang kredibel dan terstandar.</p>
        <button class="badge-hero">Baca Selengkapnya</button>
    </div>
</section>

    <main class="content-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

                <section class="animate-in-left pt-8">
                    <h2 class="section-title mb-5">LSP STP Bogor</h2>
                  

                    <div class="elegant-card mb-10">
                        <div class="card-inner">
                            <p class="text-gray-700 leading-relaxed mb-4">
                                <strong class="text-primary-dark">LSP STP Bogor</strong> adalah <strong>Lembaga Sertifikasi Profesi (LSP) P1</strong> yang dinaungi oleh <strong>Sekolah Tinggi Pariwisata Bogor</strong>.
                            </p>
                            <p class="text-gray-600 text-sm">
                                Berdedikasi untuk menjamin kualitas kompetensi di bidang pariwisata dengan standar profesional tertinggi.
                            </p>
                        </div>
                    </div>

                    <p class="section-subtitle mt-3 mb-4 ">Fokus Uji Kompetensi</p>

                    <div class="space-y-4 mb-8">
                        <div class="feature-item">
                            <div class="feature-icon">📚</div>
                            <div class="feature-text">
                                <h4>D3 Perhotelan</h4>
                                <p>Program Diploma Tiga Perhotelan</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">🎯</div>
                            <div class="feature-text">
                                <h4>D4 Perhotelan</h4>
                                <p>Program Diploma Empat Perhotelan</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">🌟</div>
                            <div class="feature-text">
                                <h4>S1 Pariwisata</h4>
                                <p>Reguler & Kelas Karyawan</p>
                            </div>
                        </div>
                    </div>
                </section>

           <section class="animate-in-right">
    <div class="image-showcase relative pt-8">
        <div class="image-frame p-0 m-0 overflow-hidden"> 
            <div class="image-content p-0 m-0">
                <img src="/build/assets/image/stpbogor.jpg" 
                    alt="STP Bogor" 
                    class="w-full h-full object-cover block" 
                    loading="lazy">
            </div>
        </div>

        <div class="floating-badge hidden sm:flex">
            <div class="badge-content">
                <div class="badge-icon">
                    ✅
                </div>
                <div class="badge-text">
                    <h4>Sertifikasi BNSP Resmi</h4>
                    <p>Diakui secara nasional dan internasional</p>
                </div>
            </div>
        </div>
    </div>

    <div class="info-box mt-20">
        <p class="text-gray-700 text-base leading-relaxed">
            Uji kompetensi dilaksanakan di <strong class="text-primary-dark">TUK Sekolah Tinggi Pariwisata Bogor</strong>, setelah peserta menyelesaikan <strong class="text-primary">on the job training</strong> yang komprehensif.
        </p>
    </div>
</section>
            </div>
        </div>
    </main>

</body>
</html>