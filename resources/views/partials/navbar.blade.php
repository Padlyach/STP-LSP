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

<nav id="navbar" class="nav-sticky navbar-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-3 lg:py-4">

            <div class="flex items-center space-x-2 lg:space-x-3 group">
<a href="{{ route('beranda') }}" class="block">
<img src="{{ asset('image/logostp.webp') }}"
alt="Logo LSP"
class=" object-contain transition-transform duration-300 group-hover:scale-110">
</a>
</div>

            <ul class="hidden lg:flex items-center space-x-1 text-sm font-medium">

                <li>
                    <a href="{{ route('beranda') }}" class="nav-link">
                       Beranda
                    </a>
                </li>

                <li class="dropdown relative group">
                    <a class="nav-link flex items-center cursor-pointer">
                        Profil
                        <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180" 
                             fill="none" stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                    <div class="dropdown-menu absolute left-0 mt-0 w-56 bg-white rounded-lg shadow-2xl border border-gray-100 py-2">
                        <a href="{{ route('profil.tentang') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Tentang</div>
                                <div class="text-xs text-gray-500">Profil Perusahaan</div>
                            </div>
                        </a>
                        <a href="{{ route('profil.visi') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Visi & Misi</div>
                                <div class="text-xs text-gray-500">Tujuan Organisasi</div>
                            </div>
                        </a>
                        <a href="{{ route('profil.dasarhukum') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Dasar Hukum</div>
                                <div class="text-xs text-gray-500">Landasan Operasional</div>
                            </div>
                        </a>
                        <a href="{{ route('profil.ruanglingkup') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Ruang Lingkup</div>
                                <div class="text-xs text-gray-500">Cakupan Layanan</div>
                            </div>
                        </a>
                    </div>
                </li>

                <li class="dropdown relative group">
                    <a class="nav-link flex items-center cursor-pointer">
                        Sertifikasi
                        <svg class="w-4 h-4 ml-1 transition-transform duration-300 group-hover:rotate-180" 
                             fill="none" stroke="currentColor" 
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>

                    <div class="dropdown-menu absolute left-0 mt-0 w-56 bg-white rounded-lg shadow-2xl border border-gray-100 py-2">
                        <a href="{{ route('sertifikasi.pemegangsertifikat') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Pemegang Sertifikat</div>
                                <div class="text-xs text-gray-500">Data Tersertifikasi</div>
                            </div>
                        </a>
                        <a href="{{ route('sertifikasi.asesor') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Asesor Kompetensi</div>
                                <div class="text-xs text-gray-500">Tim Penguji</div>
                            </div>
                        </a>
                        <a href="{{ route('sertifikasi.jadwaluji') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Jadwal Uji Kompetensi</div>
                                <div class="text-xs text-gray-500">Agenda Pengujian</div>
                            </div>
                        </a>
                        <a href="{{ route('sertifikasi.tempatuji') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Tempat Uji Kompetensi</div>
                                <div class="text-xs text-gray-500">Lokasi Pengujian</div>
                            </div>
                        </a>
                        <a href="{{ route('sertifikat.berita') }}" class="dropdown-item">
                            <span class="dropdown-icon text-primary">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 4v4h4"/></svg>
                            </span>
                            <div>
                                <div class="font-semibold text-gray-900">Berita Pendaftaran Sertifikat</div>
                                <div class="text-xs text-gray-500">Informasi Terbaru Pendaftar</div>
                            </div>
                        </a>
                    </div>
                </li>

                <li><a href="{{ route('galeri') }}" class="nav-link">Galeri</a></li>
                <li><a href="{{ route('kontak') }}" class="nav-link">Kontak</a></li>
                <li><a href="{{ route('pendaftaran') }}" class="nav-link-primary">Pendaftaran</a></li>
             {{-- Jika BELUM login --}}
@guest
<li>
    <a href="{{ route('login') }}" class="nav-link-primary">
        Login
    </a>
</li>
@endguest

{{-- Jika SUDAH login --}}
@auth
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <li>
        <a href="{{ route('logout') }}"
           class="nav-link-primary"
           onclick="event.preventDefault(); this.closest('form').submit();">
            Logout
        </a>
    </li>
