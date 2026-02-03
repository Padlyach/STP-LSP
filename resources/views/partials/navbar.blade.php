<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<nav id="navbar" class="nav-sticky navbar-glass">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 lg:py-5">

            <div class="flex items-center space-x-3 group">
                <a href="{{ route('beranda') }}" class="block logo-container">
                    <img src="{{ asset('image/logostp.webp') }}"
                         alt="Logo LSP"
                         class="h-12 lg:h-14 w-auto object-contain transition-all duration-500 group-hover:scale-110 group-hover:drop-shadow-2xl">
                    <div class="logo-glow"></div>
                </a>
            </div>

            <ul class="hidden lg:flex items-center space-x-2 text-sm font-medium">

                <li>
                    <a href="{{ route('beranda') }}" class="nav-link bubble-btn">
                        <span class="nav-link-text">Beranda</span>
                        <div class="bubble-shine"></div>
                    </a>
                </li>

                <li class="dropdown relative group">
                    <a class="nav-link bubble-btn flex items-center cursor-pointer">
                        <span class="nav-link-text">Profil</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-500 group-hover:rotate-180" 
                             fill="none" stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                        <div class="bubble-shine"></div>
                    </a>

                    <div class="dropdown-menu glass-dropdown">
                        <a href="{{ route('profil.tentang') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Tentang</div>
                                <div class="text-xs text-gray-500">Profil Perusahaan</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('profil.visi') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Visi & Misi</div>
                                <div class="text-xs text-gray-500">Tujuan Organisasi</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('profil.dasarhukum') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Dasar Hukum</div>
                                <div class="text-xs text-gray-500">Landasan Operasional</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('profil.ruanglingkup') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Ruang Lingkup</div>
                                <div class="text-xs text-gray-500">Cakupan Layanan</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                    </div>
                </li>

                <li class="dropdown relative group">
                    <a class="nav-link bubble-btn flex items-center cursor-pointer">
                        <span class="nav-link-text">Sertifikasi</span>
                        <svg class="w-4 h-4 ml-1 transition-transform duration-500 group-hover:rotate-180" 
                             fill="none" stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                        <div class="bubble-shine"></div>
                    </a>

                    <div class="dropdown-menu glass-dropdown">
                        <a href="{{ route('sertifikasi.asesor') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Asesor Kompetensi</div>
                                <div class="text-xs text-gray-500">Tim Penguji</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('sertifikasi.jadwaluji') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Jadwal Uji Kompetensi</div>
                                <div class="text-xs text-gray-500">Agenda Pengujian</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('sertifikasi.tempatuji') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Tempat Uji Kompetensi</div>
                                <div class="text-xs text-gray-500">Lokasi Pengujian</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                        <a href="{{ route('sertifikat.berita') }}" class="dropdown-item glass-item">
                            <span class="dropdown-icon">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 4v4h4"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Berita Pendaftaran Sertifikat</div>
                                <div class="text-xs text-gray-500">Informasi Terbaru Pendaftar</div>
                            </div>
                            <div class="item-glow"></div>
                        </a>
                    </div>
                </li>

                <li>
                    <a href="{{ route('galeri') }}" class="nav-link bubble-btn">
                        <span class="nav-link-text">Galeri</span>
                        <div class="bubble-shine"></div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kontak') }}" class="nav-link bubble-btn">
                        <span class="nav-link-text">Kontak</span>
                        <div class="bubble-shine"></div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pendaftaran') }}" class="nav-link-primary bubble-primary">
                        <span class="relative z-10">Pendaftaran</span>
                        <div class="bubble-shine-primary"></div>
                    </a>
                </li>
                
                @guest
                <li>
                    <a href="{{ route('login') }}" class="nav-link-primary bubble-primary">
                        <span class="relative z-10">Login</span>
                        <div class="bubble-shine-primary"></div>
                    </a>
                </li>
                @endguest

                @auth
          <div class="relative">
    <!-- Avatar -->
    <button
        type="button"
        onclick="toggleDropdown()"
        class="focus:outline-none"
    >
        <img
            src="{{ Auth::user()->avatar
                ? asset('storage/' . Auth::user()->avatar)
                : asset('default-avatar.png') }}"
            class="w-8 h-8 rounded-full border"
            alt="Avatar"
        >
    </button>

    <!-- Dropdown -->
    <div
        id="avatarDropdown"
        class="hidden absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg overflow-hidden z-50"
    >
        <a
            href="{{ route('profile.edit') }}"
            class="block px-4 py-2 text-sm hover:bg-gray-100"
        >
            Edit Profile
        </a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button
                type="submit"
                class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 text-red-600"
            >
                Logout
            </button>
        </form>
    </div>
