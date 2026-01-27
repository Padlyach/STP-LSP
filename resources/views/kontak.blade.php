<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - LSP STP Bogor</title>

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
                        'youtube': '#FF0000',
                        'instagram': '#E1306C',
                    },
                    fontFamily: {
                        'sans': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
</head>
<body class="bg-soft-gray text-gray-800 antialiased font-sans">
    @include('partials.navbar')
    <div class="min-h-screen flex flex-col">
        
        <!-- Hero Section (Tidak Diubah) -->
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
                <div class="section-subtitle">Kontak</div>
                <h1 class="hero-title">Kontak Kami</h1>
                <p class="hero-subtitle">
                    Hubungi kami untuk mendapatkan informasi, bantuan layanan sertifikasi, atau konsultasi terkait program dan kegiatan Lembaga Sertifikasi Profesi STP Bogor.
                </p>
                <button class="badge-hero">Hubungi Sekarang</button>
            </div>
        </section>

        <!-- Main Contact Section - UPDATED -->
        <main class="flex-grow py-16 sm:py-24 relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-primary-light opacity-5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-5 rounded-full blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                
                <!-- Contact Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-12">
                    
                    <!-- Card 1: Phone/WhatsApp -->
                    <div class="contact-glass-card group">
                        <div class="contact-icon-wrapper phone-gradient">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Telepon/WhatsApp</h3>
                        <p class="contact-card-subtitle">Informasi & Pendaftaran</p>
                        <a href="tel:081111626647" class="contact-card-link">0811-1162-647</a>
                        <a href="https://wa.me/6281111626647" target="_blank" class="contact-button whatsapp-button">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                            Chat WhatsApp
                        </a>
                    </div>

                    <!-- Card 2: Office Phone -->
                    <div class="contact-glass-card group">
                        <div class="contact-icon-wrapper office-gradient">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Telepon Kantor</h3>
                        <p class="contact-card-subtitle">Jam Kerja: 08.00 - 17.00 WIB</p>
                        <a href="tel:02517534343" class="contact-card-link">0251-7534343</a>
                        <a href="tel:02517534513" class="contact-card-link-secondary">0251-7534513</a>
                    </div>

                    <!-- Card 3: Email -->
                    <div class="contact-glass-card group">
                        <div class="contact-icon-wrapper email-gradient">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="contact-card-title">Email</h3>
                        <p class="contact-card-subtitle">Kirim Email Anda</p>
                        <a href="mailto:lpmi@stpbogor.ac.id" class="contact-card-link">lpmi@stpbogor.ac.id</a>
                        <a href="mailto:lpmi@stpbogor.ac.id" class="contact-button email-button">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Kirim Email
                        </a>
                    </div>

                </div>

                <!-- Address & Social Media Section -->
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 mb-12">
                    
                    <!-- Address Card -->
                    <div class="lg:col-span-3 address-glass-card">
                        <div class="flex items-start gap-6">
                            <div class="contact-icon-wrapper location-gradient flex-shrink-0">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Alamat Kantor</h3>
                                <p class="text-gray-600 text-base leading-relaxed mb-4">
                                    Jl. KH. R. Abdullah Bin Nuh, Jl. Yasmin Raya No. 16A, RT.01/RW04, Curugmekar, Kec. Bogor Barat, Kota Bogor, Jawa Barat 16113
                                </p>
                                <a href="https://maps.google.com/?q=Jl.+Yasmin+Raya+No.+16A+Bogor" target="_blank" class="inline-flex items-center gap-2 text-primary hover:text-primary-dark font-semibold transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                                    </svg>
                                    Buka di Google Maps
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media & Website Card -->
                    <div class="lg:col-span-2 social-glass-card">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Ikuti Kami</h3>
                        
                        <!-- Website -->
                        <a href="https://stpbogor.ac.id/" target="_blank" class="social-link-item website-hover">
                            <div class="social-icon-circle website-gradient">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="social-link-title">Website</div>
                                <div class="social-link-subtitle">stpbogor.ac.id</div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/stpbogor_bhi/" target="_blank" class="social-link-item instagram-hover">
                            <div class="social-icon-circle instagram-gradient">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="social-link-title">Instagram</div>
                                <div class="social-link-subtitle">@stpbogor_bhi</div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                    </div>

                </div>

               

            </div>
        </main>

    </div>

    <style>
        /* Contact Glass Cards - iPhone Style */
        .contact-glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08),
                        0 0 1px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .contact-glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--color-primary-light), var(--color-primary));
            transform: scaleX(0);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.15),
                        0 0 1px rgba(0, 0, 0, 0.1);
            border-color: rgba(16, 185, 129, 0.3);
        }

        .contact-glass-card:hover::before {
            transform: scaleX(1);
        }

        /* Icon Wrapper */
        .contact-icon-wrapper {
            width: 56px;
            height: 56px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .contact-glass-card:hover .contact-icon-wrapper {
            transform: scale(1.1) rotate(-5deg);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }

        .phone-gradient {
            background: linear-gradient(135deg, #10B981, #0E7A4F);
        }

        .office-gradient {
            background: linear-gradient(135deg, #065F46, #0E7A4F);
        }

        .email-gradient {
            background: linear-gradient(135deg, #374151, #1F2937);
        }

        .location-gradient {
            background: linear-gradient(135deg, #10B981, #065F46);
        }

        .website-gradient {
            background: linear-gradient(135deg, #6B7280, #4B5563);
        }

        .instagram-gradient {
            background: linear-gradient(135deg, #0E7A4F, #065F46);
        }

        /* Card Text Styles */
        .contact-card-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.5rem;
        }

        .contact-card-subtitle {
            font-size: 0.875rem;
            color: #6B7280;
            margin-bottom: 1rem;
        }

        .contact-card-link {
            display: block;
            font-size: 1.125rem;
            font-weight: 600;
            color: #0E7A4F;
            margin-bottom: 0.5rem;
            transition: all 0.3s ease;
        }

        .contact-card-link:hover {
            color: #065F46;
            transform: translateX(4px);
        }

        .contact-card-link-secondary {
            display: block;
            font-size: 1rem;
            font-weight: 500;
            color: #10B981;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .contact-card-link-secondary:hover {
            color: #0E7A4F;
            transform: translateX(4px);
        }

        /* Contact Buttons */
        .contact-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 0.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-button {
            background: linear-gradient(135deg, #10B981, #0E7A4F);
            color: white;
        }

        .whatsapp-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(14, 122, 79, 0.4);
        }

        .email-button {
            background: linear-gradient(135deg, #374151, #1F2937);
            color: white;
        }

        .email-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(55, 65, 81, 0.4);
        }

        /* Address Glass Card */
        .address-glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .address-glass-card:hover {
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.12);
            border-color: rgba(16, 185, 129, 0.3);
        }

        /* Social Glass Card */
        .social-glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .social-glass-card:hover {
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.12);
            border-color: rgba(16, 185, 129, 0.3);
        }

        /* Social Link Items */
        .social-link-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 16px;
            margin-bottom: 0.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.3);
            text-decoration: none;
            group: true;
        }

        .social-link-item:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateX(8px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .social-icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .social-link-item:hover .social-icon-circle {
            transform: scale(1.1) rotate(-5deg);
        }

        .social-link-title {
            font-weight: 600;
            color: #1F2937;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .social-link-subtitle {
            font-size: 0.875rem;
            color: #6B7280;
        }

        /* Form Glass Card */
        .form-glass-card {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 32px;
            padding: 3rem 2rem;
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08);
        }

        /* Form Styles */
        .form-group {
            position: relative;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.75rem;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid rgba(229, 231, 235, 0.8);
            border-radius: 16px;
            font-size: 1rem;
            color: #1F2937;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
        }

        .form-input:focus {
            border-color: #10B981;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1),
                        0 8px 24px rgba(14, 122, 79, 0.08);
        }

        .form-input::placeholder {
            color: #9CA3AF;
        }

        /* Submit Button */
        .submit-button {
            position: relative;
            padding: 1rem 3rem;
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            color: white;
            border: none;
            border-radius: 16px;
            font-size: 1.125rem;
            font-weight: 700;
            cursor: pointer;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(14, 122, 79, 0.3),
                        inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .submit-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(14, 122, 79, 0.4),
                        inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .submit-button:active {
            transform: translateY(-2px);
        }

        .button-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.4), 
                transparent);
            transition: left 0.6s ease;
            pointer-events: none;
        }

        .submit-button:hover .button-shine {
            left: 200%;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .contact-glass-card {
                padding: 1.5rem;
            }

            .address-glass-card,
            .social-glass-card {
                padding: 1.5rem;
            }

            .form-glass-card {
                padding: 2rem 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .contact-glass-card {
                padding: 1.25rem;
            }

            .contact-icon-wrapper {
                width: 48px;
                height: 48px;
            }

            .contact-card-title {
                font-size: 1.125rem;
            }

            .contact-card-link {
                font-size: 1rem;
            }

            .form-glass-card {
                padding: 1.5rem 1rem;
                border-radius: 24px;
            }

            .submit-button {
                width: 100%;
                padding: 1rem 2rem;
            }
        }
    </style>

</body>
</html>