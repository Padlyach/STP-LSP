<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Uji Kompetensi - LSP STP Bogor</title>

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

        /* Gaya Khusus untuk Kotak Jadwal (Menggunakan warna dari tailwind config) */
        .schedule-box {
            border-left: 5px solid #0E7A4F; /* Menggunakan primary color baru */
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
        <div class="section-subtitle">Waktu dan Tempat Pelaksanaan</div>
        <h1 class="hero-title">Jadwal Uji Kompetensi</h1>
        <p class="hero-subtitle">Temukan informasi terkini mengenai tanggal, sesi, dan lokasi pelaksanaan uji kompetensi untuk semua skema sertifikasi yang tersedia.</p>
        <button class="badge-hero">Cek Jadwal</button>
    </div>
</section>
        <section class="py-12 sm:py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="text-center mb-10">
                    <h3 class="text-3xl font-extrabold text-gray-900">
                        Februari 2025
                    </h3>
                    </div>

                <div class="space-y-8">
                    
                    <div class="bg-white p-6 rounded-lg shadow-xl schedule-box card-hover">
                        <h4 class="text-2xl font-bold text-primary-dark mb-4 border-b pb-2 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            7 Februari 2025
                        </h4>
                        <div class="pl-2">
                            <p class="text-lg font-semibold text-gray-700 mb-2">Skema Uji:</p>
                            <ul class="list-disc list-inside space-y-1 text-gray-600 ml-4">
                                <li>Commis Pastry</li>
                                <li>Receptionist</li>
                                <li>Room Attendant</li>
                                <li>Waiter</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-xl schedule-box card-hover">
                        <h4 class="text-2xl font-bold text-primary-dark mb-4 border-b pb-2 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            11 Februari 2025
                        </h4>
                        <div class="pl-2">
                            <p class="text-lg font-semibold text-gray-700 mb-2">Skema Uji:</p>
                            <ul class="list-disc list-inside space-y-1 text-gray-600 ml-4">
                                <li>Commis Pastry</li>
                            </ul>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-xl schedule-box card-hover">
                        <h4 class="text-2xl font-bold text-primary-dark mb-4 border-b pb-2 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            14 Februari 2025
                        </h4>
                        <div class="pl-2">
                            <p class="text-lg font-semibold text-gray-700 mb-2">Skema Uji:</p>
                            <ul class="list-disc list-inside space-y-1 text-gray-600 ml-4">
                                <li>Commis Pastry</li>
                                <li>Receptionist</li>
                                <li>Room Attendant</li>
                                <li>Waiter</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-white p-6 rounded-lg shadow-xl schedule-box card-hover">
                        <h4 class="text-2xl font-bold text-primary-dark mb-4 border-b pb-2 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            22 Februari 2025
                        </h4>
                        <div class="pl-2">
                            <p class="text-lg font-semibold text-gray-700 mb-2">Skema Uji:</p>
                            <ul class="list-disc list-inside space-y-1 text-gray-600 ml-4">
                                <li>Waiter</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

    </div>
</body>
</html>