</form>
@endauth
            </ul>

            <div class="hidden lg:flex items-center space-x-3">

                <a href="#" class="social-icon" title="Facebook">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.676 0H1.326C.595 0 0 .6 0 1.333v21.333C0 23.4.595 24 1.326 24H12.82v-9.333H9.692v-3.64h3.128V8.41c0-3.1 1.893-4.788 4.66-4.788 1.325 0 2.464.1 2.796.145v3.24l-1.92.001c-1.504 0-1.795.726-1.795 1.77v2.318h3.587l-.467 3.64h-3.12V24h6.118C23.405 24 24 23.4 24 22.667V1.333C24 .6 23.405 0 22.676 0z" />
                    </svg>
                </a>

                <a href="#" class="social-icon" title="Instagram">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.428.403a4.92 4.92 0 0 1 1.77 1.153 4.92 4.92 0 0 1 1.153 1.77c.163.457.347 1.257.403 2.428.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.403 2.428a4.92 4.92 0 0 1-1.153 1.77 4.92 4.92 0 0 1-1.77 1.153c-.457.163-1.257.347-2.428.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.428-.403a4.92 4.92 0 0 1-1.77-1.153 4.92 4.92 0 0 1-1.153-1.77c-.163-.457-.347-1.257-.403-2.428C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.428a4.92 4.92 0 0 1 1.153-1.77A4.92 4.92 0 0 1 5.559.566c.457-.163 1.257-.347 2.428-.403C9.253 2.174 9.633 2.163 12 2.163z" />
                    </svg>
                </a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden text-gray-700 hover:text-primary transition-colors duration-300 p-2 hover:bg-gray-100 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="mobile-menu lg:hidden bg-white border-t border-gray-100">

            <a href="{{ route('beranda') }}" class="mobile-link">Beranda</a>

            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn">
                    Profil
                    <svg class="dropdown-arrow w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="mobile-submenu">
                    <a href="{{ route('profil.tentang') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        Tentang
                    </a>
                    <a href="{{ route('profil.visi') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Visi & Misi
                    </a>
                    <a href="{{ route('profil.dasarhukum') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                        Dasar Hukum
                    </a>
                    <a href="{{ route('profil.ruanglingkup') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        Ruang Lingkup
                    </a>
                </div>
            </div>

            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn">
                    Sertifikasi
                    <svg class="dropdown-arrow w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <div class="mobile-submenu">
                    <a href="{{ route('sertifikasi.pemegangsertifikat') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Pemegang Sertifikat
                    </a>
                    <a href="{{ route('sertifikasi.asesor') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        Asesor Kompetensi
                    </a>
                    <a href="{{ route('sertifikasi.jadwaluji') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Jadwal Uji Kompetensi
                    </a>
                    <a href="{{ route('sertifikasi.tempatuji') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        Tempat Uji Kompetensi
                    </a>
                    <a href="{{ route('sertifikat.berita') }}" class="mobile-sublink flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 4v4h4"/></svg>
                        Berita Pendaftaran Sertifikat
                    </a>
                </div>
          
            </div>

            <a href="{{ route('galeri') }}" class="mobile-link">Galeri</a>
            <a href="{{ route('kontak') }}" class="mobile-link">Kontak</a>
            <a href="{{ route('pendaftaran') }}" class="mobile-link-primary">Pendaftaran</a>
               <form method="POST" action="{{ route('logout') }}">
    @csrf
    <li>
        {{-- Menggunakan tag <a> dengan class styling --}}
        {{-- Atribut href bisa diisi '#' atau diisi route('logout') --}}
        <a href="{{ route('logout') }}" 
           class="mobile-link-primary" 
           onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </li>