</div>


                
                @endauth
            </ul>

            <button id="mobile-menu-btn" class="bubble-menu-btn lg:hidden ">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="mobile-menu lg:hidden glass-mobile-menu">
             <!-- MOBILE BUTTON -->
           
            <a href="{{ route('beranda') }}" class="mobile-link bubble-mobile">
                <span>Beranda</span>
                <div class="mobile-shine"></div>
            </a>

            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn bubble-mobile">
                    <span>Profil</span>
                    <svg class="dropdown-arrow w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    <div class="mobile-shine"></div>
                </button>
                <div class="mobile-submenu glass-submenu">
                    <a href="{{ route('profil.tentang') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Tentang</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('profil.visi') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        <span>Visi & Misi</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('profil.dasarhukum') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                        <span>Dasar Hukum</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('profil.ruanglingkup') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        <span>Ruang Lingkup</span>
                        <div class="mobile-shine"></div>
                    </a>
                </div>
            </div>

            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn bubble-mobile">
                    <span>Sertifikasi</span>
                    <svg class="dropdown-arrow w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                    <div class="mobile-shine"></div>
                </button>

                <div class="mobile-submenu glass-submenu">
                    <a href="{{ route('sertifikasi.asesor') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span>Asesor Kompetensi</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('sertifikasi.jadwaluji') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <span>Jadwal Uji Kompetensi</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('sertifikasi.tempatuji') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Tempat Uji Kompetensi</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('sertifikat.berita') }}" class="mobile-sublink bubble-sublink">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 4v4h4"/></svg>
                        <span>Berita Pendaftaran Sertifikat</span>
                        <div class="mobile-shine"></div>
                    </a>
                </div>
            </div>

            <a href="{{ route('galeri') }}" class="mobile-link bubble-mobile">
                <span>Galeri</span>
                <div class="mobile-shine"></div>
            </a>
            <a href="{{ route('kontak') }}" class="mobile-link bubble-mobile">
                <span>Kontak</span>
                <div class="mobile-shine"></div>
            </a>
            <a href="{{ route('pendaftaran') }}" class="mobile-link-primary bubble-primary-mobile">
                <span class="relative z-10">Pendaftaran</span>
                <div class="bubble-shine-primary"></div>
            </a>
            
            @guest
            <a href="{{ route('login') }}" class="mobile-link-primary bubble-primary-mobile">
                <span class="relative z-10">Login</span>
                <div class="bubble-shine-primary"></div>
            </a>
            @endguest

            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" 
                   class="mobile-link-primary bubble-primary-mobile" 
                   onclick="event.preventDefault(); this.closest('form').submit();">
                    <span class="relative z-10">Logout</span>
                    <div class="bubble-shine-primary"></div>
                </a>
            </form>
            @endauth
        </div>
    </div>
</nav>

