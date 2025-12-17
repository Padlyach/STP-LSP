<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sertifikat - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

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

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0fdfa 100%);
            min-height: 100vh;
        }

        /* ============================================
           SMOOTH FADE-IN ANIMATIONS
           ============================================ */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ============================================
           CARD ITEM - MAIN STYLING
           ============================================ */
        .card-item {
            background: linear-gradient(135deg, #ffffff 0%, #f8fffe 50%, #f0fbf7 100%);
            box-shadow: 
                0 2px 8px rgba(14, 122, 79, 0.08),
                0 10px 35px rgba(14, 122, 79, 0.12),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            border: 1.5px solid rgba(16, 185, 129, 0.35);
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        /* Staggered animation delay untuk setiap card */
        .grid-container > div:nth-child(1) { animation-delay: 0.1s; }
        .grid-container > div:nth-child(2) { animation-delay: 0.2s; }
        .grid-container > div:nth-child(3) { animation-delay: 0.3s; }
        .grid-container > div:nth-child(4) { animation-delay: 0.4s; }
        .grid-container > div:nth-child(5) { animation-delay: 0.5s; }
        .grid-container > div:nth-child(6) { animation-delay: 0.6s; }

        /* Shine effect pada card */
        .card-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            transition: left 0.8s ease;
            pointer-events: none;
        }

        .card-item:hover::before {
            left: 100%;
        }

        /* Hover effect */
        .card-item:hover {
            transform: translateY(-10px);
            box-shadow: 
                0 2px 8px rgba(14, 122, 79, 0.1),
                0 25px 50px rgba(14, 122, 79, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            background: linear-gradient(135deg, #ffffff 0%, #f5fdfb 50%, #edfbf7 100%);
            border-color: rgba(16, 185, 129, 0.5);
        }

        /* ============================================
           SERTIFIKAT ITEM STYLING
           ============================================ */
        .sertifikat-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sertifikat-item:hover {
            transform: scale(1.03);
            filter: drop-shadow(0 12px 25px rgba(14, 122, 79, 0.3));
        }

        .sertifikat-item a {
            display: block;
            position: relative;
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(14, 122, 79, 0.18);
            transition: all 0.3s ease;
            width: 100%;
            height: 280px;
            border: 2.5px solid rgba(16, 185, 129, 0.25);
        }

        .sertifikat-item a:hover {
            box-shadow: 0 15px 40px rgba(14, 122, 79, 0.28);
            border-color: rgba(16, 185, 129, 0.45);
        }

        .sertifikat-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .sertifikat-item a:hover img {
            filter: brightness(1.1) contrast(1.08) saturate(1.05);
        }

        /* Overlay effect */
        .sertifikat-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(14, 122, 79, 0.5), rgba(14, 122, 79, 0.15));
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sertifikat-item a:hover .sertifikat-overlay {
            opacity: 1;
        }

        /* Label dengan animasi */
        .sertifikat-label {
            font-size: 1rem;
            color: #0E7A4F;
            font-weight: 700;
            margin-top: 0.75rem;
            text-align: center;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
        }

        .sertifikat-item:hover .sertifikat-label {
            color: #065F46;
            transform: translateY(-3px);
        }

        /* ============================================
           HEADER INFO SECTION
           ============================================ */
        .card-header-info {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.08) 100%);
            border-bottom: 2px solid rgba(16, 185, 129, 0.2);
        }

        .card-header-info h2 {
            color: #0E7A4F;
            transition: all 0.3s ease;
            font-size: 1.875rem;
        }

        .card-header-info p {
            color: #0F766E;
            font-size: 1rem;
        }

        /* ============================================
           DIVIDER GRADIENT
           ============================================ */
        .divider-gradient {
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.4), transparent);
            height: 2px;
        }

        /* ============================================
           INFO SECTION STYLING
           ============================================ */
        .info-section {
            animation: slideInUp 0.6s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Info item */
        .info-item {
            transition: all 0.3s ease;
            padding: 1rem;
            border-radius: 0.75rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.08) 0%, rgba(16, 185, 129, 0.04) 100%);
            border: 1.5px solid rgba(16, 185, 129, 0.2);
        }

        .info-item:hover {
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15) 0%, rgba(16, 185, 129, 0.08) 100%);
            transform: translateX(5px);
            border-color: rgba(16, 185, 129, 0.35);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.12);
        }

        .info-item .label-text {
            color: #0E7A4F;
            font-weight: 700;
            font-size: 1rem;
        }

        .info-item .value-text {
            color: #0F766E;
            font-weight: 500;
            font-size: 1rem;
        }

        /* ============================================
           BADGE KOMPETENSI
           ============================================ */
        .badge-kompetensi {
            background: linear-gradient(135deg, #ccf0e8 0%, #b8e6d5 100%);
            color: #065F46;
            font-weight: 700;
            transition: all 0.3s ease;
            border: 1.5px solid rgba(16, 185, 129, 0.4);
            display: inline-block;
            width: fit-content;
            font-size: 0.95rem;
        }

        .badge-kompetensi:hover {
            transform: scale(1.08);
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.3);
            background: linear-gradient(135deg, #b8e6d5 0%, #a5dcc8 100%);
        }

        /* ============================================
           EMPTY STATE
           ============================================ */
        .empty-state {
            animation: fadeIn 0.5s ease-out;
            background: linear-gradient(135deg, #ffffff 0%, #f8fffe 50%, #f0fbf7 100%);
            border: 2px solid rgba(16, 185, 129, 0.3);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 768px) {
            .sertifikat-item a {
                height: 240px;
            }

            .grid-cols-2 {
                gap: 1.5rem;
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .p-6 {
                padding: 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .sertifikat-item a {
                height: 200px;
            }

            .grid-cols-2 {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .px-6 {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .p-6 {
                padding: 1rem;
            }

            .card-item {
                margin: 0 -0.25rem;
            }

            .info-item {
                padding: 0.75rem;
            }

            .card-header-info h2 {
                font-size: 1.5rem;
            }
        }

        .gradient-title {
            background: linear-gradient(90deg, #0E7A4F 0%, #10B981 50%, #059669 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInDown 0.8s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
       <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
</head>

<body class="antialiased">
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
    
    <div class="hero-content"> <div class="section-subtitle">Informasi Resmi Sertifikasi</div> <h1 class="hero-title">Berita Sertifikat</h1> <p class="hero-subtitle"> Menyajikan informasi terkini mengenai penerbitan, pembaruan, serta ketentuan resmi terkait sertifikat yang dikeluarkan oleh lembaga kami. </p> <button class="badge-hero">Lihat Berita</button> </div>
</section>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">

      

        <!-- Grid Container - 1 kolom -->
        <div class="space-y-6 grid-container" id="sertifikatList">

            {{-- LOOPING DATA DARI BACKEND (BLADE) --}}
            @forelse ($data as $d)
            <div class="card-item bg-white rounded-2xl overflow-hidden border border-gray-100">

                <!-- Sertifikat Section Title -->
                <div class="p-6 pb-3">
                    <p class="text-base font-bold text-primary-dark flex items-center gap-2">
                        <span class="text-2xl">🖼️</span> Dokumen Sertifikat
                    </p>
                </div>

                <!-- Sertifikat Container - 2 kolom -->
                <div class="grid grid-cols-2 gap-6 px-6 pb-6">
                    <!-- Sertifikat Depan -->
                    <div class="sertifikat-item">
                        <a href="{{ asset('storage/' . $d->sertifikat_depan) }}" target="_blank"
                            class="bg-gradient-to-br from-gray-100 to-gray-50">
                            <img src="{{ asset('storage/' . $d->sertifikat_depan) }}" alt="Sertifikat Depan">
                            <div class="sertifikat-overlay">
                                <span class="text-white font-semibold text-lg">👁️ Lihat Penuh</span>
                            </div>
                        </a>
                        <p class="sertifikat-label">📍 Halaman Depan</p>
                    </div>

                    <!-- Sertifikat Belakang -->
                    <div class="sertifikat-item">
                        <a href="{{ asset('storage/' . $d->sertifikat_belakang) }}" target="_blank"
                            class="bg-gradient-to-br from-gray-100 to-gray-50">
                            <img src="{{ asset('storage/' . $d->sertifikat_belakang) }}" alt="Sertifikat Belakang">
                            <div class="sertifikat-overlay">
                                <span class="text-white font-semibold text-lg">👁️ Lihat Penuh</span>
                            </div>
                        </a>
                        <p class="sertifikat-label">📍 Halaman Belakang</p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider-gradient"></div>

                <!-- Header Info -->
                <div class="p-6 pt-4 card-header-info">
                    <h2 class="text-primary-dark mb-1">{{ $d->nama }}</h2>
                    <p class="font-semibold">NIM: <span class="text-primary-light font-bold">{{ $d->nim }}</span></p>
                </div>

                <!-- Info Details -->
                <div class="space-y-2 p-6 pt-4 info-section">
                    
                    <!-- Kompetensi -->
                    <div class="info-item">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-2xl">🎓</span>
                            <span class="label-text">Kompetensi</span>
                        </div>
                        <span class="badge-kompetensi px-4 py-2 rounded-full">
                            {{ $d->kompetensi }}
                        </span>
                    </div>

                    <!-- Universitas -->
                    <div class="info-item">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-2xl">🏫</span>
                            <span class="label-text">Universitas</span>
                        </div>
                        <p class="value-text">{{ $d->nama_universitas }}</p>
                    </div>

                    <!-- Kontak -->
                    <div class="info-item">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-2xl">📧</span>
                            <span class="label-text">Kontak</span>
                        </div>
                        <p class="value-text break-all">{{ $d->email }}</p>
                        <p class="text-gray-600 font-medium mt-1 text-sm">☎️ {{ $d->telepon }}</p>
                    </div>
                </div>
            </div>
            @empty
            {{-- EMPTY STATE --}}
            <div>
                <div
                    class="empty-state text-center py-24 bg-white rounded-2xl shadow-lg border border-soft-green p-8 sm:p-16">
                    <div class="mb-6">
                        <svg class="w-24 h-24 mx-auto text-primary-light/30 mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-gray-500 font-bold text-2xl mb-3">Belum Ada Pengumuman Sertifikat</h3>
                    <p class="text-gray-400 text-lg">Silakan cek kembali secara berkala untuk update terbaru. ⏳</p>
                </div>
            </div>
            @endforelse

        </div>

    </div>

</body>

</html>