<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - LSP STP Bogor</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            background: #FFFFFF;
            color: #1F2937;
        }

        /* ===================== HERO FULLSCREEN ===================== */

        .hero-container {
            position: relative;
            height: 100vh !important;
            width: 100vw !important;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #0E7A4F 0%, #065F46 50%, #0a5640 100%);
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: #10B981;
            top: -100px;
            right: -50px;
        }

        .shape-2 {
            width: 250px;
            height: 250px;
            background: #34D399;
            bottom: -80px;
            left: 10%;
        }

        .shape-3 {
            width: 200px;
            height: 200px;
            background: #10B981;
            top: 50%;
            right: 5%;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }

        .grid-bg {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, .05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, .05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: radial-gradient(ellipse at bottom right,
                    rgba(16, 185, 129, 0.1) 0%,
                    transparent 70%);
        }

        .hero-content {
            position: relative;
            z-index: 10;
            text-align: center;
            max-width: 900px;
            padding: 20px;
        }

        .hero-title {
            font-size: 4rem;
            color: white;
            font-weight: 900;
        }

        .hero-title-accent {
            background: linear-gradient(135deg, #10B981, #34D399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.2rem;
            margin-top: 15px;
        }

        .btn-primary {
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, #10B981, #059669);
            color: white;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
        }
    </style>

</head>

<body>

  @include('partials.navbaradmin')
    <!-- ============ FULLSCREEN HERO SECTION ============ -->
    <section class="hero-container">
       
        <div class="hero-bg"></div>
        <div class="grid-bg"></div>

        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>

        <div class="overlay"></div>

        <div class="hero-content">
            <h1 class="hero-title">
                Selamat Datang <span class="hero-title-accent">{{ Auth::user()->name }}</span>
            </h1>

            <p class="hero-subtitle">
                Anda berada di Dashboard Admin LSP STP Bogor.<br>
                Kelola seluruh data pendaftaran dan peserta di sini.
            </p>

            <div class="mt-8 flex justify-center">
                <a href="/admin/pendaftaran" class="btn-primary">Kelola Pendaftar</a>
            </div>
        </div>
    </section>



</body>

</html>