</form>
             
            
                        <div class="border-t border-gray-100 pt-4 pb-2 px-4 mt-4">
                <p class="text-xs font-semibold text-gray-600 mb-3">Follow Us</p>
                <div class="flex space-x-3">
                    <a href="#" class="social-icon-mobile" title="Twitter">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 0 1-2.825.775 4.958 4.958 0 0 0 2.163-2.723 9.864 9.864 0 0 1-3.127 1.184A4.92 4.92 0 0 0 16.616 3c-2.717 0-4.917 2.28-4.917 5.086 0 .4.045.79.13 1.16C7.728 8.98 4.1 7.1 1.67 4.15a5.14 5.14 0 0 0-.666 2.56c0 1.78.87 3.35 2.19 4.27a4.903 4.903 0 0 1-2.23-.63v.06c0 2.48 1.73 4.55 4.03 5.03a4.996 4.996 0 0 1-2.224.086c.63 2.01 2.445 3.48 4.6 3.52A9.874 9.874 0 0 1 0 19.54 13.94 13.94 0 0 0 7.548 22c9.057 0 14.01-7.72 14.01-14.41 0-.22 0-.42-.016-.63A10.17 10.17 0 0 0 24 4.59z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon-mobile" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.676 0H1.326C.595 0 0 .6 0 1.333v21.333C0 23.4.595 24 1.326 24H12.82v-9.333H9.692v-3.64h3.128V8.41c0-3.1 1.893-4.788 4.66-4.788 1.325 0 2.464.1 2.796.145v3.24l-1.92.001c-1.504 0-1.795.726-1.795 1.77v2.318h3.587l-.467 3.64h-3.12V24h6.118C23.405 24 24 23.4 24 22.667V1.333C24 .6 23.405 0 22.676 0z" />
                        </svg>
                    </a>
                    <a href="#" class="social-icon-mobile" title="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.17.056 1.97.24 2.428.403a4.92 4.92 0 0 1 1.77 1.153 4.92 4.92 0 0 1 1.153 1.77c.163.457.347 1.257.403 2.428.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.056 1.17-.24 1.97-.403 2.428a4.92 4.92 0 0 1-1.153 1.77 4.92 4.92 0 0 1-1.77 1.153c-.457.163-1.257.347-2.428.403-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.17-.056-1.97-.24-2.428-.403a4.92 4.92 0 0 1-1.77-1.153 4.92 4.92 0 0 1-1.153-1.77c-.163-.457-.347-1.257-.403-2.428C2.175 15.584 2.163 15.204 2.163 12s.012-3.584.07-4.85c.056-1.17.24-1.97.403-2.428a4.92 4.92 0 0 1 1.153-1.77A4.92 4.92 0 0 1 5.559.566c.457-.163 1.257-.347 2.428-.403C9.253 2.174 9.633 2.163 12 2.163z" />
                        </svg>
                    </a>
                </div>
            </div>
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
    }

    .nav-sticky {
        position: sticky;
        top: 0;
        z-index: 50;
        background: white;
        box-shadow: 0 2px 20px rgba(14, 122, 79, 0.08);
        transition: box-shadow 0.3s ease;
    }

    .nav-sticky:hover {
        box-shadow: 0 4px 30px rgba(14, 122, 79, 0.12);
    }

    /* Desktop Navigation Links */
    .nav-link {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1rem;
        font-size: 0.95rem;
        color: #4B5563;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        border-radius: 0.5rem;
        text-decoration: none;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--color-primary), var(--color-primary-light));
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateX(-50%);
    }

    .nav-link:hover {
        color: var(--color-primary);
        background: rgba(16, 185, 129, 0.08);
    }

    .nav-link:hover::after {
        width: 80%;
    }

    .nav-link-primary {
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        color: white;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.3);
        display: inline-flex;
        align-items: center;
        border: none;
        cursor: pointer;
        text-decoration: none;
    }

    .nav-link-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(14, 122, 79, 0.4);
        background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
    }

    .nav-link-primary:active {
        transform: translateY(0);
    }

    /* Dropdown Menus */
    .dropdown-menu {
        max-height: 0;
        overflow: hidden;
        opacity: 0;
        transition: max-height 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease-out, transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(-10px);
    }

    .dropdown:hover .dropdown-menu {
        max-height: 600px;
        opacity: 1;
        transform: translateY(0);
    }

    .dropdown-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.875rem 1.25rem;
        font-size: 0.875rem;
        color: #4b5563;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        border-left: 3px solid transparent;
        text-decoration: none;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, var(--color-primary-light), var(--color-primary));
        transform: scaleY(0);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: top;
    }

    .dropdown-item:hover {
        background: linear-gradient(90deg, rgba(16, 185, 129, 0.08), transparent);
        color: var(--color-primary);
        padding-left: 1.5rem;
    }

    .dropdown-item:hover::before {
        transform: scaleY(1);
    }

    .dropdown-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 30px;
        color: var(--color-primary);
    }

    .text-primary {
        color: var(--color-primary);
    }

    /* Social Icons */
    .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(16, 185, 129, 0.1);
        color: var(--color-primary);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .social-icon:hover {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        color: white;
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 6px 16px rgba(14, 122, 79, 0.3);
    }

    /* Mobile Menu */
    .mobile-menu {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.98), rgba(209, 250, 229, 0.1));
    }

    .mobile-menu.active {
        max-height: 1000px;
    }

    .mobile-link {
        display: block;
        padding: 1rem 1rem;
        font-size: 1rem;
        color: #4B5563;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 0.5rem;
        margin: 0.25rem 0.5rem;
        position: relative;
        text-decoration: none;
    }

    .mobile-link::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 3px;
        height: 0;
        background: linear-gradient(180deg, var(--color-primary-light), var(--color-primary));
        border-radius: 3px;
        transition: height 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(-50%);
    }

    .mobile-link:hover {
        background: rgba(16, 185, 129, 0.1);
        color: var(--color-primary);
        padding-left: 1.5rem;
    }

    .mobile-link:hover::before {
        height: 70%;
    }

    .mobile-link-primary {
        display: block;
        padding: 1rem 1rem;
        font-size: 1rem;
        font-weight: 600;
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        color: white;
        border-radius: 0.75rem;
        margin: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 12px rgba(14, 122, 79, 0.2);
        text-align: center;
        text-decoration: none;
    }

    .mobile-link-primary:active {
        transform: scale(0.98);
    }

    .mobile-dropdown {
        margin: 0.5rem 0;
    }

    .mobile-dropdown-btn {
        width: 100%;
        padding: 1rem;
        text-align: left;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #4B5563;
        font-weight: 500;
        background: rgba(16, 185, 129, 0.05);
        border: none;
        cursor: pointer;
        border-radius: 0.5rem;
        margin: 0.25rem 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
    }

    .mobile-dropdown-btn:active {
        background: rgba(16, 185, 129, 0.15);
        color: var(--color-primary);
    }

    .mobile-submenu {
        display: none;
        background: linear-gradient(135deg, rgba(209, 250, 229, 0.2), rgba(209, 250, 229, 0.1));
        border-radius: 0.5rem;
        margin: 0.5rem;
        overflow: hidden;
        animation: slideDown 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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

    .mobile-sublink {
        display: flex;
        align-items: center;
        padding: 0.875rem 1.5rem;
        font-size: 0.95rem;
        color: #4b5563;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        border-left: 3px solid transparent;
        font-weight: 500;
        text-decoration: none;
    }

    .mobile-sublink::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(180deg, var(--color-primary-light), var(--color-primary));
        transform: scaleY(0);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: top;
    }

    .mobile-sublink:hover {
        color: var(--color-primary);
        background: rgba(16, 185, 129, 0.1);
        padding-left: 2rem;
    }

    .mobile-sublink:hover::before {
        transform: scaleY(1);
    }

    .dropdown-arrow {
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        color: var(--color-primary);
    }

    .dropdown-arrow.rotate-180 {
        transform: rotate(180deg);
    }

    .social-icon-mobile {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 0.75rem;
        background: rgba(16, 185, 129, 0.1);
        color: var(--color-primary);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .social-icon-mobile:active {
        background: linear-gradient(135deg, var(--color-primary), var(--color-primary-light));
        color: white;
        transform: scale(0.95);
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .nav-link {
            padding: 0.4rem 0.75rem;
            font-size: 0.9rem;
        }

        .dropdown-item {
            padding: 0.75rem 1rem;
        }
    }

    @media (max-width: 768px) {
        .nav-link {
            padding: 0.4rem 0.6rem;
            font-size: 0.85rem;
        }

        .dropdown-item {
            padding: 0.7rem 0.9rem;
            font-size: 0.8rem;
        }

        .dropdown-icon {
            font-size: 1rem;
        }
    }

    @media (max-width: 640px) {
        .mobile-link {
            padding: 0.875rem 0.75rem;
            font-size: 0.95rem;
            margin: 0.2rem 0.4rem;
        }

        .mobile-dropdown-btn {
            padding: 0.875rem 0.75rem;
            margin: 0.2rem 0.4rem;
            font-size: 0.95rem;
        }

        .mobile-sublink {
            padding: 0.75rem 1.25rem;
            font-size: 0.9rem;
        }

        .mobile-sublink:hover {
            padding-left: 1.75rem;
        }
    }
</style>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    // Toggle mobile menu
    btn.addEventListener('click', () => {
        menu.classList.toggle('active');
        btn.classList.toggle('bg-gray-100');
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
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            arrow.classList.toggle('rotate-180');
        });
    });

    // Close mobile menu when link is clicked
    document.querySelectorAll('.mobile-link, .mobile-sublink, .mobile-link-primary').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('active');
            btn.classList.remove('bg-gray-100');
        });
    });
</script>

</body>
</html>