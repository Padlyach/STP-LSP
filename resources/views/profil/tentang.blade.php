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
        document.addEventListener('DOMContentLoaded', () => {
            const heroSection = document.querySelector('.hero-section');
            if(!heroSection) return;

            let mouseX = 0;
            let mouseY = 0;
            let targetX = 0;
            let targetY = 0;
            let isInHeroSection = false;

            document.addEventListener('mousemove', (e) => {
                const rect = heroSection.getBoundingClientRect();
                isInHeroSection = e.clientY >= rect.top && e.clientY <= rect.bottom;
                
                if (isInHeroSection) {
                    targetX = e.clientX - rect.left;
                    targetY = e.clientY - rect.top;
                }
            });

            function animateLight() {
                mouseX += (targetX - mouseX) * 0.08;
                mouseY += (targetY - mouseY) * 0.08;
                
                heroSection.style.setProperty('--mouse-x', mouseX + 'px');
                heroSection.style.setProperty('--mouse-y', mouseY + 'px');
                requestAnimationFrame(animateLight);
            }

            animateLight();

            heroSection.addEventListener('mouseenter', () => heroSection.classList.add('mouse-active'));
            heroSection.addEventListener('mouseleave', () => heroSection.classList.remove('mouse-active'));

            const particles = document.querySelectorAll('.particle');
            document.addEventListener('mousemove', (e) => {
                if (isInHeroSection) {
                    const rect = heroSection.getBoundingClientRect();
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

            heroSection.addEventListener('mouseleave', () => {
                particles.forEach(particle => particle.style.transform = 'translate(0, 0)');
            });
        });
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * { scroll-behavior: smooth; }
        body { background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); overflow-x: hidden; }

        nav { backdrop-filter: blur(20px); background: rgba(255, 255, 255, 0.7); border-bottom: 1px solid rgba(16, 185, 129, 0.1); transition: all 0.3s ease; }
        nav:hover { background: rgba(255, 255, 255, 0.9); border-bottom: 1px solid rgba(16, 185, 129, 0.3); }
        nav a { position: relative; font-weight: 500; transition: color 0.3s ease; }
        nav a::after { content: ''; position: absolute; bottom: -4px; left: 0; width: 0; height: 2px; background: linear-gradient(90deg, #10B981, #34D399); transition: width 0.3s ease; }
        nav a:hover::after { width: 100%; }

        .logo { background: linear-gradient(135deg, #0E7A4F, #10B981); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 800; letter-spacing: -1px; }

        .content-section { position: relative; padding: 80px 0; background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%); }

        .elegant-card { background: white; border-radius: 20px; transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1); border: 1px solid rgba(16, 185, 129, 0.1); overflow: hidden; position: relative; box-shadow: 0 10px 30px rgba(14, 122, 79, 0.08); }
        .elegant-card::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(52, 211, 153, 0.1), transparent); transition: left 0.6s ease; }
        .elegant-card:hover { transform: translateY(-12px); box-shadow: 0 30px 60px rgba(14, 122, 79, 0.15); border-color: rgba(16, 185, 129, 0.3); }
        .elegant-card:hover::before { left: 100%; }
        .card-inner { padding: 40px 35px; position: relative; z-index: 2; }

        .feature-item { display: flex; gap: 20px; padding: 18px 20px; margin-bottom: 12px; border-radius: 12px; transition: all 0.3s ease; cursor: pointer; position: relative; overflow: hidden; }
        .feature-item::before { content: ''; position: absolute; left: 0; top: 0; height: 100%; width: 3px; background: linear-gradient(180deg, #10B981, #34D399); transform: scaleY(0); transform-origin: top; transition: transform 0.4s ease; }
        .feature-item:hover { background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(52, 211, 153, 0.05)); }
        .feature-item:hover::before { transform: scaleY(1); }

        .feature-icon { width: 50px; height: 50px; min-width: 50px; background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(52, 211, 153, 0.15)); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #0E7A4F; transition: all 0.3s ease; }
        .feature-item:hover .feature-icon { background: linear-gradient(135deg, #10B981, #34D399); color: white; transform: scale(1.1) rotate(5deg); }
        .feature-icon svg { width: 24px; height: 24px; stroke-width: 2; }

        .feature-text h4 { font-size: 1.05rem; font-weight: 700; color: #0E7A4F; margin-bottom: 4px; transition: color 0.3s ease; }
        .feature-text p { font-size: 0.9rem; color: #64748b; margin: 0; }

        .info-box { background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(52, 211, 153, 0.05)); border: 1.5px solid rgba(16, 185, 129, 0.2); border-radius: 16px; padding: 24px; margin-bottom: 24px; transition: all 0.4s ease; position: relative; overflow: hidden; }
        .info-box::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(180deg, #10B981, #34D399); }
        .info-box:hover { border-color: rgba(16, 185, 129, 0.5); transform: translateX(4px); }

        .image-showcase { position: relative; perspective: 1200px; }
        .image-frame { position: relative; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 60px rgba(14, 122, 79, 0.2); transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1); border: 8px solid white; }
        .image-content { width: 100%; height: 420px; background: linear-gradient(135deg, #d1fae5, #a7f3d0); display: flex; align-items: center; justify-content: center; }

        .floating-badge { position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%); background: white; padding: 24px 32px; border-radius: 16px; box-shadow: 0 20px 50px rgba(14, 122, 79, 0.15); border: 2px solid rgba(16, 185, 129, 0.2); animation: float 6s ease-in-out infinite; z-index: 20; max-width: 90%; transition: all 0.3s ease; }
        .badge-icon { width: 50px; height: 50px; background: linear-gradient(135deg, #10B981, #34D399); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; }
        .badge-icon svg { width: 28px; height: 28px; }

        .section-title { font-size: clamp(1.5rem, 5vw, 2.8rem); font-weight: 900; background: linear-gradient(135deg, #0E7A4F, #10B981); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; letter-spacing: -1px; margin-bottom: 12px; }
        .section-subtitle { font-size: 0.95rem; font-weight: 600; color: #10B981; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 1rem; }

        @keyframes float { 0%, 100% { transform: translate(-50%, 0); } 50% { transform: translate(-50%, -15px); } }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .animate-in-left { animation: fadeInUp 0.8s ease-out; }
        .animate-in-right { animation: fadeInUp 0.8s ease-out; delay: 0.2s; }

        @media (max-width: 768px) {
            .image-content { height: 300px; }
            .floating-badge { padding: 16px 20px; }
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
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m4.5-6h1.5m-1.5 3h1.5m-1.5 3h1.5M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>D3 Perhotelan</h4>
                                <p>Program Diploma Tiga Perhotelan</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 .414-.336.75-.75.75H4.5a.75.75 0 0 1-.75-.75v-4.25m16.5 0a3 3 0 0 0-3-3H7.125a3 3 0 0 0-3 3m16.5 0V6a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6v8.15m15.75 0a3 3 0 0 1-3 3H7.125a3 3 0 0 1-3-3" />
                                </svg>
                            </div>
                            <div class="feature-text">
                                <h4>D4 Perhotelan</h4>
                                <p>Program Diploma Empat Perhotelan</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147L12 15l7.74-4.853a.75.75 0 000-1.294L12 4l-7.74 4.853a.75.75 0 000 1.294zm0 4.218L12 19.22l7.74-4.855a.75.75 0 011.088.752l-1.01 5.052a2.25 2.25 0 01-2.21 1.81H6.382a2.25 2.25 0 01-2.21-1.81l-1.01-5.052a.75.75 0 011.088-.752z" />
                                </svg>
                            </div>
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
                                <img src="{{ asset('image/stpbogor.jpg') }}" alt="STP Bogor" class="w-full h-full object-cover block" loading="lazy">
                            </div>
                        </div>

                        <div class="floating-badge hidden sm:flex">
                            <div class="badge-content">
                                <div class="badge-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                    </svg>
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