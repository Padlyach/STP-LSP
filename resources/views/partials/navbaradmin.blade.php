<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Admin - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<nav id="navbar" class="nav-sticky navbar-glass">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4 lg:py-5">

            <!-- LOGO -->
            <div class="flex items-center space-x-3 group">
                <a href="{{ route('beranda') }}" class="block logo-container">
                    <img src="{{ asset('image/logostp.webp') }}"
                         alt="Logo LSP"
                         class="h-12 lg:h-14 w-auto object-contain transition-all duration-500 group-hover:scale-110 group-hover:drop-shadow-2xl">
                    <div class="logo-glow"></div>
                </a>
            </div>

            <!-- DESKTOP MENU -->
            <ul class="hidden lg:flex items-center space-x-2 text-sm font-medium">

                @auth
                    @if(Auth::user()->isAdmin())
                        <li>
                            <a href="{{ route('admin.pendaftaranlsp.index') }}" class="nav-link bubble-btn">
                                <span class="nav-link-text">List Pendaftaran</span>
                                <div class="bubble-shine"></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pendaftaransertifikat.create') }}" class="nav-link bubble-btn">
                                <span class="nav-link-text">Form Sertifikat</span>
                                <div class="bubble-shine"></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pendaftaransertifikat.index') }}" class="nav-link bubble-btn">
                                <span class="nav-link-text">List Sertifikat</span>
                                <div class="bubble-shine"></div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.index') }}" class="nav-link bubble-btn">
                                <span class="nav-link-text">List User</span>
                                <div class="bubble-shine"></div>
                            </a>
                        </li>
                    @endif
                @endauth

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li>
                            <a href="{{ route('logout') }}"
                               class="nav-link-primary bubble-primary"
                               onclick="event.preventDefault(); this.closest('form').submit();">
                                <span class="relative z-10">Log Out</span>
                                <div class="bubble-shine-primary"></div>
                            </a>
                        </li>
                    </form>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="nav-link bubble-btn">
                            <span class="nav-link-text">Login</span>
                            <div class="bubble-shine"></div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="nav-link-primary bubble-primary">
                            <span class="relative z-10">Daftar</span>
                            <div class="bubble-shine-primary"></div>
                        </a>
                    </li>
                @endguest

            </ul>

            <!-- MOBILE BUTTON -->
            <button id="mobile-menu-btn" class="bubble-menu-btn lg:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="mobile-menu lg:hidden glass-mobile-menu">

            @auth
                @if(Auth::user()->isAdmin())
                    <a href="{{ route('admin.pendaftaranlsp.index') }}" class="mobile-link bubble-mobile">
                        <span>List Pendaftaran</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('admin.pendaftaransertifikat.create') }}" class="mobile-link bubble-mobile">
                        <span>Form Sertifikat</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('admin.pendaftaransertifikat.index') }}" class="mobile-link bubble-mobile">
                        <span>List Sertifikat</span>
                        <div class="mobile-shine"></div>
                    </a>
                    <a href="{{ route('admin.users.index') }}" class="mobile-link bubble-mobile">
                        <span>List User</span>
                        <div class="mobile-shine"></div>
                    </a>
                @endif
            @endauth

            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}"
                       class="mobile-link-primary bubble-primary-mobile"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        <span class="relative z-10">Log Out</span>
                        <div class="bubble-shine-primary"></div>
                    </a>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="mobile-link bubble-mobile">
                    <span>Login</span>
                    <div class="mobile-shine"></div>
                </a>
                <a href="{{ route('register') }}" class="mobile-link-primary bubble-primary-mobile">
                    <span class="relative z-10">Daftar</span>
                    <div class="bubble-shine-primary"></div>
                </a>
            @endguest

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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .bubble-btn {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
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

    // Close mobile menu when link is clicked
    document.querySelectorAll('.mobile-link, .mobile-link-primary, .bubble-mobile, .bubble-primary-mobile').forEach(link => {
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