<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta - LSP STP Bogor</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0E7A4F',
                        'primary-light': '#10B981',
                        'primary-dark': '#065F46',
                        'soft-green': '#D1FAE5',
                        'soft-gray': '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-soft-green min-h-screen">

    @include('partials.navbaradmin')

    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- CARD -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-xl p-8">

            <!-- Header -->
            <div class="mb-10 pb-4 border-b border-gray-200">
                <h1 class="text-3xl font-extrabold text-primary-dark">Edit Data Peserta</h1>
                <p class="text-gray-500 mt-1 text-sm">
                    Perbarui informasi peserta pendaftaran LSP STP Bogor.
                </p>
            </div>

            <!-- FORM -->
            <form action="{{ route('admin.pendaftaranlsp.update', $data->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <!-- NAMA -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" value="{{ old('nama', $data->nama) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                </div>

                <!-- EMAIL & TELEPON -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email', $data->email) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-1">Telepon</label>
                        <input type="text" name="telepon" value="{{ old('telepon', $data->telepon) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                    </div>
                </div>

                <!-- SEKOLAH -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" value="{{ old('sekolah_asal', $data->sekolah_asal) }}"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                </div>

                <!-- KOMPETENSI -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Kompetensi</label>
                    <select name="kompetensi"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">

                        <option value="" disabled>Pilih kompetensi</option>

                        <option value="Waiter/Waitress" {{ old('kompetensi', $data->kompetensi) == 'Waiter/Waitress' ? 'selected' : '' }}>
                            Waiter / Waitress
                        </option>

                        <option value="Receptionist" {{ old('kompetensi', $data->kompetensi) == 'Receptionist' ? 'selected' : '' }}>
                            Receptionist
                        </option>

                        <option value="Housekeeping" {{ old('kompetensi', $data->kompetensi) == 'Housekeeping' ? 'selected' : '' }}>
                            Housekeeping
                        </option>

                        <option value="Kitchen" {{ old('kompetensi', $data->kompetensi) == 'Kitchen' ? 'selected' : '' }}>
                            Kitchen
                        </option>

                    </select>
                </div>

                <!-- TEMPAT & TANGGAL LAHIR -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $data->tempat_lahir) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-1">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">
                    </div>
                </div>

                <!-- JENIS KELAMIN -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-1">Jenis Kelamin</label>
                    <select name="jenis_kelamin"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm bg-white focus:ring-2 focus:ring-primary-light focus:border-primary outline-none transition">

                        <option value="" disabled>Pilih jenis kelamin</option>

                        <option value="Laki-laki" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan" {{ old('jenis_kelamin', $data->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <!-- BUTTON -->
                <div class="flex justify-between items-center pt-6">
                    <a href="{{ route('admin.pendaftaranlsp.index') }}"
                        class="px-6 py-2.5 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition shadow-sm">
                        Kembali
                    </a>

                    <button type="submit"
                        class="px-10 py-3 bg-gradient-to-r from-primary to-primary-light hover:opacity-90 text-white font-semibold rounded-xl shadow-lg hover:shadow-primary/40 transition transform hover:-translate-y-1">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>

    </main>

</body>
</html>
