<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pendaftaran Sertifikat - LSP STP Bogor</title>
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
        
        .document-preview-link {
            transition: all 0.2s ease;
        }

        .document-preview-link:hover img {
            opacity: 0.8;
            transform: scale(1.05);
        }

        .column-nim, .column-universitas, .column-alamat {
            /* Default display for new columns */
            display: table-cell; 
        }

    </style>
</head>
 @include('partials.navbaradmin')
<body class="bg-gradient-to-br from-gray-50 via-white to-soft-green min-h-screen">
    
    <div class="gradient-header text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Daftar Pendaftaran Sertifikat</h1>
            <p class="mt-2 text-green-100">Kelola dan lihat data pendaftar sertifikat kompetensi</p>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <div class="flex flex-col gap-4 mb-8">

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

            <div class="flex flex-col sm:flex-row gap-3 items-stretch sm:items-end">
                <div class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">⚙️ Filter Data</label>
                    <select id="filterOption"
                        class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
                        <option value="all">📋 Semua Data</option>
                        <option value="nama">👤 Nama Peserta</option>
                        <option value="kontak">📞 Kontak</option>
                        <option value="tanggal">📅 TTL</option>
                        <option value="jk">⚪ Jenis Kelamin</option>
                        <option value="kompetensi">🎓 Kompetensi</option>
                        <option value="universitas">🏫 Universitas</option>
                        <option value="nim"># NIM</option>
                    </select>
                </div>

                <div id="jkFilterContainer" style="display: none;" class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">👥 Pilih Jenis Kelamin</label>
                    <select id="jkFilterValue"
                        class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
                        <option value="all-jk">Semua Jenis Kelamin</option>
                        <option value="Laki-laki">👨 Laki-laki</option>
                        <option value="Perempuan">👩 Perempuan</option>
                    </select>
                </div>

                <div id="kompetensiFilterContainer" style="display: none;" class="flex-1">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">🎓 Pilih Kompetensi</label>
                    <select id="kompetensiFilterValue"
                        class="filter-select w-full border rounded-lg px-4 py-3 bg-white text-gray-700 focus:outline-none">
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

            <div id="filterIndicator" style="display: none;">
                <span class="filter-badge">
                    Filter aktif: <span id="filterText" class="filter-active"></span>
                    <button onclick="document.getElementById('resetFilter').click()"
                        class="ml-2 underline hover:no-underline">✕</button>
                </span>
            </div>
        </div>

        <div class="card-shadow bg-white rounded-2xl overflow-hidden border border-gray-100">

            <div class="bg-gradient-to-r from-primary-dark to-primary-light px-6 sm:px-8 py-6 border-b border-gray-100">
                <h2 class="text-2xl font-bold text-white flex items-center gap-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 1 1 0 000-2H2a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a1 1 0 10 0 2H4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Data Sertifikat
                </h2>

                <p class="text-green-50 text-sm mt-1">Total: <span id="totalCount">
                        {{ count($data) }} </span> pendaftar sertifikat</p>
            </div>

            <div class="p-6 sm:p-8">

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-gray-50 to-gray-100 border-b border-gray-200">
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-nama">Nama</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-nim">NIM</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-kontak">Kontak (Email/Telp)</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-jk">JK</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-tanggal">TTL</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-universitas">Universitas</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-kompetensi">Kompetensi</th>
                                <th class="px-4 py-3 text-left text-xs font-bold text-gray-700 uppercase tracking-wider column-alamat">Alamat</th>
                                <th class="px-4 py-3 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Dokumen</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100" id="tableBody">
                            @forelse ($data as $d)
                            <tr class="table-row-hover" data-nama="{{ strtolower($d->nama) }}" 
                                data-nim="{{ strtolower($d->nim) }}"
                                data-jk="{{ $d->jenis_kelamin }}" 
                                data-kompetensi="{{ $d->kompetensi }}"
                                data-universitas="{{ strtolower($d->nama_universitas) }}">
                                
                                <td class="px-4 py-3 whitespace-nowrap text-sm font-semibold text-gray-900 column-nama">{{ $d->nama }}</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700 column-nim">{{ $d->nim }}</td>
                                
                                <td class="px-4 py-3 text-sm column-kontak">
                                    <div class="text-gray-700">{{ $d->email }}</div>
                                    <div class="text-gray-500 text-xs">{{ $d->telepon }}</div>
                                </td>
                                
                                <td class="px-4 py-3 whitespace-nowrap text-sm column-jk">
                                    <span
                                        class="badge-gender {{ strtolower($d->jenis_kelamin) == 'laki-laki' ? 'badge-gender-m' : 'badge-gender-f' }}">
                                        {{ $d->jenis_kelamin }}
                                    </span>
                                </td>

                                <td class="px-4 py-3 text-sm text-gray-700 column-tanggal">
                                    <div class="font-medium">{{ $d->tempat_lahir }}</div>
                                    <div class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($d->tanggal_lahir)->format('d/m/Y') }}</div>
                                </td>
                                
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-700 column-universitas">{{ $d->nama_universitas }}</td>
                                
                                <td class="px-4 py-3 whitespace-nowrap column-kompetensi">
                                    <span class="badge-competency px-3 py-1.5 rounded-lg text-sm font-bold">
                                        {{ $d->kompetensi }}
                                    </span>
                                </td>
                                
                                <td class="px-4 py-3 text-sm text-gray-700 max-w-xs truncate column-alamat">{{ $d->alamat }}</td>

                                <td class="px-4 py-3 text-center space-y-2 flex flex-col items-center">
                                    <a href="{{ asset('storage/' . $d->sertifikat_depan) }}" 
                                        target="_blank" 
                                        class="document-preview-link block w-16 h-16 overflow-hidden border border-primary-light rounded-md shadow-md" 
                                        title="Lihat Sertifikat Depan">
                                        <img src="{{ asset('storage/' . $d->sertifikat_depan) }}" 
                                            alt="Sertifikat Depan" 
                                            class="w-full h-full object-cover transition duration-150 ease-in-out">
                                    </a>
                                    <a href="{{ asset('storage/' . $d->sertifikat_belakang) }}" 
                                        target="_blank" 
                                        class="document-preview-link block w-16 h-16 overflow-hidden border border-primary-light rounded-md shadow-md" 
                                        title="Lihat Sertifikat Belakang">
                                        <img src="{{ asset('storage/' . $d->sertifikat_belakang) }}" 
                                            alt="Sertifikat Belakang" 
                                            class="w-full h-full object-cover transition duration-150 ease-in-out">
                                    </a>
                                </td>
                            </tr>

                            @empty
                            <tr id="emptyRow">
                                <td colspan="9">
                                    <div class="empty-state text-center py-12">
                                        <svg class="w-20 h-20 mx-auto text-gray-300 mb-4" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                            </path>
                                        </svg>
                                        <h3 class="text-gray-500 font-semibold text-lg mb-2">Belum Ada Data Pendaftar Sertifikat</h3>
                                        <p class="text-gray-400 mb-6">Data pendaftaran sertifikat akan muncul di sini.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div id="noResultsRow" style="display: none;">
                        <div class="no-result-row border-t border-gray-200">
                            <svg class="w-16 h-16 mx-auto text-gray-300 mb-3" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
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

        // Updated columnMap to include new columns
        const columnMap = {
            'all': ['column-nama', 'column-nim', 'column-kontak', 'column-jk', 'column-tanggal', 'column-universitas', 'column-kompetensi', 'column-alamat'],
            'nama': ['column-nama'],
            'nim': ['column-nim'],
            'kontak': ['column-kontak'],
            'tanggal': ['column-tanggal'],
            'jk': ['column-jk'],
            'kompetensi': ['column-kompetensi'],
            'universitas': ['column-universitas']
            // 'alamat' dan 'dokumen' tidak perlu di-hide/show karena mereka selalu relevan
        };

        function showColumns(filter) {
            // Include NIM, Universitas, Alamat in all columns for this page
            const allColumns = ['column-nama', 'column-nim', 'column-kontak', 'column-jk', 'column-tanggal', 'column-universitas', 'column-kompetensi', 'column-alamat'];
            const visibleColumns = columnMap[filter] || allColumns;

            // Dokumen column should always be visible (we don't include it in allColumns for the loop above)
            const documentHeader = document.querySelector('th:last-child');
            const documentCells = document.querySelectorAll('td:last-child');
            
            // This is a crude way to handle 'Aksi' in the previous page, but here we only hide/show the data columns
            // We ensure all columns are available, then hide the ones not selected by filter.
            allColumns.forEach(col => {
                const headers = document.querySelectorAll(`th.${col}`);
                const cells = document.querySelectorAll(`td.${col}`);

                // If filter is 'all', show all. If a specific filter is selected, show only those columns.
                const shouldShow = filter === 'all' || visibleColumns.includes(col);

                headers.forEach(h => h.style.display = shouldShow ? '' : 'none');
                cells.forEach(c => c.style.display = shouldShow ? '' : 'none');
            });
            
            // Ensure the 'Dokumen' column is always shown
            if (documentHeader) documentHeader.style.display = '';
            documentCells.forEach(c => c.style.display = '');

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
                // Get data attributes
                const nama = row.getAttribute('data-nama') || '';
                const nim = row.getAttribute('data-nim') || '';
                const jk = (row.getAttribute('data-jk') || '').toLowerCase().trim();
                const komp = (row.getAttribute('data-kompetensi') || '').toLowerCase().trim();
                const univ = (row.getAttribute('data-universitas') || '').toLowerCase().trim();

                let dataToSearch;

                // Determine which attribute is primarily searched if a column filter is active
                if (currentFilter === 'nim') {
                    dataToSearch = nim;
                } else if (currentFilter === 'universitas') {
                    dataToSearch = univ;
                } else if (currentFilter === 'nama' || currentFilter === 'all') {
                    dataToSearch = nama;
                } else {
                    // For other filters (kontak, tanggal, jk, kompetensi) we rely on secondary filters
                    dataToSearch = nama; // Keep searching by name if the main filter is non-text
                }

                // Primary Search Match (always use nama or specific column data if filtered)
                const searchMatch = dataToSearch.toLowerCase().includes(currentSearch.toLowerCase());

                // Secondary Filter Matches
                const jkMatch = currentJK === 'all-jk' || jk === currentJK.toLowerCase().trim();
                const kompMatch = currentKomp === 'all-komp' || komp === currentKomp.toLowerCase().trim();
                
                // Final Decision
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
                const filterLabel = filterSelect.options[filterSelect.selectedIndex].text;
                indicators.push(`Cari (${filterLabel}): "${currentSearch}"`);
            }
            if (currentJK !== 'all-jk') {
                const jkLabel = currentJK === 'Laki-laki' ? '👨 Laki-laki' : '👩 Perempuan';
                indicators.push(`JK: ${jkLabel}`);
            }
            if (currentKomp !== 'all-komp') {
                indicators.push(`Kompetensi: ${kompetensiFilterValue.options[kompetensiFilterValue.selectedIndex].text}`);
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
            // Re-apply filters to handle the name search correctly based on the new filter column
            applyFilters(); 
        });

        // Filter Select Change
        filterSelect.addEventListener('change', function () {
            showFilterOptions(this.value);
            // Also update columns when filter type changes
            showColumns(this.value); 
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