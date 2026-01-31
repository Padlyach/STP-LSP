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
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #f5f7fa;
        }

        /* ============================================
           SECTION STYLING - iOS Style
           ============================================ */
        .gallery-section {
            padding: 4rem 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
            animation: fadeInDown 0.8s ease-out;
        }

        .section-badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.15), rgba(16, 185, 129, 0.08));
            color: #065F46;
            padding: 0.5rem 1.25rem;
            border-radius: 20px;
            font-size: 0.8125rem;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            margin-bottom: 1rem;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .section-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 800;
            color: #1F2937;
            margin-bottom: 0.75rem;
            letter-spacing: -0.03em;
            line-height: 1.2;
        }

        .section-subtitle {
            color: #6B7280;
            font-size: 1.0625rem;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* ============================================
           PHOTO GALLERY CARD - iOS Bubble Style
           ============================================ */
        .gallery-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 
                0 1px 3px rgba(0, 0, 0, 0.04),
                0 6px 16px rgba(0, 0, 0, 0.06),
                0 12px 32px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.04);
            animation: fadeInUp 0.6s ease-out backwards;
        }

        /* Staggered animation for gallery cards */
        .gallery-grid > div:nth-child(1) { animation-delay: 0.1s; }
        .gallery-grid > div:nth-child(2) { animation-delay: 0.2s; }
        .gallery-grid > div:nth-child(3) { animation-delay: 0.3s; }
        .gallery-grid > div:nth-child(4) { animation-delay: 0.4s; }
        .gallery-grid > div:nth-child(5) { animation-delay: 0.5s; }
        .gallery-grid > div:nth-child(6) { animation-delay: 0.6s; }

        .gallery-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 2px 6px rgba(0, 0, 0, 0.06),
                0 12px 24px rgba(0, 0, 0, 0.08),
                0 20px 48px rgba(14, 122, 79, 0.12);
        }

        .gallery-card:active {
            transform: translateY(-4px) scale(1.01);
        }

        .gallery-card-image {
            position: relative;
            width: 100%;
            padding-bottom: 75%;
            overflow: hidden;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
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
            transform: scale(1.1);
        }

        /* iOS-style frosted glass badge */
        .gallery-card-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            color: #0E7A4F;
            padding: 6px 14px;
            border-radius: 12px;
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.08),
                0 1px 2px rgba(0, 0, 0, 0.04),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .gallery-card-content {
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            background: #ffffff;
        }

        .gallery-card-title {
            font-size: 1.0625rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.75rem;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            letter-spacing: -0.01em;
        }

        .gallery-card-date {
            font-size: 0.8125rem;
            color: #9CA3AF;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: auto;
            padding: 0.5rem 0.875rem;
            background: #F9FAFB;
            border-radius: 10px;
            width: fit-content;
        }

        /* ============================================
           VIDEO GALLERY CARD - iOS Style
           ============================================ */
        .video-card {
            background: #ffffff;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 
                0 1px 3px rgba(0, 0, 0, 0.04),
                0 6px 16px rgba(0, 0, 0, 0.06),
                0 12px 32px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.04);
            animation: fadeInUp 0.6s ease-out backwards;
        }

        .video-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.06),
                0 16px 32px rgba(0, 0, 0, 0.1),
                0 24px 56px rgba(14, 122, 79, 0.15);
        }

        .video-card:active {
            transform: translateY(-6px) scale(1.01);
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
            transition: transform 0.5s ease, opacity 0.3s ease;
        }

        .video-card:hover .video-card-thumbnail img {
            transform: scale(1.08);
            opacity: 0.9;
        }

        /* iOS-style play button */
        .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 72px;
            height: 72px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 8px 24px rgba(0, 0, 0, 0.25),
                0 4px 12px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .video-card:hover .video-play-btn {
            background: rgba(255, 255, 255, 1);
            transform: translate(-50%, -50%) scale(1.15);
            box-shadow: 
                0 12px 32px rgba(0, 0, 0, 0.3),
                0 6px 16px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
        }

        .video-play-btn svg {
            width: 28px;
            height: 28px;
            color: #0E7A4F;
            margin-left: 4px;
        }

        /* Platform badge - frosted glass */
        .video-platform-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            padding: 8px 16px;
            border-radius: 12px;
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            color: white;
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .video-platform-badge.youtube {
            background: rgba(255, 0, 0, 0.9);
        }

        .video-platform-badge.instagram {
            background: rgba(225, 48, 108, 0.9);
        }

        .video-card-info {
            padding: 1.5rem;
            background: #ffffff;
        }

        .video-card-title {
            font-size: 1.0625rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 1rem;
            line-height: 1.5;
            letter-spacing: -0.01em;
        }

        .video-card-platform {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.8125rem;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 12px;
            background: linear-gradient(135deg, #F0FDFA, #D1FAE5);
            color: #065F46;
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        /* ============================================
           SECTION BACKGROUNDS
           ============================================ */
        .photo-section {
            background: #ffffff;
        }

        .video-section {
            background: linear-gradient(135deg, #fafafa 0%, #f5f7fa 100%);
        }

        /* ============================================
           ANIMATIONS
           ============================================ */
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

        .gallery-grid {
            display: grid;
            gap: 2rem;
        }

        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 1024px) {
            .section-title {
                font-size: 2.25rem;
            }
            
            .gallery-grid {
                gap: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .gallery-section {
                padding: 3rem 0;
            }

            .section-header {
                margin-bottom: 2rem;
            }
            
            .section-title {
                font-size: 1.875rem;
            }

            .section-subtitle {
                font-size: 0.9375rem;
            }
            
            .gallery-grid {
                gap: 1.25rem;
            }

            .gallery-card-content,
            .video-card-info {
                padding: 1.25rem;
            }

            .video-play-btn {
                width: 64px;
                height: 64px;
            }

            .video-play-btn svg {
                width: 24px;
                height: 24px;
            }
        }

        @media (max-width: 640px) {
            .gallery-section {
                padding: 2.5rem 0;
            }

            .section-badge {
                font-size: 0.75rem;
                padding: 0.4rem 1rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .section-subtitle {
                font-size: 0.875rem;
            }

            .gallery-card {
                border-radius: 20px;
            }

            .gallery-card-content,
            .video-card-info {
                padding: 1rem;
            }

            .gallery-card-title,
            .video-card-title {
                font-size: 0.9375rem;
            }

            .gallery-card-date {
                font-size: 0.75rem;
                padding: 0.4rem 0.75rem;
            }

            .video-card {
                border-radius: 20px;
            }

            .video-play-btn {
                width: 56px;
                height: 56px;
            }

            .video-play-btn svg {
                width: 20px;
                height: 20px;
            }

            .video-card-platform {
                font-size: 0.75rem;
                padding: 0.4rem 0.875rem;
            }
        }

        /* ============================================
           DIVIDER LINE
           ============================================ */
        .section-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.2), transparent);
            margin: 4rem 0;
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
                <div class="section-header">
                    <div class="section-badge">📸 Galeri Foto</div>
                    <h2 class="section-title">Foto Kegiatan & Fasilitas</h2>
                    <p class="section-subtitle">Dokumentasi lengkap uji kompetensi dan fasilitas pelatihan terkini</p>
                </div>

                <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri1.jpg') }}" alt="Uji Skema Receptionist">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Uji Skema Receptionist Batch 1</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                20 Februari 2025
                            </p>
                        </div>
                    </div>

                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri2.jpg') }}" alt="Sesi Penilaian Dapur Pastry">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Sesi Penilaian Dapur Pastry</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                14 Februari 2025
                            </p>
                        </div>  
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri3.jpg') }}" alt="Asesor Sedang Menguji Room Attendant">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Asesor Sedang Menguji Room Attendant</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                07 Februari 2025
                            </p>
                        </div>
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri4.webp') }}" alt="Fasilitas Restoran Pelatihan">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Fasilitas Restoran Pelatihan</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                22 Januari 2025
                            </p>
                        </div>
                    </div>

                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri5.webp') }}" alt="Penyerahan Sertifikat">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Penyerahan Sertifikat Batch Desember</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                15 Desember 2024
                            </p>
                        </div>
                    </div>
                    
                    <div class="gallery-card">
                        <div class="gallery-card-image">
                            <img src="{{ asset('image/galeri6.webp') }}" alt="Gedung LSP">
                            <span class="gallery-card-badge">Foto</span>
                        </div>
                        <div class="gallery-card-content">
                            <h3 class="gallery-card-title">Gedung LSP STP Bogor</h3>
                            <p class="gallery-card-date">
                                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                                </svg>
                                01 Januari 2025
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Divider -->
        <div class="section-divider"></div>

        <!-- VIDEO GALLERY SECTION -->
        <section class="video-section gallery-section">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="section-header">
                    <div class="section-badge">🎥 Galeri Video</div>
                    <h2 class="section-title">Video Dokumentasi & Sosialisasi</h2>
                    <p class="section-subtitle">Kumpulan video edukasi, testimoni, dan profil LSP STP Bogor</p>
                </div>

                <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
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
                            <span class="video-card-platform">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                                YouTube
                            </span>
                        </div>
                    </a>

                </div>
            </div>
        </section>
    </div>
</body>
</html>