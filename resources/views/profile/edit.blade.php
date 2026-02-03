 @include('partials.navbar')

   <div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white text-black shadow rounded-lg p-6 border border-red-500">

                {{-- STATUS --}}
                @if (session('status') === 'profile-updated')
                    <div class="mb-4 text-sm text-green-600">
                        Profile berhasil diperbarui.
                    </div>
                @endif

              <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">

                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
    <label class="block text-sm font-medium">Avatar</label>
    <input type="file" name="avatar" class="mt-1 block w-full">
</div>

                   <div class="mb-4">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
        NIK
    </label>

    <input
    type="text"
    name="nik"
    value="{{ old('nik', $user->nik) }}"
    class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
    maxlength="16"
    inputmode="numeric"
    pattern="[0-9]*"
    oninput="this.value=this.value.replace(/[^0-9]/g,'')"
>


                    {{-- Tanggal Lahir --}}
                 <div class="mb-4">
    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
        Tanggal Lahir
    </label>

    <input
        type="date"
        name="tanggal_lahir"
        value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
    >

    @error('tanggal_lahir')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>


                    {{-- NAMA --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Nama
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name', $user->name) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
                            required
                        >
                        @error('name')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- EMAIL --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Email
                        </label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email', $user->email) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
                            required
                        >
                        @error('email')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- PASSWORD BARU --}}
<div class="mb-4">
    <label class="block text-sm font-medium">Password Baru</label>
    <input
        type="password"
        name="password"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
    >
    @error('password')
        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- KONFIRMASI PASSWORD --}}
<div class="mb-4">
    <label class="block text-sm font-medium">Konfirmasi Password</label>
    <input
        type="password"
        name="password_confirmation"
        class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-900 dark:text-white"
    >
</div>

<p class="text-xs text-gray-500">
    Kosongkan jika tidak ingin mengubah password.
</p>


                    {{-- BUTTON --}}
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700"
                        >
                            Simpan Perubahan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
