<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
                    },
                }
            }
        }

        
    </script>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

body {
    font-family: 'Poppins', sans-serif;
}

* {
    scroll-behavior: smooth;
}

.gradient-header {
    background: linear-gradient(135deg, #0E7A4F 0%, #10B981 100%);
    box-shadow: 0 10px 30px rgba(14, 122, 79, 0.2);
}

.card-shadow {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
}

.card-shadow:hover {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    transform: translateY(-2px);
}

.btn-primary {
    background: linear-gradient(135deg, #0E7A4F 0%, #10B981 100%);
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(14, 122, 79, 0.3);
}

.table-row-hover:hover {
    background-color: #f0fdf4;
    transition: all 0.2s ease;
}

.badge-competency {
    background: linear-gradient(135deg, #D1FAE5 0%, #A7F3D0 100%);
    color: #065F46;
}

.action-btn {
    transition: all 0.2s ease;
}

.action-btn:hover {
    transform: scale(1.05);
}

.empty-state {
    text-align: center;
    padding: 60px 20px;
}

.search-box {
    transition: all 0.3s ease;
    border: 2px solid #e5e7eb;
}

.search-box:focus {
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
    border-color: #10B981;
}

.filter-select {
    transition: all 0.3s ease;
    border: 2px solid #e5e7eb;
}

.filter-select:focus {
    border-color: #0E7A4F;
    box-shadow: 0 0 0 3px rgba(14, 122, 79, 0.1);
}

.badge-gender {
    padding: 0.375rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 600;
    transition: all 0.2s ease;
}

.badge-gender-m {
    background-color: #dbeafe;
    color: #1e40af;
}

.badge-gender-f {
    background-color: #fce7f3;
    color: #be185d;
}

.action-btn-edit {
    background-color: #eff6ff;
    color: #0284c7;
    transition: all 0.2s ease;
}

.action-btn-edit:hover {
    background-color: #bfdbfe;
}

.action-btn-delete {
    background-color: #fef2f2;
    color: #dc2626;
    transition: all 0.2s ease;
}

.action-btn-delete:hover {
    background-color: #fee2e2;
}

.no-result-row {
    text-align: center;
    padding: 40px 20px;
}

.filter-badge {
    display: inline-block;
    background-color: #ecfdf5;
    color: #065f46;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    font-size: 0.875rem;
    font-weight: 500;
    margin-top: 1rem;
}

.filter-active {
    color: #0E7A4F;
    font-weight: 600;
}
    </style>
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-soft-green min-h-screen">
    @include('partials.navbaradmin')

   <div class="gradient-header text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">List Pendaftaran</h1>
            <p class="mt-2 text-green-100">Kelola dan lihat data pengguna dengan mudah</p>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- Success Alert -->
        @if (session('success'))
        <div class="mb-6 bg-gradient-to-r from-primary to-primary-light text-white p-4 rounded-lg shadow-lg flex items-center gap-3 animate-fade-in">
            <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <div>
                <p class="font-semibold">Berhasil!</p>
                <p class="text-sm text-green-50">{{ session('success') }}</p>
            </div>
        </div>
        @endif

        <!-- TOP CONTENT -->
        <div class="flex flex-col gap-4 mb-8">

            <!-- ROW 1: SEARCH -->
            <div class="w-full">
                <label class="block text-sm font-semibold text-gray-700 mb-2">🔍 Cari Peserta</label>
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <input type="text" id="searchBox" placeholder="Masukkan nama peserta..."
                        class="search-box w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none bg-white">
                </div>
            </div>

            <!-- ROW 2: FILTER + BUTTON -->
            <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-end">
                <div class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">⚙️ Filter Data</label>
                    <select id="filterOption" class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
                        <option value="all">📋 Semua Data</option>
                        <option value="nama">👤 Nama Peserta</option>
                        <option value="kontak">📞 Kontak</option>
                        <option value="tanggal">📅 Tanggal & Tempat Lahir</option>
                        <option value="jk">⚪ Jenis Kelamin</option>
                        <option value="kompetensi">🎓 Kompetensi</option>
                    </select>
                </div>

                <!-- Jenis Kelamin Filter -->
                <div id="jkFilterContainer" style="display: none;" class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">👥 Pilih Jenis Kelamin</label>
                    <select id="jkFilterValue" class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
                        <option value="all-jk">Semua Jenis Kelamin</option>
                        <option value="Laki-laki">👨 Laki-laki</option>
                        <option value="Perempuan">👩 Perempuan</option>
                    </select>
                </div>

                <!-- Kompetensi Filter -->
                <div id="kompetensiFilterContainer" style="display: none;" class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">🎓 Pilih Kompetensi</label>
                    <select id="kompetensiFilterValue" class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
                        <option value="all-komp">Semua Kompetensi</option>
                        <option value="Receptionist">📞 Receptionist</option>
                        <option value="Waiter">🍽️ Waiter</option>
                        <option value="Room Attendant">🛏️ Room Attendant</option>
                        <option value="Commis Pastry">🎂 Commis Pastry</option>
                    </select>
                </div>
                
                <button id="applyFilter"
                    class="btn-primary px-6 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-lg shadow-md">
                    ✓ Terapkan
                </button>

                <button id="resetFilter"
                    class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold rounded-lg shadow-md transition">
                    ↻ Reset
                </button>

                
            </div>

            <!-- ACTIVE FILTER INDICATOR -->
            <div id="filterIndicator" style="display: none;">
                <span class="filter-badge">
                    Filter aktif: <span id="filterText" class="filter-active"></span> 
                    <button onclick="document.getElementById('resetFilter').click()" class="ml-2 underline hover:no-underline">✕</button>
                </span>
            </div>
        </div>

        <!-- MAIN CARD -->
        <div class="card-shadow bg-white rounded-2xl overflow-hidden border border-gray-100">

            <!-- Card Header -->
            <div class="bg-gradient-to-r from-primary-dark to-primary-light px-6 sm:px-8 py-6 border-b border-gray-100">
                <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 1 1 0 000-2H2a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a1 1 0 10 0 2H4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Daftar Pendaftar
                </h2>

                <p class="text-green-50 text-sm mt-1">Total: <span id="totalCount">
                    @forelse ($data as $count) @empty 0 @endforelse </span> peserta terdaftar</p>
            </div>

            <!-- Card Body -->
            <div class="p-6 sm:p-8">

                <!-- DESKTOP TABLE -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">No</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-nama">Nama & Sekolah</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-kontak">Kontak</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-tanggal">Tanggal & Tempat Lahir</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-jk">JK</th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-kompetensi">Kompetensi</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100" id="tableBody">
                            @forelse ($data as $pendaftaran)
                            <tr class="table-row-hover" data-nama="{{ strtolower($pendaftaran->nama) }}" data-jk="{{ $pendaftaran->jenis_kelamin }}" data-kompetensi="{{ $pendaftaran->kompetensi }}">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-bold text-primary">{{ $loop->iteration }}</td>

                                <td class="px-6 py-4 column-nama">
                                    <div class="font-semibold text-gray-900">{{ $pendaftaran->nama }}</div>
                                    <div class="text-sm text-gray-500">{{ $pendaftaran->sekolah_asal }}</div>
                                </td>

                                <td class="px-6 py-4 text-sm column-kontak">
                                    <div class="text-gray-700">{{ $pendaftaran->email }}</div>
                                    <div class="text-gray-500 text-xs">{{ $pendaftaran->telepon }}</div>
                                </td>

                                <td class="px-6 py-4 text-sm text-gray-700 column-tanggal">
                                    <div class="font-medium">{{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d/m/Y') }}</div>
                                    <div class="text-xs text-gray-500">{{ $pendaftaran->tempat_lahir }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm column-jk">
                                    <span class="badge-gender {{ strtolower($pendaftaran->jenis_kelamin) == 'laki-laki' ? 'badge-gender-m' : 'badge-gender-f' }}">
                                        {{ $pendaftaran->jenis_kelamin }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap column-kompetensi">
                                    <span class="badge-competency px-3 py-1.5 rounded-lg text-sm font-bold">
                                        {{ $pendaftaran->kompetensi }}
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-center">
                                    <div class="flex justify-center gap-2">
                                        <a href="{{ route('admin.pendaftaranlsp.edit', $pendaftaran->id) }}"
                                            class="action-btn action-btn-edit inline-flex items-center px-3 py-2 rounded-lg font-semibold text-xs transition">✏️ Edit</a>

                                        <form action="{{ route('admin.pendaftaranlsp.destroy', $pendaftaran->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus?')" class="inline">
                                            @csrf @method('DELETE')
                                            <button type="submit"
                                                class="action-btn action-btn-delete inline-flex items-center px-3 py-2 rounded-lg font-semibold text-xs transition">🗑️ Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr id="emptyRow">
                                <td colspan="7">
                                    <div class="empty-state text-center py-12">
                                        <svg class="w-20 h-20 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                        </svg>
                                        <h3 class="text-gray-500 font-semibold text-lg mb-2">Belum Ada Data Peserta</h3>
                                        <p class="text-gray-400 mb-6">Mulai tambahkan peserta baru!</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div id="noResultsRow" style="display: none;">
                        <div class="no-result-row">
                            <svg class="w-16 h-16 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <h3 class="text-gray-500 font-semibold text-lg">Tidak Ada Hasil</h3>
                            <p class="text-gray-400 text-sm">Coba ubah filter atau kata kunci pencarian Anda</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

 <script>
    const filterSelect = document.getElementById('filterOption');
    const filterBtn = document.getElementById('applyFilter');
    const resetBtn = document.getElementById('resetFilter');
    const searchBox = document.getElementById('searchBox');
    const tableBody = document.getElementById('tableBody');
    const filterIndicator = document.getElementById('filterIndicator');
    const filterText = document.getElementById('filterText');
    const noResultsRow = document.getElementById('noResultsRow');

    const jkFilterContainer = document.getElementById('jkFilterContainer');
    const jkFilterValue = document.getElementById('jkFilterValue');
    const kompetensiFilterContainer = document.getElementById('kompetensiFilterContainer');
    const kompetensiFilterValue = document.getElementById('kompetensiFilterValue');

    let currentFilter = 'all';
    let currentSearch = '';
    let currentJK = 'all-jk';
    let currentKomp = 'all-komp';

    const columnMap = {
        'all': ['column-nama', 'column-kontak', 'column-tanggal', 'column-jk', 'column-kompetensi'],
        'nama': ['column-nama'],
        'kontak': ['column-kontak'],
        'tanggal': ['column-tanggal'],
        'jk': ['column-jk'],
        'kompetensi': ['column-kompetensi']
    };

    function showColumns(filter) {
        const allColumns = ['column-nama', 'column-kontak', 'column-tanggal', 'column-jk', 'column-kompetensi'];
        const visibleColumns = columnMap[filter] || allColumns;

        allColumns.forEach(col => {
            const headers = document.querySelectorAll(`th.${col}`);
            const cells = document.querySelectorAll(`td.${col}`);
            
            headers.forEach(h => h.style.display = visibleColumns.includes(col) ? '' : 'none');
            cells.forEach(c => c.style.display = visibleColumns.includes(col) ? '' : 'none');
        });
    }

    function showFilterOptions(filter) {
        jkFilterContainer.style.display = 'none';
        kompetensiFilterContainer.style.display = 'none';

        if (filter === 'jk') {
            jkFilterContainer.style.display = '';
        } else if (filter === 'kompetensi') {
            kompetensiFilterContainer.style.display = '';
        }
    }

    function applyFilters() {
        const rows = tableBody.querySelectorAll('tr');
        let visibleCount = 0;

        rows.forEach(row => {
            const nama = row.getAttribute('data-nama') || '';
            const jk = (row.getAttribute('data-jk') || '').toLowerCase().trim();
            const komp = (row.getAttribute('data-kompetensi') || '').toLowerCase().trim();

            // Search by name
            const searchMatch = nama.toLowerCase().includes(currentSearch.toLowerCase());

            // FIXED ✔ match case-insensitive
            const jkMatch =
                currentJK === 'all-jk' ||
                jk === currentJK.toLowerCase().trim();

            // FIXED ✔ match case-insensitive
            const kompMatch =
                currentKomp === 'all-komp' ||
                komp === currentKomp.toLowerCase().trim();

            if (searchMatch && jkMatch && kompMatch) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Show/hide no results message
        if (visibleCount === 0 && tableBody.querySelectorAll('tr').length > 0) {
            noResultsRow.style.display = 'block';
        } else {
            noResultsRow.style.display = 'none';
        }

        updateFilterIndicator();
    }

    function updateFilterIndicator() {
        const indicators = [];
        
        if (currentSearch) {
            indicators.push(`Cari: "${currentSearch}"`);
        }
        if (currentJK !== 'all-jk') {
            const jkLabel = currentJK === 'Laki-laki' ? '👨 Laki-laki' : '👩 Perempuan';
            indicators.push(`JK: ${jkLabel}`);
        }
        if (currentKomp !== 'all-komp') {
            indicators.push(`Kompetensi: ${currentKomp}`);
        }

        if (indicators.length > 0) {
            filterIndicator.style.display = '';
            filterText.textContent = indicators.join(' | ');
        } else {
            filterIndicator.style.display = 'none';
        }
    }

    // Apply Filter Button
    filterBtn.addEventListener('click', function () {
        currentFilter = filterSelect.value;
        showColumns(currentFilter);
        applyFilters();
    });

    // Filter Select Change
    filterSelect.addEventListener('change', function () {
        showFilterOptions(this.value);
    });

    // JK Filter Change
    jkFilterValue.addEventListener('change', function () {
        currentJK = this.value;
        applyFilters();
    });

    // Kompetensi Filter Change
    kompetensiFilterValue.addEventListener('change', function () {
        currentKomp = this.value;
        applyFilters();
    });

    // Reset Button
    resetBtn.addEventListener('click', function () {
        filterSelect.value = 'all';
        jkFilterValue.value = 'all-jk';
        kompetensiFilterValue.value = 'all-komp';
        searchBox.value = '';
        currentFilter = 'all';
        currentSearch = '';
        currentJK = 'all-jk';
        currentKomp = 'all-komp';
        showColumns('all');
        showFilterOptions('all');
        tableBody.querySelectorAll('tr').forEach(row => row.style.display = '');
        noResultsRow.style.display = 'none';
        updateFilterIndicator();
    });

    // Search Box
    searchBox.addEventListener('input', function () {
        currentSearch = this.value;
        applyFilters();
    });

    // Initialize
    showColumns('all');
    showFilterOptions('all');
</script>



</body>

</html>