<style>
    * { 
        scroll-behavior: smooth; 
        font-family: 'Poppins', sans-serif;
    }

    :root {
        --color-primary: #0E7A4F;
        --color-primary-light: #10B981;
        --color-primary-dark: #065F46;
        --glass-bg: rgba(255, 255, 255, 0.85);
        --glass-border: rgba(255, 255, 255, 0.3);
    }

    /* Glassmorphism Navbar */
    .navbar-glass {
        position: sticky;
        top: 0;
        z-index: 50;
        background: var(--glass-bg);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border-bottom: 1px solid var(--glass-border);
        box-shadow: 0 8px 32px rgba(14, 122, 79, 0.08),
                    0 0 1px rgba(14, 122, 79, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .navbar-glass:hover {
        box-shadow: 0 12px 48px rgba(14, 122, 79, 0.12),
                    0 0 1px rgba(14, 122, 79, 0.15);
    }

    /* Logo Animation */
    .logo-container {
        position: relative;
    }

    .logo-glow {
        position: absolute;
        inset: -10px;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.4), transparent 70%);
        opacity: 0;
        transition: opacity 0.5s ease;
        pointer-events: none;
        filter: blur(15px);
    }

    .logo-container:hover .logo-glow {
        opacity: 1;
    }

    /* Bubble Buttons - iPhone Style */
    .bubble-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        padding: 0.625rem 1.25rem;
        font-size: 0.95rem;
        color: #374151;
        font-weight: 500;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        text-decoration: none;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05),
                    inset 0 1px 0 rgba(255, 255, 255, 0.8);
    }

    .bubble-btn:hover {
        background: rgba(16, 185, 129, 0.15);
        border-color: rgba(16, 185, 129, 0.3);
        color: var(--color-primary);
        transform: translateY(-2px) scale(1.02);
        box-shadow: 0 8px 20px rgba(14, 122, 79, 0.15),
                    inset 0 1px 0 rgba(255, 255, 255, 0.9);
    }

    .bubble-btn:active {
        transform: translateY(0) scale(0.98);
    }

    .bubble-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(255, 255, 255, 0.6), 
            transparent);
        transition: left 0.6s ease;
        pointer-events: none;
    }

    .bubble-btn:hover .bubble-shine {
        left: 200%;
    }

    /* Primary Bubble Button */
    .bubble-primary {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 1.75rem;
        font-size: 0.95rem;
        font-weight: 600;
        color: white;
        border-radius: 50px;
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 15px rgba(14, 122, 79, 0.25),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3),
                    inset 0 -1px 0 rgba(0, 0, 0, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        text-decoration: none;
        cursor: pointer;
    }

    .bubble-primary:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(14, 122, 79, 0.35),
                    inset 0 1px 0 rgba(255, 255, 255, 0.4),
                    inset 0 -1px 0 rgba(0, 0, 0, 0.15);
        background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
    }

    .bubble-primary:active {
        transform: translateY(-1px) scale(1.02);
    }

    .bubble-shine-primary {
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

    .bubble-primary:hover .bubble-shine-primary {
        left: 200%;
    }

    /* Glass Dropdown */
    .glass-dropdown {
        position: absolute;
        left: 0;
        margin-top: 0.5rem;
        width: 280px;
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border-radius: 20px;
        border: 1px solid var(--glass-border);
        box-shadow: 0 20px 60px rgba(14, 122, 79, 0.15),
                    0 0 1px rgba(0, 0, 0, 0.05);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(-10px);
        padding: 0.75rem;
    }

    .dropdown:hover .glass-dropdown {
        max-height: 600px;
        opacity: 1;
        transform: translateY(0);
    }

    /* Glass Dropdown Items */
    .glass-item {
        position: relative;
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem 1.25rem;
        font-size: 0.875rem;
        color: #4b5563;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 14px;
        margin: 0.25rem 0;
        text-decoration: none;
        overflow: hidden;
        background: transparent;
    }

    .glass-item:hover {
        background: rgba(16, 185, 129, 0.1);
        color: var(--color-primary);
        transform: translateX(5px);
    }

    .item-glow {
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.2), transparent);
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
    }

    .glass-item:hover .item-glow {
        opacity: 1;
    }

    .dropdown-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 36px;
        height: 36px;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05));
        color: var(--color-primary);
        transition: all 0.3s ease;
    }

    .glass-item:hover .dropdown-icon {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        color: white;
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.3);
    }

    /* Mobile Menu Button */
    .bubble-menu-btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        color: #374151;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05),
                    inset 0 1px 0 rgba(255, 255, 255, 0.8);
        cursor: pointer;
    }

    .bubble-menu-btn:hover {
        background: rgba(16, 185, 129, 0.15);
        border-color: rgba(16, 185, 129, 0.3);
        color: var(--color-primary);
        transform: scale(1.1);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
    }

    .bubble-menu-btn:active {
        transform: scale(0.95);
    }

    /* Hide menu button on desktop (lg breakpoint and above) */
    @media (min-width: 1024px) {
        .bubble-menu-btn {
            display: none !important;
        }
    }

    /* Glass Mobile Menu */
    .glass-mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border-top: 1px solid var(--glass-border);
        margin-top: 0.5rem;
        border-radius: 0 0 20px 20px;
        padding: 0;
    }

    .glass-mobile-menu.active {
        max-height: 1200px;
        padding: 1rem 0;
    }

    /* Mobile Bubble Links */
    .bubble-mobile {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1.25rem;
        margin: 0.5rem 1rem;
        font-size: 1rem;
        color: #374151;
        font-weight: 500;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04),
                    inset 0 1px 0 rgba(255, 255, 255, 0.8);
    }

    .bubble-mobile:active {
        background: rgba(16, 185, 129, 0.15);
        border-color: rgba(16, 185, 129, 0.3);
        color: var(--color-primary);
        transform: scale(0.98);
    }

    .mobile-shine {
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(255, 255, 255, 0.6), 
            transparent);
        transition: left 0.6s ease;
        pointer-events: none;
    }

    .bubble-mobile:active .mobile-shine {
        left: 200%;
    }

    /* Mobile Dropdown Button */
    .mobile-dropdown-btn {
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1.25rem;
        margin: 0.5rem 1rem;
        font-size: 1rem;
        color: #374151;
        font-weight: 500;
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04),
                    inset 0 1px 0 rgba(255, 255, 255, 0.8);
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }

    .mobile-dropdown-btn:active {
        background: rgba(16, 185, 129, 0.15);
        border-color: rgba(16, 185, 129, 0.3);
        color: var(--color-primary);
        transform: scale(0.98);
    }

    /* Mobile Submenu */
    .glass-submenu {
        display: none;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        border-radius: 16px;
        margin: 0.5rem 1rem;
        padding: 0.5rem;
        border: 1px solid rgba(16, 185, 129, 0.1);
        overflow: hidden;
        animation: slideDown 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile Sublinks */
    .bubble-sublink {
        position: relative;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 1.25rem;
        font-size: 0.95rem;
        color: #4b5563;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 12px;
        font-weight: 500;
        text-decoration: none;
        overflow: hidden;
        margin: 0.25rem 0;
    }

    .bubble-sublink:active {
        color: var(--color-primary);
        background: rgba(16, 185, 129, 0.15);
        transform: scale(0.98) translateX(5px);
    }

    .bubble-sublink svg {
        min-width: 16px;
        transition: all 0.3s ease;
    }

    .bubble-sublink:active svg {
        color: var(--color-primary);
        transform: scale(1.2) rotate(10deg);
    }

    /* Mobile Primary Button */
    .bubble-primary-mobile {
        position: relative;
        display: block;
        padding: 1rem 1.5rem;
        margin: 1rem;
        font-size: 1rem;
        font-weight: 600;
        color: white;
        text-align: center;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-light) 100%);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 4px 15px rgba(14, 122, 79, 0.25),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
        text-decoration: none;
    }

    .bubble-primary-mobile:active {
        transform: scale(0.98);
        box-shadow: 0 2px 8px rgba(14, 122, 79, 0.3),
                    inset 0 1px 0 rgba(255, 255, 255, 0.3);
    }

    /* Dropdown Arrow Animation */
    .dropdown-arrow {
        transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        color: var(--color-primary);
    }

    .dropdown-arrow.rotate-180 {
        transform: rotate(180deg);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .bubble-btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .glass-item {
            padding: 0.875rem 1rem;
        }
    }

    @media (max-width: 768px) {
        .navbar-glass {
            backdrop-filter: blur(15px) saturate(160%);
        }
    }

    @media (max-width: 640px) {
        .bubble-mobile {
            margin: 0.4rem 0.75rem;
            padding: 0.875rem 1rem;
        }

        .mobile-dropdown-btn {
            margin: 0.4rem 0.75rem;
            padding: 0.875rem 1rem;
        }

        .glass-submenu {
            margin: 0.4rem 0.75rem;
        }

        .bubble-primary-mobile {
            margin: 0.75rem;
        }
    }

    /* Scroll Enhancement */
    @media (prefers-reduced-motion: no-preference) {
        * {
            scroll-behavior: smooth;
        }
    }

    /* Touch Optimization */
    @media (hover: none) {
        .bubble-btn:hover,
        .glass-item:hover,
        .bubble-menu-btn:hover {
            transform: none;
        }
    }
