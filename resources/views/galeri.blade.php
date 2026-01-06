<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto & Video - LSP STP Bogor</title>

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

        /* ===== IMPROVED GALLERY STYLES ===== */
        .gallery-section {
            background: linear-gradient(135deg, #F9FAFB 0%, #FFFFFF 100%);
            padding: 4rem 0;
        }

        .section-title {
            position: relative;
            display: inline-block;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 800;
            color: #1F2937;
            margin-bottom: 0.5rem;
            letter-spacing: -0.5px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #0E7A4F, #10B981);
            border-radius: 2px;
        }

        .section-subtitle {
            color: #6B7280;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 1.5rem;
            margin-bottom: 3rem;
        }

        /* Photo Gallery Card */
        .gallery-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .gallery-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(14, 122, 79, 0.2);
        }

        .gallery-card-image {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
            overflow: hidden;
            background: linear-gradient(135deg, #E0E7FF 0%, #F0FDFA 100%);
        }

        .gallery-card-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .gallery-card:hover .gallery-card-image img {
            transform: scale(1.08);
        }

        .gallery-card-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(14, 122, 79, 0.95);
            backdrop-filter: blur(8px);
            color: white;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .gallery-card-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .gallery-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.5rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .gallery-card-date {
            font-size: 0.85rem;
            color: #9CA3AF;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: auto;
        }

        .gallery-card-date::before {
            content: '📅';
            font-size: 1rem;
        }

        /* Video Gallery Card */
        .video-card {
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(14, 122, 79, 0.25);
        }

        .video-card-thumbnail {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            background: linear-gradient(135deg, #1F2937 0%, #111827 100%);
            overflow: hidden;
        }

        .video-card-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .video-card:hover .video-play-btn {
            background: white;
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .video-play-btn svg {
            width: 24px;
            height: 24px;
        }

        .video-platform-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 8px 14px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            backdrop-filter: blur(10px);
            color: white;
        }

        .video-platform-badge.youtube {
            background: rgba(255, 0, 0, 0.85);
        }

        .video-platform-badge.instagram {
            background: rgba(225, 48, 108, 0.85);
        }

        .video-card-info {
            padding: 1.5rem;
        }

        .video-card-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.75rem;
            line-height: 1.5;
        }

        .video-card-platform {
            display: inline-block;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            background: linear-gradient(135deg, #F0FDFA, #D1FAE5);
            color: #0E7A4F;
        }

        /* Section backgrounds */
        .photo-section {
            background: white;
        }

        .video-section {
            background: linear-gradient(135deg, rgba(209, 250, 229, 0.5) 0%, rgba(167, 243, 208, 0.3) 100%);
        }

        /* Grid animations */
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

        .gallery-grid {
            display: grid;
            gap: 2rem;
            animation: fadeInUp 0.6s ease-out;
        }

        /* Responsive text */
        @media (max-width: 768px) {
            .section-title {
                font-size: 1.75rem;
            }
            
            .section-title::after {
                width: 60px;
            }
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
        <div class="section-subtitle">Galeri Media LSP STP Bogor</div>
        <h1 class="hero-title">Galeri Media</h1>
        <p class="hero-subtitle">
            Dokumentasi terbaik kegiatan uji, fasilitas, dan momen penting dari Lembaga Sertifikasi Profesi STP Bogor.
        </p>
        <button class="badge-hero">Lihat Semua Kegiatan Uji Kompetensi</button>
    </div>
</section>
        
        <!-- PHOTO GALLERY SECTION -->
        <section class="photo-section gallery-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-12">
                    <h2 class="section-title">Foto Kegiatan & Fasilitas</h2>
                    <p class="section-subtitle">Dokumentasi lengkap uji kompetensi dan fasilitas pelatihan terkini</p>
                </div>

                <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                  <div class="gallery-card">
    <div class="gallery-card-image">
        <img src="{{ asset('image/galeri1.jpg') }}" alt="Uji Skema Receptionist">
        <span class="gallery-card-badge">Foto</span>
    </div>
    <div class="gallery-card-content">
        <h3 class="gallery-card-title">Uji Skema Receptionist Batch 1</h3>
        <p class="gallery-card-date">20 Februari 2025</p>
    </div>
</div>


                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri2.jpg') }}" alt="Sesi Penilaian Dapur Pastry">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Sesi Penilaian Dapur Pastry</h3>
                            <p class="gallery-card-date">14 Februari 2025</p>
                        </div>  
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri3.jpg') }}" alt="Asesor Sedang Menguji Room Attendant">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Asesor Sedang Menguji Room Attendant</h3>
                            <p class="gallery-card-date">07 Februari 2025</p>
                        </div>
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri4.webp') }}"" alt="Fasilitas Restoran Pelatihan">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Fasilitas Restoran Pelatihan</h3>
                            <p class="gallery-card-date">22 Januari 2025</p>
                        </div>
                    </div>

                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri5.webp') }}" alt="Penyerahan Sertifikat">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Penyerahan Sertifikat Batch Desember</h3>
                            <p class="gallery-card-date">15 Desember 2024</p>
                        </div>
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri6.webp') }}" alt="Gedung LSP">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Gedung LSP STP Bogor</h3>
                            <p class="gallery-card-date">01 Januari 2025</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- VIDEO GALLERY SECTION -->
        <section class="video-section gallery-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-12">
                    <h2 class="section-title">Video Dokumentasi & Sosialisasi</h2>
                    <p class="section-subtitle">Kumpulan video edukasi, testimoni, dan profil LSP STP Bogor</p>
                </div>

                <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <a href="https://youtu.be/i6LTWwSwVvk?si=1w54bzhAwQhys-cb" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/i6LTWwSwVvk/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>
 
                 <a href="https://youtu.be/JdyD2QTZbng?si=ne0NKsMTht_OS4r9" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/JdyD2QTZbng/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>

                 <a href="https://youtu.be/DSXkWL8jH8Y?si=TnkHsA_1DfSm9Bw-" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/DSXkWL8jH8Y/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>

                 <a href="https://youtu.be/FM-MNgJgSUk?si=gBiS6njfQOPOBhvu" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/FM-MNgJgSUk/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>

                 <a href="https://youtu.be/jnYEJ83m7Ps?si=vpk-rCm1fVam_BPn" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/jnYEJ83m7Ps/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>

                 <a href="https://youtu.be/lUo1uZmbmaU?si=6oRJuM6BSnIyiMQj" target="_blank" class="video-card">
                    <div class="video-card-thumbnail">
                        <img src="https://img.youtube.com/vi/lUo1uZmbmaU/hqdefault.jpg" alt="Sosialisasi Pentingnya Sertifikasi BNSP">
                        <div class="video-play-btn">
                            <svg fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <span class="video-platform-badge youtube">YouTube</span>
                    </div>
                    <div class="video-card-info">
                        <h3 class="video-card-title">
                            Sosialisasi Pentingnya Sertifikasi BNSP
                        </h3>
                        <span class="video-card-platform">📺 YouTube</span>
                    </div>
                </a>

                




                </div>
            </div>
        </section>
    </div>
</body>
</html>