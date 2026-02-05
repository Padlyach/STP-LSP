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
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">

    <style>
        * {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, #f8fffe 0%, #f0fdf4 50%, #f9fafb 100%);
            background-attachment: fixed;
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

        .count-animation { 
            animation: countUp 1s ease-out; 
        }

        /* Glass Schedule Card */
        .schedule-card {
            position: relative;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08),
                        0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .schedule-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.05) 0%, rgba(14, 122, 79, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .schedule-card:hover {
            transform: translateY(-8px) scale(1.01);
            border-color: rgba(16, 185, 129, 0.4);
            box-shadow: 0 20px 60px rgba(14, 122, 79, 0.15),
                        0 8px 16px rgba(0, 0, 0, 0.08);
        }

        .schedule-card:hover::before {
            opacity: 1;
        }

        /* Glass Date Badge */
        .date-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(14, 122, 79, 0.1),
                        inset 0 1px 0 rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .date-badge:hover {
            transform: scale(1.05);
            border-color: rgba(16, 185, 129, 0.4);
            box-shadow: 0 6px 20px rgba(14, 122, 79, 0.2);
        }

        /* Calendar Icon Animation */
        .calendar-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #10B981 0%, #0E7A4F 100%);
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(14, 122, 79, 0.3);
            transition: all 0.3s ease;
        }

        .schedule-card:hover .calendar-icon {
            transform: rotate(5deg) scale(1.1);
            box-shadow: 0 6px 20px rgba(14, 122, 79, 0.4);
        }

        /* Scheme Badge */
        .scheme-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.625rem 1.125rem;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(16, 185, 129, 0.15);
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #374151;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        .scheme-badge:hover {
            background: rgba(16, 185, 129, 0.12);
            border-color: rgba(16, 185, 129, 0.3);
            color: #0E7A4F;
            transform: translateX(4px);
            box-shadow: 0 4px 12px rgba(14, 122, 79, 0.15);
        }

        .scheme-badge::before {
            content: '';
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #10B981, #0E7A4F);
            border-radius: 50%;
            box-shadow: 0 0 8px rgba(16, 185, 129, 0.5);
        }

        /* Month Header Glass */
        .month-header {
            position: relative;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 12px 40px rgba(14, 122, 79, 0.12),
                        0 4px 12px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        .month-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.15), transparent 70%);
            border-radius: 50%;
            filter: blur(40px);
            pointer-events: none;
        }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Shine Effect */
        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255, 255, 255, 0.5), 
                transparent);
            transition: left 0.6s ease;
        }

        .shine-effect:hover::after {
            left: 200%;
        }

        /* Stagger Animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .schedule-card {
            animation: slideIn 0.6s ease-out backwards;
        }

        .schedule-card:nth-child(1) { animation-delay: 0.1s; }
        .schedule-card:nth-child(2) { animation-delay: 0.2s; }
        .schedule-card:nth-child(3) { animation-delay: 0.3s; }
        .schedule-card:nth-child(4) { animation-delay: 0.4s; }

        /* Info Badge */
        .info-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(14, 122, 79, 0.05));
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            color: #0E7A4F;
            box-shadow: 0 2px 8px rgba(14, 122, 79, 0.08);
        }

        /* Divider */
        .glass-divider {
            height: 1px;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(16, 185, 129, 0.3), 
                transparent);
            margin: 1.5rem 0;
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #10B981, #0E7A4F);
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 0.1s ease;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(16, 185, 129, 0.4);
        }

        /* Responsive */
        @media (max-width: 640px) {
            .schedule-card {
                border-radius: 20px;
            }
            
            .date-badge {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .scheme-badge {
                font-size: 0.85rem;
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body class="text-gray-800 antialiased font-sans">
    <div class="scroll-indicator" id="scrollIndicator"></div>
    
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

        <!-- Schedule Section -->
        <section class="py-16 sm:py-20">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Month Header -->
                <div class="month-header mb-12 text-center float-animation">
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="w-12 h-1 bg-gradient-to-r from-transparent via-primary to-transparent rounded-full"></div>
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <div class="w-12 h-1 bg-gradient-to-r from-primary via-primary-light to-transparent rounded-full"></div>
                    </div>
                    
                    <h3 class="text-4xl sm:text-5xl font-extrabold bg-gradient-to-r from-primary-dark via-primary to-primary-light bg-clip-text text-transparent mb-3">
                        Februari 2025
                    </h3>
                    
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Jadwal uji kompetensi tersedia untuk berbagai skema sertifikasi
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-3 mt-6">
                        <div class="info-badge">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                            <span>4 Tanggal Tersedia</span>
                        </div>
                        <div class="info-badge">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                            </svg>
                            <span>4 Skema Aktif</span>
                        </div>
                    </div>
                </div>

                <!-- Schedule Cards -->
                <div class="space-y-6">
                    
                    <!-- Schedule 1: 7 Februari -->
                    <div class="schedule-card shine-effect p-6 sm:p-8">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                            <div class="date-badge">
                                <div class="calendar-icon">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Jumat</div>
                                    <div class="text-2xl font-bold text-gray-900">7 Februari 2025</div>
                                </div>
                            </div>
                            
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-primary/10 to-primary-light/10 border border-primary/20 rounded-full">
                                <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-primary">4 Skema</span>
                            </div>
                        </div>

                        <div class="glass-divider"></div>

                        <div>
                            <h5 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Skema Uji Kompetensi
                            </h5>
                            <div class="flex flex-wrap gap-3">
                                <div class="scheme-badge">Commis Pastry</div>
                                <div class="scheme-badge">Receptionist</div>
                                <div class="scheme-badge">Room Attendant</div>
                                <div class="scheme-badge">Waiter</div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule 2: 11 Februari -->
                    <div class="schedule-card shine-effect p-6 sm:p-8">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                            <div class="date-badge">
                                <div class="calendar-icon">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Selasa</div>
                                    <div class="text-2xl font-bold text-gray-900">11 Februari 2025</div>
                                </div>
                            </div>
                            
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-primary/10 to-primary-light/10 border border-primary/20 rounded-full">
                                <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-primary">1 Skema</span>
                            </div>
                        </div>

                        <div class="glass-divider"></div>

                        <div>
                            <h5 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Skema Uji Kompetensi
                            </h5>
                            <div class="flex flex-wrap gap-3">
                                <div class="scheme-badge">Commis Pastry</div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule 3: 14 Februari -->
                    <div class="schedule-card shine-effect p-6 sm:p-8">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                            <div class="date-badge">
                                <div class="calendar-icon">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Jumat</div>
                                    <div class="text-2xl font-bold text-gray-900">14 Februari 2025</div>
                                </div>
                            </div>
                            
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-primary/10 to-primary-light/10 border border-primary/20 rounded-full">
                                <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-primary">4 Skema</span>
                            </div>
                        </div>

                        <div class="glass-divider"></div>

                        <div>
                            <h5 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Skema Uji Kompetensi
                            </h5>
                            <div class="flex flex-wrap gap-3">
                                <div class="scheme-badge">Commis Pastry</div>
                                <div class="scheme-badge">Receptionist</div>
                                <div class="scheme-badge">Room Attendant</div>
                                <div class="scheme-badge">Waiter</div>
                            </div>
                        </div>
                    </div>

                    <!-- Schedule 4: 22 Februari -->
                    <div class="schedule-card shine-effect p-6 sm:p-8">
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                            <div class="date-badge">
                                <div class="calendar-icon">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-sm text-gray-500 font-medium">Sabtu</div>
                                    <div class="text-2xl font-bold text-gray-900">22 Februari 2025</div>
                                </div>
                            </div>
                            
                            <div class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-primary/10 to-primary-light/10 border border-primary/20 rounded-full">
                                <div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-primary">1 Skema</span>
                            </div>
                        </div>

                        <div class="glass-divider"></div>

                        <div>
                            <h5 class="text-lg font-semibold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                Skema Uji Kompetensi
                            </h5>
                            <div class="flex flex-wrap gap-3">
                                <div class="scheme-badge">Waiter</div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Info Footer -->
                <div class="mt-12 text-center">
                    <div class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 rounded-2xl">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <p class="text-sm text-blue-800 font-medium">
                            Untuk informasi lebih lanjut, hubungi tim kami
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script>
        // Hero section animation
        document.addEventListener('DOMContentLoaded', function() {
            const heroSection = document.querySelector('.hero-section');
            if (!heroSection) return;
            
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
        });

        // Scroll indicator
        window.addEventListener('scroll', () => {
            const scrollIndicator = document.getElementById('scrollIndicator');
            const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (window.scrollY / windowHeight);
            
            scrollIndicator.style.transform = `scaleX(${scrolled})`;
        });

        // Smooth scroll for "Cek Jadwal" button
        document.querySelector('.badge-hero')?.addEventListener('click', function(e) {
            e.preventDefault();
            const scheduleSection = document.querySelector('section.py-16');
            if (scheduleSection) {
                scheduleSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    </script>
</body>
</html>