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

        
        <main class="flex-grow py-12 sm:py-20">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                    
                    <div class="lg:sticky lg:top-8 info-card p-8 sm:p-10 text-white flex flex-col justify-between h-full">
                        <div>
                            <h2 class="text-3xl font-bold mb-4 border-b border-primary-light pb-2">
                                Ingin Menghubungi Kami?
                            </h2>
                            <p class="text-lg font-light mb-8">
                                Ingin menanyakan tentang **penerima**, **silabus**, atau apa pun? Anda dapat datang langsung selama jam kantor, hubungi kami, atau cukup kirimkan formulir di sini.
                            </p>
                            
                            <div class="space-y-6">
                                <div class="flex items-start space-x-4">
                                    <svg class="w-6 h-6 text-primary-light flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 010-5 2.5 2.5 0 010 5z"></path></svg>
                                    <div>
                                        <h3 class="text-xl font-semibold mb-1">Alamat Kantor</h3>
                                        <p class="text-sm opacity-90">
                                            Jl. KH. R. Abdullah Bin Nuh, Jl. Yasmin Raya No. 16A, RT.01/RW04, Curugmekar, Kec. Bogor Barat, Kota Bogor, Jawa Barat 16113
                                        </p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-primary-light flex-shrink-0" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.01 15.38c-1.23 0-2.45-.19-3.6-.57-.55-.17-1.14-.06-1.52.32l-2.09 2.09c-3.11-1.74-5.83-4.46-7.57-7.57l2.09-2.09c.38-.38.49-.97.32-1.52-.38-1.15-.57-2.37-.57-3.6C5.01 3.51 4.5 3 3.84 3H3c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-.84c0-.66-.51-1.17-1.13-1.17z"></path></svg>
                                    <div>
                                        <h3 class="text-xl font-semibold mb-1">Telepon</h3>
                                        <p class="text-sm opacity-90">
                                            **(+62 251) 7534343**
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white form-card p-8 sm:p-10">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">
                            Kirimkan Pesan
                        </h2>
                        
                        <form action="#" method="POST" class="space-y-5">
                            
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" id="full_name" name="full_name" placeholder="Masukkan nama lengkap Anda" required class="input-style w-full">
                            </div>
                            
                            <div>
                                <label for="email_address" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                                <input type="email" id="email_address" name="email_address" placeholder="contoh@domain.com" required class="input-style w-full">
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                                <input type="text" id="subject" name="subject" placeholder="Contoh: Pertanyaan Skema Uji Baru" required class="input-style w-full">
                            </div>
                            
                            <div>
                                <label for="your_message" class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda</label>
                                <textarea id="your_message" name="your_message" rows="5" placeholder="Tuliskan pesan atau pertanyaan Anda secara detail di sini..." required class="input-style w-full"></textarea>
                            </div>
                            
                            <div>
                                <button type="submit" 
                                    class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-bold rounded-lg shadow-md text-white bg-primary hover:bg-primary-dark transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-primary-light focus:ring-offset-2">
                                    Kirimkan Pesan
                                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </main>

    </div>
</body>
</html>