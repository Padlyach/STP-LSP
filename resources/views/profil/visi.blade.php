<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi, Misi, Sasaran & Kebijakan - LSP STP Bogor</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Menggunakan warna kustom yang Anda minta
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

        /* Variabel Warna Kustom */
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

        /* Efek Hover Kustom untuk Kartu (Elegan dan Menarik) */
        .card-elegant {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        }
        .card-elegant:hover {
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            transform: translateY(-4px); 
        }

        /* Hover Khusus untuk Item Misi */
        .misi-item {
            transition: all 0.3s ease-in-out;
        }
        .misi-item:hover {
            background-color: var(--color-soft-green);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.06);
            transform: translateY(-2px);
        }
        
   

        .counter {
            font-size: 3rem;
            font-weight: 700;
            color: #0E7A4F;
        }

        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .count-animation { animation: countUp 1s ease-out; }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(14, 122, 79, 0.15);
        }

        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
        .mobile-menu.active {
            max-height: 800px;
        }
        /* END STYLE TAMBAHAN */

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
        <div class="section-subtitle">Arah dan Tujuan Jangka Panjang</div>
        <h1 class="hero-title">Visi dan Misi Kami</h1>
        <p class="hero-subtitle">Mewujudkan lembaga sertifikasi yang unggul dan terpercaya sebagai tolok ukur kompetensi tenaga kerja yang profesional di bidang pariwisata dan perhotelan.</p>
        <button class="badge-hero">Pahami Komitmen</button>
    </div>
</section>
        
        <section class="py-16 sm:py-20 -mt-8 relative z-10">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="p-8 md:p-12 rounded-3xl bg-white shadow-2xl card-elegant border-t-8 border-primary-light">
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-primary-dark mb-6 flex items-center justify-center sm:justify-start">
                        <svg class="w-9 h-9 mr-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.552-4.552A1.25 1.25 0 0121 6.5v11.75a1.25 1.25 0 01-2.197.887L15 14m0-4l-4.552-4.552A1.25 1.25 0 008 5v11.75a1.25 1.25 0 002.197.887L15 14"></path></svg>
                        Visi Lembaga
                    </h3>
                    <blockquote class="text-xl md:text-2xl italic text-gray-700 leading-relaxed border-l-4 border-primary pl-6 py-2 mt-4">
                        "Menjadi Lembaga Sertifikasi Profesi yang **independen, mandiri, objektif, professional, dan terpercaya** dalam mengembangkan sumber daya manusia di bidang pariwisata yang dapat bersaing secara **Nasional maupun Internasional**."
                    </blockquote>
                </div>
                
            </div>
        </section>
        
        <section class="py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-primary-dark mb-4">
                        🎯 Misi Kami
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                        Enam langkah strategis untuk mewujudkan Visi LSP STP Bogor.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">01</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Mandiri & Terpercaya</h4>
                        <p class="text-gray-600">Mendukung pengembangan lembaga sertifikasi profesi yang mandiri dan terpercaya serta Profesional.</p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">02</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Standar Global</h4>
                        <p class="text-gray-600">Menciptakan pengembangan lembaga profesi sesuai dengan standar kompetensi SDM di bidang pariwisata yang bertaraf Nasional dan Internasional.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">03</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Inovasi Skema</h4>
                        <p class="text-gray-600">Mengembangankan skema sertifikasi kompetensi kerja secara terus menerus mengikuti kebutuhan industri dan perkembangan teknologi.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">04</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Sinergi Jejaring</h4>
                        <p class="text-gray-600">Mengembangkan jejaringan dan kerjasama lembaga profesi yang sinergis dengan pemangku kepentingan.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">05</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Asesor Kompeten</h4>
                        <p class="text-gray-600">Menyediakan tenaga asesor yang kompeten dan profesional.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-primary misi-item">
                        <span class="text-3xl font-bold text-primary-dark block mb-2">06</span>
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">TUK Berstandar</h4>
                        <p class="text-gray-600">Menyediakan tempat-tempat uji kompetensi yang memenuhi standar Nasional dan Internasional.</p>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="bg-soft-green py-20 mt-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                    
                    <div class="bg-primary-dark p-8 rounded-2xl shadow-xl text-white card-elegant border-b-4 border-primary">
                        <h3 class="text-3xl font-bold mb-4 flex items-center">
                            <svg class="w-7 h-7 mr-3 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243m10.606-10.606L13.414 3.1a1.998 1.998 0 00-2.828 0l-4.243 4.243"></path></svg>
                            Sasaran Lembaga
                        </h3>
                        <p class="text-lg font-light mb-3 border-b border-white/40 pb-3">
                            LSP STP Bogor menargetkan uji kompetensi pada:
                        </p>
                        <ul class="list-disc pl-5 mt-3 space-y-2 font-semibold text-xl">
                            <li>Peserta Didik Sekolah Tinggi Pariwisata Bogor</li>
                            <li>Peserta Jejaring Sekolah Tinggi Pariwisata Bogor</li>
                        </ul>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-xl text-gray-800 card-elegant border-b-4 border-primary-light">
                        <h3 class="text-3xl font-bold text-primary-dark mb-4 flex items-center">
                            <svg class="w-7 h-7 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.322A4.95 4.95 0 0012 3a4.95 4.95 0 00-7.757 1.258A5 5 0 002 8.5V17a2 2 0 002 2h16a2 2 0 002-2V8.5a5 5 0 00-1.243-3.242z"></path></svg>
                            Kebijakan Mutu
                        </h3>
                        <div class="space-y-4 text-lg font-medium">
                            <p>
                                LSP STP Bogor bertekad menerapkan dan memelihara proses sertifikasi kompetensi kerja yang mengutamakan mutu sesuai dengan **pedoman BNSP 201 dll.**
                            </p>
                            <p class="border-t border-gray-200 pt-3">
                                Seluruh personil berkomitmen untuk menyelenggarakan Uji Kompetensi di bidang pariwisata secara **profesional dan objektif**.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</body>
</html>