</style>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    // Toggle mobile menu
    btn.addEventListener('click', () => {
        menu.classList.toggle('active');
        
        // Animate menu button
        const icon = btn.querySelector('svg');
        if (menu.classList.contains('active')) {
            icon.style.transform = 'rotate(90deg)';
        } else {
            icon.style.transform = 'rotate(0deg)';
        }
    });

    // Mobile dropdown functionality
    document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const submenu = btn.nextElementSibling;
            const arrow = btn.querySelector('.dropdown-arrow');
            
            // Close other submenus
            document.querySelectorAll('.mobile-submenu').forEach(menu => {
                if (menu !== submenu) {
                    menu.style.display = 'none';
                    menu.previousElementSibling.querySelector('.dropdown-arrow').classList.remove('rotate-180');
                }
            });

            // Toggle current submenu
            if (submenu.style.display === 'block') {
                submenu.style.display = 'none';
                arrow.classList.remove('rotate-180');
            } else {
                submenu.style.display = 'block';
                arrow.classList.add('rotate-180');
            }
        });
    });

    // Close mobile menu when link is clicked
    document.querySelectorAll('.mobile-link, .mobile-sublink, .mobile-link-primary, .bubble-mobile, .bubble-sublink, .bubble-primary-mobile').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('active');
            const icon = btn.querySelector('svg');
            icon.style.transform = 'rotate(0deg)';
        });
    });

    // Add scroll effect to navbar
    let lastScroll = 0;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.style.boxShadow = '0 12px 48px rgba(14, 122, 79, 0.15), 0 0 1px rgba(14, 122, 79, 0.2)';
        } else {
            navbar.style.boxShadow = '0 8px 32px rgba(14, 122, 79, 0.08), 0 0 1px rgba(14, 122, 79, 0.1)';
        }
        
        lastScroll = currentScroll;
    });
</script>

</body>
</html>

<script>
    function toggleDropdown() {
        document.getElementById('avatarDropdown').classList.toggle('hidden');
    }

    // klik di luar → nutup dropdown
    document.addEventListener('click', function (e) {
        const dropdown = document.getElementById('avatarDropdown');
        if (!e.target.closest('.relative')) {
            dropdown.classList.add('hidden');
        }
    });
</script>
s