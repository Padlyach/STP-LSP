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

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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

        /* Efek Hover Kustom untuk Poin Ruang Lingkup (Dari kode Awal) */
        .scope-item-card {
            transition: all 0.3s ease-in-out;
            border-bottom: 4px solid var(--color-primary-light); /* Garis tegas di bawah */
            transform: scale(1);
        }
        .scope-item-card:hover {
            box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            transform: scale(1.02); /* Sedikit membesar saat dihover */
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
        
        <section class="py-16 sm:py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-16">
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-primary-dark mb-4">
                        4 Pilar Utama Layanan Kami
                    </h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Fokus kegiatan sertifikasi LSP STP Bogor hanya mencakup lingkup internal mahasiswa STP Bogor.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <div class="bg-white p-8 rounded-2xl shadow-xl scope-item-card">
                        <span class="text-5xl font-extrabold text-primary-dark block mb-4">01.</span>
                        <h4 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37a1.724 1.724 0 002.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Pengembangan Sistem dan Skema
                        </h4>
                        <p class="text-lg text-gray-700 font-medium">Mengembangkan sistem sertifikasi profesi dan skema sertifikasi yang relevan bagi mahasiswa Sekolah Tinggi Pariwisata Bogor.</p>
                    </div>
                    
                    <div class="bg-white p-8 rounded-2xl shadow-xl scope-item-card">
                        <span class="text-5xl font-extrabold text-primary-dark block mb-4">02.</span>
                        <h4 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.322A4.95 4.95 0 0012 3a4.95 4.95 0 00-7.757 1.258A5 5 0 002 8.5V17a2 2 0 002 2h16a2 2 0 002-2V8.5a5 5 0 00-1.243-3.242z"></path></svg>
                            Pelaksanaan Uji dan Penerbitan
                        </h4>
                        <p class="text-lg text-gray-700 font-medium">Melaksanakan kegiatan sertifikasi profesi secara profesional dan objektif, serta menerbitkan sertifikat kompetensi.</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-xl scope-item-card">
                        <span class="text-5xl font-extrabold text-primary-dark block mb-4">03.</span>
                        <h4 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11.134 1.356A8.001 8.001 0 0115.418 20.5M20 19v-5h-.582"></path></svg>
                            Pemeliharaan Kompetensi Lulusan
                        </h4>
                        <p class="text-lg text-gray-700 font-medium">Menyelengarakan pemeliharaan kompetensi (*surveillance*) terhadap mahasiswa yang telah memiliki sertifikat kompetensi.</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-xl scope-item-card">
                        <span class="text-5xl font-extrabold text-primary-dark block mb-4">04.</span>
                        <h4 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-primary-light" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c1.657 0 3 .895 3 2v4a3 3 0 11-6 0v-4c0-1.105 1.343-2 3-2zm0 0V4m-6 0h12M4 20h16"></path></svg>
                            Evaluasi Mutu dan Perbaikan
                        </h4>
                        <p class="text-lg text-gray-700 font-medium">Mengevaluasi pelaksanaan sertifikasi profesi dan pemeliharaan kompetensi secara berkala untuk perbaikan kualitas berkelanjutan.</p>
                    </div>
                    
                </div>
            </div>
        </section>
        
    </div>
</body>
</html>