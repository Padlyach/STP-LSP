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

    {{-- NAMA --}}
    <div>
        <label class="block font-semibold mb-1">Nama Lengkap</label>
        <input type="text" name="nama"
            value="{{ old('nama', $data->nama) }}"
            class="w-full px-4 py-3 border rounded-lg">
    </div>

    {{-- EMAIL & TELEPON --}}
    <div class="grid grid-cols-2 gap-6">
        <div>
            <label class="block font-semibold mb-1">Email</label>
            <input type="email" name="email"
                value="{{ old('email', $data->email) }}"
                class="w-full px-4 py-3 border rounded-lg">
        </div>

        <div>
            <label class="block font-semibold mb-1">Telepon</label>
            <input type="text" name="telepon"
                value="{{ old('telepon', $data->telepon) }}"
                class="w-full px-4 py-3 border rounded-lg">
        </div>
    </div>

    {{-- PROGRAM STUDI --}}
    <div>
        <label class="block font-semibold mb-1">Program Studi</label>
        <input type="text" name="program_studi"
            value="{{ old('program_studi', $data->program_studi) }}"
            class="w-full px-4 py-3 border rounded-lg">
    </div>

    {{-- BATCH --}}
    <div>
        <label class="block font-semibold mb-1">Batch</label>
        <input type="text" name="batch"
            value="{{ old('batch', $data->batch) }}"
            class="w-full px-4 py-3 border rounded-lg">
    </div>

    {{-- SKEMA --}}
    <div>
        <label class="block font-semibold mb-1">Skema</label>
        <select name="skema" class="w-full px-4 py-3 border rounded-lg">
            <option value="Receptionist"
                {{ old('skema', $data->skema) == 'Receptionist' ? 'selected' : '' }}>
                Receptionist
            </option>

            <option value="Waiter"
                {{ old('skema', $data->skema) == 'Waiter' ? 'selected' : '' }}>
                Waiter
            </option>

            <option value="Room Attendant"
                {{ old('skema', $data->skema) == 'Room Attendant' ? 'selected' : '' }}>
                Room Attendant
            </option>

            <option value="Commis Pastry"
                {{ old('skema', $data->skema) == 'Commis Pastry' ? 'selected' : '' }}>
                Commis Pastry
            </option>
        </select>
    </div>

    {{-- TEMPAT & TANGGAL LAHIR --}}
    <div class="grid grid-cols-2 gap-6">
        <div>
            <label class="block font-semibold mb-1">Tempat Lahir</label>
            <input type="text" name="tempat_lahir"
                value="{{ old('tempat_lahir', $data->tempat_lahir) }}"
                class="w-full px-4 py-3 border rounded-lg">
        </div>

        <div>
            <label class="block font-semibold mb-1">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir"
                value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}"
                class="w-full px-4 py-3 border rounded-lg">
        </div>
    </div>

    {{-- ALAMAT --}}
    <div>
        <label class="block font-semibold mb-1">Alamat</label>
        <textarea name="alamat"
            class="w-full px-4 py-3 border rounded-lg"
            rows="3">{{ old('alamat', $data->alamat) }}</textarea>
    </div>

    {{-- BUTTON --}}
    <div class="flex justify-between pt-6">
        <a href="{{ route('admin.pendaftaranlsp.index') }}"
            class="px-6 py-2 bg-gray-200 rounded-lg">
            Kembali
        </a>

        <button type="submit"
            class="px-10 py-3 bg-green-600 text-white rounded-lg">
            Simpan Perubahan
        </button>
    </div>
</form>
        </div>

    </main>

</body>
</html>
