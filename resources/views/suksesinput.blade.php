<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses Input</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/suksesinput.css') }}">
</head>

<body>
    <div class="hero-bg">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
        <div class="grid-bg"></div>
    </div>

    <div class="relative min-h-screen flex items-center justify-center px-4 py-8 md:py-0">
        <div class="text-center z-10 max-w-lg mx-auto w-full">
            <!-- Checkmark Animation -->
            <div class="checkmark-container animate-slide-up" style="animation-delay: 0s;">
                <div class="checkmark-circle">
                    <svg class="checkmark-icon" viewBox="0 0 52 52">
                        <path d="M14 27l8 8 16-16" />
                    </svg>
                </div>
            </div>

            <!-- Success Message -->
            <div class="animate-slide-up" style="animation-delay: 0.1s;">
                <h1 class="text-5xl md:text-6xl font-black text-white mb-4 leading-tight tracking-tight">
                    Selamat!
                </h1>
                <p class="text-xl md:text-2xl text-white font-500 mb-2">
                    Data Anda telah berhasil disimpan
                </p>
                <p class="text-base md:text-lg text-emerald-100 font-light mb-8">
                    Terima kasih telah mengirimkan informasi. Kami akan segera memproses data Anda.
                </p>
            </div>

            <!-- Info Card -->
            <div class="animate-slide-up mb-8" style="animation-delay: 0.2s;">
                <div class="info-card">
                    <svg class="w-12 h-12 mx-auto mb-4 text-emerald-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-white/90 text-sm md:text-base font-light">
                        Data Anda aman dan telah tersimpan di sistem kami. Anda dapat memeriksa status kapan saja melalui dashboard.
                    </p>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8 animate-slide-up" style="animation-delay: 0.3s;">
                <button onclick="window.location.href='{{ route('beranda') }}'" class="btn-primary px-8 py-3 rounded-full text-base flex-1 sm:flex-none">
                    ← Kembali ke Beranda
                </button>
                <button onclick="window.location.href='javascript:history.back()'" class="btn-secondary px-8 py-3 rounded-full text-base flex-1 sm:flex-none">
                    Kembali Sebelumnya
                </button>
            </div>

            <!-- Status Indicator -->
            <div class="animate-slide-up" style="animation-delay: 0.4s;">
                <div class="status-badge">
                    <span class="status-dot"></span>
                    <span class="text-white/80 text-sm font-medium">Status: Berhasil Disimpan</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>