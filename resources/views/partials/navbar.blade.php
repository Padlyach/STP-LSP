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
                <li class="relative profile-dropdown-wrapper">
                    <button
                        type="button"
                        onclick="toggleDropdown()"
                        class="profile-avatar-btn focus:outline-none"
                    >
                        <div class="avatar-wrapper">
                            @if(Auth::user()->avatar)
                                <img
                                    src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                    class="avatar-image"
                                    alt="Avatar"
                                >
                            @else
                                <div class="avatar-default">
                                    <svg class="avatar-icon" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                    </svg>
                                </div>
                            @endif
                            <div class="avatar-ring"></div>
                            <div class="avatar-status"></div>
                        </div>
                    </button>

                    <div
                        id="avatarDropdown"
                        class="profile-dropdown hidden"
                    >
                        <div class="profile-dropdown-header">
                            <div class="profile-info">
                                @if(Auth::user()->avatar)
                                    <img
                                        src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                        class="profile-avatar-small"
                                        alt="Avatar"
                                    >
                                @else
                                    <div class="profile-avatar-small-default">
                                        <svg class="profile-avatar-icon" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                @endif
                                <div class="profile-details">
                                    <div class="profile-name">{{ Auth::user()->name ?? 'User' }}</div>
                                    <div class="profile-email">{{ Auth::user()->email ?? '' }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-dropdown-divider"></div>

                        <a
                            href="{{ route('profile.edit') }}"
                            class="profile-dropdown-item"
                        >
                            <svg class="profile-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span>Edit Profile</span>
                            <svg class="profile-item-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <div class="profile-dropdown-divider"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button
                                type="submit"
                                class="profile-dropdown-item profile-dropdown-logout"
                            >
                                <svg class="profile-item-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </li>
                @endauth
            </ul>

            <button id="mobile-menu-btn" class="bubble-menu-btn lg:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="mobile-menu lg:hidden glass-mobile-menu">
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
            <!-- Mobile Profile Section -->
            <div class="mobile-profile-section">
                <div class="mobile-profile-header">
                    @if(Auth::user()->avatar)
                        <img
                            src="{{ asset('storage/' . Auth::user()->avatar) }}"
                            class="mobile-profile-avatar"
                            alt="Avatar"
                        >
                    @else
                        <div class="mobile-profile-avatar-default">
                            <svg class="mobile-avatar-icon" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                    @endif
                    <div class="mobile-profile-info">
                        <div class="mobile-profile-name">{{ Auth::user()->name ?? 'User' }}</div>
                        <div class="mobile-profile-email">{{ Auth::user()->email ?? '' }}</div>
                    </div>
                </div>
                
                <a href="{{ route('profile.edit') }}" class="mobile-profile-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span>Edit Profile</span>
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="mobile-profile-logout">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                        </svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
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

    /* Profile Avatar Button - Desktop */
    .profile-avatar-btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .avatar-wrapper {
        position: relative;
        width: 44px;
        height: 44px;
    }

    .avatar-image {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.15),
                    inset 0 1px 0 rgba(255, 255, 255, 0.5);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Default Avatar Icon - Desktop */
    .avatar-default {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #E5E7EB 0%, #D1D5DB 100%);
        border: 2px solid rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.15),
                    inset 0 1px 0 rgba(255, 255, 255, 0.5);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .avatar-icon {
        width: 26px;
        height: 26px;
        color: #9CA3AF;
        transition: all 0.3s ease;
    }

    .profile-avatar-btn:hover .avatar-default {
        transform: scale(1.1);
        background: linear-gradient(135deg, #D1D5DB 0%, #9CA3AF 100%);
        border-color: var(--color-primary-light);
        box-shadow: 0 6px 20px rgba(14, 122, 79, 0.3);
    }

    .profile-avatar-btn:hover .avatar-icon {
        color: #6B7280;
        transform: scale(1.1);
    }

    .avatar-ring {
        position: absolute;
        inset: -3px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        opacity: 0;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: -1;
    }

    .avatar-status {
        position: absolute;
        bottom: 2px;
        right: 2px;
        width: 12px;
        height: 12px;
        background: linear-gradient(135deg, #10B981, #059669);
        border: 2px solid white;
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(16, 185, 129, 0.4);
        transition: all 0.3s ease;
    }

    .profile-avatar-btn:hover .avatar-image {
        transform: scale(1.1);
        border-color: var(--color-primary-light);
        box-shadow: 0 6px 20px rgba(14, 122, 79, 0.3);
    }

    .profile-avatar-btn:hover .avatar-ring {
        opacity: 1;
        inset: -5px;
    }

    .profile-avatar-btn:hover .avatar-status {
        transform: scale(1.2);
        box-shadow: 0 3px 10px rgba(16, 185, 129, 0.6);
    }

    .profile-avatar-btn:active .avatar-image {
        transform: scale(1.05);
    }

    /* Profile Dropdown - Desktop */
    .profile-dropdown {
        position: absolute;
        right: 0;
        margin-top: 0.75rem;
        width: 280px;
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(20px) saturate(180%);
        -webkit-backdrop-filter: blur(20px) saturate(180%);
        border-radius: 20px;
        border: 1px solid var(--glass-border);
        box-shadow: 0 20px 60px rgba(14, 122, 79, 0.2),
                    0 0 1px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        opacity: 0;
        transform: translateY(-10px) scale(0.95);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
        z-index: 60;
    }

    .profile-dropdown:not(.hidden) {
        opacity: 1;
        transform: translateY(0) scale(1);
        pointer-events: all;
    }

    .profile-dropdown-header {
        padding: 1.25rem;
        background: linear-gradient(135deg, rgba(16, 185, 129, 0.08), rgba(14, 122, 79, 0.05));
        border-bottom: 1px solid rgba(16, 185, 129, 0.1);
    }

    .profile-info {
        display: flex;
        align-items: center;
        gap: 0.875rem;
    }

    .profile-avatar-small {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid white;
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
    }

    /* Default Avatar Small - Dropdown */
    .profile-avatar-small-default {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #E5E7EB 0%, #D1D5DB 100%);
        border: 2px solid white;
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
    }

    .profile-avatar-icon {
        width: 28px;
        height: 28px;
        color: #9CA3AF;
    }

    .profile-details {
        flex: 1;
        min-width: 0;
    }

    .profile-name {
        font-size: 0.95rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.125rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .profile-email {
        font-size: 0.8rem;
        color: #6b7280;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .profile-dropdown-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.2), transparent);
        margin: 0.5rem 0;
    }

    .profile-dropdown-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 1.25rem;
        font-size: 0.9rem;
        color: #4b5563;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
        cursor: pointer;
        background: transparent;
        border: none;
        width: 100%;
        text-align: left;
        font-family: 'Poppins', sans-serif;
    }

    .profile-dropdown-item:hover {
        background: rgba(16, 185, 129, 0.08);
        color: var(--color-primary);
        padding-left: 1.5rem;
    }

    .profile-item-icon {
        width: 20px;
        height: 20px;
        color: var(--color-primary);
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .profile-dropdown-item:hover .profile-item-icon {
        transform: scale(1.15);
    }

    .profile-item-arrow {
        width: 16px;
        height: 16px;
        color: #9ca3af;
        margin-left: auto;
        opacity: 0;
        transform: translateX(-5px);
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .profile-dropdown-item:hover .profile-item-arrow {
        opacity: 1;
        transform: translateX(0);
        color: var(--color-primary);
    }

    .profile-dropdown-logout {
        color: #dc2626;
    }

    .profile-dropdown-logout:hover {
        background: rgba(220, 38, 38, 0.08);
        color: #dc2626;
    }

    .profile-dropdown-logout .profile-item-icon {
        color: #dc2626;
    }

    .profile-dropdown-logout:hover .profile-item-arrow {
        color: #dc2626;
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
        max-height: 1500px;
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

    /* Mobile Profile Section */
    .mobile-profile-section {
        margin: 1rem;
        padding: 1.25rem;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(15px);
        border-radius: 20px;
        border: 1px solid rgba(16, 185, 129, 0.2);
        box-shadow: 0 4px 15px rgba(14, 122, 79, 0.1);
    }

    .mobile-profile-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(16, 185, 129, 0.15);
        margin-bottom: 0.75rem;
    }

    .mobile-profile-avatar {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid white;
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
    }

    /* Mobile Default Avatar */
    .mobile-profile-avatar-default {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #E5E7EB 0%, #D1D5DB 100%);
        border: 3px solid white;
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
        flex-shrink: 0;
    }

    .mobile-avatar-icon {
        width: 30px;
        height: 30px;
        color: #9CA3AF;
    }

    .mobile-profile-info {
        flex: 1;
        min-width: 0;
    }

    .mobile-profile-name {
        font-size: 1.05rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 0.125rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .mobile-profile-email {
        font-size: 0.85rem;
        color: #6b7280;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .mobile-profile-link {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 0.875rem 1rem;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
        font-weight: 500;
        color: #4b5563;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 14px;
        border: 1px solid rgba(16, 185, 129, 0.15);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .mobile-profile-link:active {
        background: rgba(16, 185, 129, 0.15);
        color: var(--color-primary);
        transform: scale(0.98);
    }

    .mobile-profile-logout {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 0.875rem 1rem;
        width: 100%;
        font-size: 0.95rem;
        font-weight: 500;
        color: #dc2626;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 14px;
        border: 1px solid rgba(220, 38, 38, 0.2);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
    }

    .mobile-profile-logout:active {
        background: rgba(220, 38, 38, 0.1);
        transform: scale(0.98);
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

        .mobile-profile-section {
            margin: 0.75rem;
        }
    }

    /* Hide menu button on desktop */
    @media (min-width: 1024px) {
        .bubble-menu-btn {
            display: none !important;
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

    // Desktop profile dropdown toggle
    function toggleDropdown() {
        const dropdown = document.getElementById('avatarDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Click outside to close dropdown
    document.addEventListener('click', function (e) {
        const dropdown = document.getElementById('avatarDropdown');
        const profileWrapper = document.querySelector('.profile-dropdown-wrapper');
        
        if (profileWrapper && !profileWrapper.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>

</body>
</html>