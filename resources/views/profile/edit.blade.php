@include('partials.navbar')

<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8" style="background: linear-gradient(135deg, #f0fdf4 0%, #ffffff 50%, #ecfdf5 100%);">
    <div class="max-w-4xl mx-auto">
        
        <!-- Header Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl shadow-lg mb-4" style="background: #0E7A4F;">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Pengaturan Profil</h1>
            <p class="text-gray-600">Kelola informasi pribadi dan keamanan akun Anda</p>
        </div>

        <!-- Main Card with Glassmorphism -->
        <div class="relative">
            <!-- Decorative Background Elements -->
            <div class="absolute -top-4 -left-4 w-24 h-24 rounded-full blur-3xl opacity-30" style="background: #10B981;"></div>
            <div class="absolute -bottom-4 -right-4 w-32 h-32 rounded-full blur-3xl opacity-30" style="background: #0E7A4F;"></div>
            
            <!-- Glass Card -->
            <div class="relative rounded-3xl shadow-2xl overflow-hidden backdrop-blur-xl" style="background: rgba(255, 255, 255, 0.85); border: 1px solid rgba(255, 255, 255, 0.3);">
                
                <!-- Card Header -->
                <div class="px-8 py-6" style="background: #0E7A4F;">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center" style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px);">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-xl font-bold text-white">Edit Profil</h2>
                            <p class="text-white text-sm" style="opacity: 0.9;">Perbarui data diri Anda</p>
                        </div>
                    </div>
                </div>

                <!-- Status Message -->
                @if (session('status') === 'profile-updated')
                    <div class="mx-8 mt-6 p-4 rounded-2xl" style="background: #d1fae5; border: 1px solid #10B981;">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background: #0E7A4F;">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <p class="font-medium" style="color: #065F46;">Profile berhasil diperbarui!</p>
                        </div>
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="p-8 space-y-6">
                    @csrf
                    @method('PATCH')

                    <!-- Avatar Section -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Foto Profil
                        </label>
                        <div class="relative">
                            <input 
                                type="file" 
                                name="avatar" 
                                id="avatar"
                                class="hidden"
                                accept="image/*"
                            >
                            <label 
                                for="avatar"
                                class="flex items-center gap-4 p-4 border-2 border-dashed rounded-2xl cursor-pointer transition-all duration-300 group hover-upload"
                                style="background: #f0fdf4; border-color: #10B981;"
                            >
                                <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-800">Klik untuk unggah foto</p>
                                    <p class="text-xs text-gray-500">PNG, JPG hingga 5MB</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- NIK -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/>
                            </svg>
                            NIK
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                name="nik"
                                value="{{ old('nik', $user->nik) }}"
                                class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 transition-all duration-300 input-glass"
                                placeholder="Masukkan 16 digit NIK"
                                maxlength="16"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                            >
                            <div class="absolute right-4 top-1/2 -translate-y-1/2">
                                <div class="w-2 h-2 rounded-full animate-pulse" style="background: #0E7A4F;"></div>
                            </div>
                        </div>
                        @error('nik')
                            <p class="flex items-center gap-2 text-sm text-red-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Tanggal Lahir
                        </label>
                        <input
                            type="date"
                            name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}"
                            class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 transition-all duration-300 input-glass"
                        >
                        @error('tanggal_lahir')
                            <p class="flex items-center gap-2 text-sm text-red-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Nama Lengkap
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 transition-all duration-300 input-glass"
                            placeholder="Masukkan nama lengkap"
                            required
                        >
                        @error('name')
                            <p class="flex items-center gap-2 text-sm text-red-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Email
                        </label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 transition-all duration-300 input-glass"
                            placeholder="nama@email.com"
                            required
                        >
                        @error('email')
                            <p class="flex items-center gap-2 text-sm text-red-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Divider -->
                    <div class="relative py-4">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="px-4 backdrop-blur-sm text-sm font-medium text-gray-500" style="background: rgba(255, 255, 255, 0.85);">Keamanan</span>
                        </div>
                    </div>

                    <!-- Password Baru -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                            Password Baru
                        </label>
                        <input
                            type="password"
                            name="password"
                            class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 transition-all duration-300 input-glass"
                            placeholder="Masukkan password baru"
                        >
                        @error('password')
                            <p class="flex items-center gap-2 text-sm text-red-600 mt-1">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div class="space-y-3">
                        <label class="flex items-center gap-2 text-sm font-semibold text-gray-800">
                            <svg class="w-5 h-5" style="color: #0E7A4F;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.416a9 9 0 11-12 12.627m4.237-6.205l6.543-6.542a2.5 2.5 0 113.536 3.536l-6.543 6.542"/>
                            </svg>
                            Konfirmasi Password
                        </label>
                        <input
                            type="password"
                            name="password_confirmation"
                            class="w-full px-5 py-4 backdrop-blur-sm border border-gray-200 rounded-2xl text-gray-900 placeholder-gray-400 transition-all duration-300 input-glass"
                            placeholder="Konfirmasi password baru"
                        >
                    </div>

                    <!-- Info Note -->
                    <div class="flex items-start gap-3 p-4 rounded-2xl" style="background: #eff6ff; border: 1px solid #3b82f6;">
                        <svg class="w-5 h-5 text-blue-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                        </svg>
                        <p class="text-sm text-blue-800">
                            Kosongkan kolom password jika tidak ingin mengubah password Anda.
                        </p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6">
                        <button
                            type="button"
                            onclick="window.history.back()"
                            class="flex-1 px-6 py-4 bg-gray-100 text-gray-700 font-semibold rounded-2xl hover:bg-gray-200 transition-all duration-300 flex items-center justify-center gap-2 group"
                        >
                            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Batal
                        </button>
                        <button
                            type="submit"
                            class="flex-1 px-6 py-4 text-white font-semibold rounded-2xl transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2 group btn-primary"
                        >
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Simpan Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Additional Info Card -->
        <div class="mt-6 p-6 backdrop-blur-xl rounded-2xl" style="background: rgba(255, 255, 255, 0.85); border: 1px solid rgba(255, 255, 255, 0.3);">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0" style="background: #0E7A4F;">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Tips Keamanan</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full" style="background: #0E7A4F;"></div>
                            Gunakan password minimal 8 karakter
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full" style="background: #0E7A4F;"></div>
                            Kombinasikan huruf besar, kecil, angka, dan simbol
                        </li>
                        <li class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full" style="background: #0E7A4F;"></div>
                            Jangan gunakan informasi pribadi yang mudah ditebak
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    :root {
        --color-primary: #0E7A4F;
        --color-primary-light: #10B981;
        --color-primary-dark: #065F46;
        --glass-bg: rgba(255, 255, 255, 0.85);
        --glass-border: rgba(255, 255, 255, 0.3);
    }

    /* Glassmorphism Input */
    .input-glass {
        background: var(--glass-bg);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
    }
    
    .input-glass:focus {
        background: rgba(255, 255, 255, 0.95);
        outline: none;
        border-color: var(--color-primary);
        ring: 2px;
        ring-color: var(--color-primary);
        box-shadow: 0 0 0 2px rgba(14, 122, 79, 0.1);
        transform: translateY(-1px);
    }

    .input-glass:hover {
        background: rgba(255, 255, 255, 0.95);
    }

    /* Primary Button */
    .btn-primary {
        background: var(--color-primary);
    }

    .btn-primary:hover {
        background: var(--color-primary-dark);
        transform: translateY(-2px);
    }

    /* Upload Hover */
    .hover-upload:hover {
        background: #d1fae5 !important;
        border-color: var(--color-primary) !important;
    }

    /* Smooth transitions */
    button,
    input,
    label {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Custom file input preview */
    input[type="file"]:focus + label {
        border-color: var(--color-primary);
        background: #d1fae5;
    }

</style>