<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Sertifikat - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
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
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #f5f7fa;
            min-height: 100vh;
        }

        /* ============================================
           FADE-IN ANIMATIONS
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

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* ============================================
           CARD CONTAINER - iPhone Bubble Style
           ============================================ */
        .card-container {
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 
                0 1px 3px rgba(0, 0, 0, 0.04),
                0 8px 24px rgba(0, 0, 0, 0.06),
                0 16px 48px rgba(0, 0, 0, 0.04);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.04);
            animation: fadeInScale 0.6s ease-out forwards;
            opacity: 0;
        }

        /* Staggered animation */
        .grid-container > div:nth-child(1) { animation-delay: 0.1s; }
        .grid-container > div:nth-child(2) { animation-delay: 0.2s; }
        .grid-container > div:nth-child(3) { animation-delay: 0.3s; }
        .grid-container > div:nth-child(4) { animation-delay: 0.4s; }
        .grid-container > div:nth-child(5) { animation-delay: 0.5s; }
        .grid-container > div:nth-child(6) { animation-delay: 0.6s; }

        .card-container:hover {
            transform: translateY(-4px);
            box-shadow: 
                0 2px 6px rgba(0, 0, 0, 0.06),
                0 12px 32px rgba(0, 0, 0, 0.08),
                0 20px 56px rgba(0, 0, 0, 0.06);
        }

        /* ============================================
           HEADER CARD
           ============================================ */
        .card-header {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            padding: 2rem;
            border-bottom: 1px solid rgba(16, 185, 129, 0.1);
        }

        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #065F46;
            margin-bottom: 0.25rem;
            letter-spacing: -0.02em;
        }

        .card-subtitle {
            font-size: 0.9375rem;
            font-weight: 500;
            color: #059669;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nim-badge {
            background: rgba(16, 185, 129, 0.15);
            color: #065F46;
            padding: 0.375rem 0.875rem;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 600;
            letter-spacing: 0.01em;
        }

        /* ============================================
           CERTIFICATE PREVIEW - iPhone Style
           ============================================ */
        .certificate-section {
            padding: 2rem;
            background: #fafafa;
        }

        .certificate-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.25rem;
        }

        .certificate-card {
            position: relative;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 
                0 2px 8px rgba(0, 0, 0, 0.04),
                0 4px 16px rgba(0, 0, 0, 0.06);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0, 0, 0, 0.06);
        }

        .certificate-card:hover {
            transform: scale(1.02);
            box-shadow: 
                0 4px 12px rgba(0, 0, 0, 0.06),
                0 8px 24px rgba(0, 0, 0, 0.08);
        }

        .certificate-card:active {
            transform: scale(0.98);
        }

        .certificate-image-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 70%;
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
        }

        .certificate-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .certificate-card:hover .certificate-image {
            transform: scale(1.05);
        }

        .certificate-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .certificate-card:hover .certificate-overlay {
            opacity: 1;
        }

        .certificate-label {
            padding: 0.75rem 1rem;
            text-align: center;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #374151;
            background: #ffffff;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
        }

        .view-button {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            color: #065F46;
            padding: 0.625rem 1.25rem;
            border-radius: 12px;
            font-size: 0.875rem;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* ============================================
           INFO SECTION - Bubble Cards
           ============================================ */
        .info-section {
            padding: 2rem;
            background: #ffffff;
        }

        .info-grid {
            display: grid;
            gap: 1rem;
        }

        .info-bubble {
            background: linear-gradient(135deg, #f0fdf4 0%, #ecfdf5 100%);
            border: 1px solid rgba(16, 185, 129, 0.15);
            border-radius: 18px;
            padding: 1.25rem 1.5rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .info-bubble:hover {
            transform: translateX(4px);
            background: linear-gradient(135deg, #dcfce7 0%, #d1fae5 100%);
            border-color: rgba(16, 185, 129, 0.25);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.1);
        }

        .info-label {
            display: flex;
            align-items: center;
            gap: 0.625rem;
            font-size: 0.8125rem;
            font-weight: 600;
            color: #065F46;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.625rem;
        }

        .info-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .info-value {
            font-size: 0.9375rem;
            font-weight: 500;
            color: #1f2937;
            line-height: 1.6;
        }

        .competency-badge {
            display: inline-block;
            background: linear-gradient(135deg, #10B981 0%, #059669 100%);
            color: #ffffff;
            padding: 0.625rem 1.25rem;
            border-radius: 14px;
            font-size: 0.9375rem;
            font-weight: 600;
            box-shadow: 
                0 2px 8px rgba(16, 185, 129, 0.25),
                0 4px 16px rgba(16, 185, 129, 0.15);
            transition: all 0.3s ease;
        }

        .competency-badge:hover {
            transform: translateY(-2px);
            box-shadow: 
                0 4px 12px rgba(16, 185, 129, 0.3),
                0 8px 24px rgba(16, 185, 129, 0.2);
        }

        /* ============================================
           SECTION DIVIDER
           ============================================ */
        .section-title {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.8125rem;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-bottom: 1rem;
            padding: 0 2rem;
            padding-top: 1.5rem;
        }

        .section-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, rgba(16, 185, 129, 0.2), transparent);
        }

        /* ============================================
           EMPTY STATE
           ============================================ */
        .empty-state {
            background: #ffffff;
            border-radius: 28px;
            padding: 4rem 2rem;
            text-align: center;
            box-shadow: 
                0 1px 3px rgba(0, 0, 0, 0.04),
                0 8px 24px rgba(0, 0, 0, 0.06);
            animation: fadeInScale 0.5s ease-out;
        }

        .empty-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #10B981;
            font-size: 2.5rem;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        .empty-description {
            font-size: 1rem;
            color: #6b7280;
        }

        /* ============================================
           RESPONSIVE DESIGN
           ============================================ */
        @media (max-width: 768px) {
            .certificate-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .card-header {
                padding: 1.5rem;
            }

            .card-title {
                font-size: 1.5rem;
            }

            .certificate-section,
            .info-section {
                padding: 1.5rem;
            }

            .section-title {
                padding: 0 1.5rem;
                padding-top: 1rem;
            }

            .info-bubble {
                padding: 1rem 1.25rem;
            }
        }

        @media (max-width: 640px) {
            .card-header {
                padding: 1.25rem;
            }

            .card-title {
                font-size: 1.25rem;
            }

            .card-subtitle {
                font-size: 0.875rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }

            .certificate-section,
            .info-section {
                padding: 1.25rem;
            }

            .section-title {
                padding: 0 1.25rem;
                font-size: 0.75rem;
            }

            .info-bubble {
                padding: 1rem;
            }

            .info-label {
                font-size: 0.75rem;
            }

            .info-value {
                font-size: 0.875rem;
            }
        }

        /* ============================================
           GRADIENT TITLE
           ============================================ */
        .gradient-title {
            background: linear-gradient(135deg, #0E7A4F 0%, #10B981 50%, #059669 100%);
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

        /* ============================================
           CONTACT INFO
           ============================================ */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0;
            color: #4b5563;
            font-size: 0.875rem;
        }

        .contact-item:not(:last-child) {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
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
        
        <div class="hero-content">
            <div class="section-subtitle">Informasi Resmi Sertifikasi</div>
            <h1 class="hero-title">Berita Sertifikat</h1>
            <p class="hero-subtitle">
                Menyajikan informasi terkini mengenai penerbitan, pembaruan, serta ketentuan resmi terkait sertifikat yang dikeluarkan oleh lembaga kami.
            </p>
            <button class="badge-hero">Lihat Berita</button>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        
        <!-- Grid Container -->
        <div class="space-y-8 grid-container" id="sertifikatList">

            {{-- LOOPING DATA DARI BACKEND (BLADE) --}}
            @forelse ($data as $d)
            <div class="card-container">

                <!-- Header Card -->
                <div class="card-header">
                    <h2 class="card-title">{{ $d->nama }}</h2>
                    <div class="card-subtitle">
                        <span>NIM</span>
                        <span class="nim-badge">{{ $d->nim }}</span>
                    </div>
                </div>

                <!-- Certificate Section -->
                <div class="section-title">
                    <span>📜</span>
                    <span>Dokumen Sertifikat</span>
                </div>

                <div class="certificate-section">
                    <div class="certificate-grid">
                        <!-- Certificate Front -->
                        <div class="certificate-card">
                            <a href="{{ asset('storage/' . $d->sertifikat_depan) }}" target="_blank">
                                <div class="certificate-image-wrapper">
                                    <img src="{{ asset('storage/' . $d->sertifikat_depan) }}" 
                                         alt="Sertifikat Depan" 
                                         class="certificate-image">
                                    <div class="certificate-overlay">
                                        <span class="view-button">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            Lihat Detail
                                        </span>
                                    </div>
                                </div>
                                <div class="certificate-label">Halaman Depan</div>
                            </a>
                        </div>

                        <!-- Certificate Back -->
                        <div class="certificate-card">
                            <a href="{{ asset('storage/' . $d->sertifikat_belakang) }}" target="_blank">
                                <div class="certificate-image-wrapper">
                                    <img src="{{ asset('storage/' . $d->sertifikat_belakang) }}" 
                                         alt="Sertifikat Belakang" 
                                         class="certificate-image">
                                    <div class="certificate-overlay">
                                        <span class="view-button">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            Lihat Detail
                                        </span>
                                    </div>
                                </div>
                                <div class="certificate-label">Halaman Belakang</div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Info Section -->
                <div class="section-title">
                    <span>ℹ️</span>
                    <span>Informasi Detail</span>
                </div>

                <div class="info-section">
                    <div class="info-grid">
                        
                        <!-- Competency -->
                        <div class="info-bubble">
                            <div class="info-label">
                                <span class="info-icon">🎓</span>
                                <span>Kompetensi</span>
                            </div>
                            <div class="info-value">
                                <span class="competency-badge">{{ $d->kompetensi }}</span>
                            </div>
                        </div>

                        <!-- University -->
                        <div class="info-bubble">
                            <div class="info-label">
                                <span class="info-icon">🏫</span>
                                <span>Institusi Pendidikan</span>
                            </div>
                            <div class="info-value">{{ $d->nama_universitas }}</div>
                        </div>

                        <!-- Contact -->
                        <div class="info-bubble">
                            <div class="info-label">
                                <span class="info-icon">📞</span>
                                <span>Informasi Kontak</span>
                            </div>
                            <div class="info-value">
                                <div class="contact-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span class="break-all">{{ $d->email }}</span>
                                </div>
                                <div class="contact-item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                    <span>{{ $d->telepon }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @empty
            {{-- EMPTY STATE --}}
            <div class="empty-state">
                <div class="empty-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="empty-title">Belum Ada Pengumuman Sertifikat</h3>
                <p class="empty-description">Silakan cek kembali secara berkala untuk update terbaru</p>
            </div>
            @endforelse

        </div>

    </div>

</body>

</html>