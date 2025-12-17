<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemegang Sertifikat - LSP STP Bogor</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        // Warna yang diperbarui sesuai permintaan
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

        /* Variabel Warna Kustom (Sinkronisasi dengan Tailwind Config yang baru) */
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

        /* Efek Hover Kustom untuk Kartu Kewajiban */
        .duty-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            border-top: 4px solid transparent; 
        }
        .duty-card:hover {
            box-shadow: 0 15px 30px -5px rgba(16, 185, 129, 0.1), 0 6px 10px -4px rgba(0, 0, 0, 0.05);
            border-top-color: var(--color-primary-light);
            transform: translateY(-8px); 
        }

        /* Gaya Khusus untuk Konten Footer (Aksi) */
        .footer-cta-action {
            background-image: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
        }
        
        /* Gaya untuk Floating Card Validitas */
        .validity-card {
            border-left: 6px solid var(--color-primary-dark);
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
        <div class="section-subtitle">Daftar Lulusan Uji Kompetensi</div>
        <h1 class="hero-title">Verifikasi Pemegang Sertifikat</h1>
        <p class="hero-subtitle">Telusuri dan verifikasi data para profesional yang telah tervalidasi kompetensinya dan memiliki sertifikat resmi dari LSP STP Bogor.</p>
        <button class="badge-hero">Cari Sertifikat</button>
    </div>
</section>
        
        <section class="py-10 sm:py-16 bg-white shadow-inner">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 items-start">
                    
                    <div class="lg:col-span-1 order-2 lg:order-1">
                        <p class="text-sm font-semibold tracking-wider uppercase text-primary mb-1">🏅 Keunggulan Karir</p>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-5">
                            Nilai Lebih Sertifikasi LSP
                        </h3>
                        
                        <div class="space-y-4 text-base text-gray-700 leading-relaxed">
                            <p>
                                Sertifikat yang Anda pegang adalah **paspor profesional** yang membuktikan kesiapan Anda di industri. Ini bukan hanya kelulusan, melainkan pengakuan resmi **kompetensi kerja**.
                            </p>
                            
                            <div class="p-4 bg-soft-green rounded-lg shadow-md border border-primary-light">
                                <h4 class="text-lg font-bold text-primary-dark mb-1 flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.322A4.95 4.95 0 0012 3a4.95 4.95 0 00-7.757 1.258A5 5 0 002 8.5V17a2 2 0 002 2h16a2 2 0 002-2V8.5a5 5 0 00-1.243-3.242z"></path></svg>
                                    Modal Negosiasi Gaji
                                </h4>
                                <p class="text-sm text-gray-600">Kompetensi tersertifikasi memberikan Anda posisi tawar yang lebih kuat saat melamar pekerjaan atau promosi.</p>
                            </div>

                        </div>
                    </div>

                    <div class="lg:col-span-2 order-1 lg:order-2">
                        <div class="relative p-4 sm:p-6 bg-gray-100 rounded-3xl shadow-2xl">
                            <div class="bg-gray-300 h-64 sm:h-80 w-full rounded-2xl overflow-hidden flex flex-col items-center justify-center border-4 border-white shadow-inner">
                                
                            </div>

                            <div class="mt-4 p-4 sm:p-5 bg-white rounded-xl shadow-lg validity-card">
                                <h4 class="text-lg sm:text-xl font-extrabold text-primary-dark mb-1 flex items-center">
                                    <svg class="w-5 h-5 sm:w-6 sm:h-6 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    Penting: Masa Berlaku Sertifikat
                                </h4>
                                <p class="text-sm text-gray-700 font-medium">
                                    Sertifikat ini berlaku selama **3 (tiga) tahun**. Pastikan Anda mendaftar program **Surveillance** sebelum masa berakhir untuk mempertahankan status kompetensi Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-soft-green py-12 sm:py-16 mt-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-8 sm:mb-12">
                            <p class="text-sm font-semibold tracking-wider uppercase text-primary mb-1">💡 Aturan Main</p>
                    <h3 class="text-2xl sm:text-4xl font-extrabold text-primary-dark">
                        3 Kewajiban Utama Pemegang Sertifikat
                    </h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                    
                    <div class="bg-white p-6 rounded-xl shadow-md h-full duty-card">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.657-3.5 2-3.5 0s3.5-2 3.5 0zM12 11c0 1.657 3.5 2 3.5 0s-3.5-2-3.5 0zM7 11c0 1.657-3.5 2-3.5 0s3.5-2 3.5 0zM17 11c0 1.657 3.5 2 3.5 0s-3.5-2-3.5 0z"></path></svg>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">1. Jaga Integritas</h4>
                        <p class="text-sm text-gray-600">Menggunakan sertifikat hanya untuk skema yang tercantum dan menjunjung tinggi kode etik profesi.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md h-full duty-card">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11.134 1.356A8.001 8.001 0 0115.418 20.5M20 19v-5h-.582"></path></svg>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">2. Ikuti Surveillance</h4>
                        <p class="text-sm text-gray-600">Wajib mengikuti program Pemeliharaan Kompetensi (Surveillance) secara berkala untuk mempertahankan validitas sertifikat.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-md h-full duty-card">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-primary-dark rounded-full flex items-center justify-center mx-auto mb-3">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h4 class="text-lg sm:text-xl font-bold text-gray-900 mb-2">3. Laporkan Perubahan</h4>
                        <p class="text-sm text-gray-600">Segera laporkan perubahan alamat, pekerjaan, atau kondisi penting lain yang berkaitan dengan status kompetensi Anda.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>