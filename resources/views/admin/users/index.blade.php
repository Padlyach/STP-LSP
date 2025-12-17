<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-soft-gray">
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

        .action-btn {
            transition: all 0.2s ease;
        }

        .action-btn:hover {
            transform: scale(1.05);
        }

        .search-box {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }

        .search-box:focus {
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
            border-color: #10B981;
            outline: none;
        }

        .filter-select {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }

        .filter-select:focus {
            border-color: #0E7A4F;
            box-shadow: 0 0 0 3px rgba(14, 122, 79, 0.1);
            outline: none;
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
    </style>
@include('partials.navbaradmin')
    <!-- Header -->
    <div class="gradient-header text-white py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Daftar User</h1>
            <p class="mt-2 text-green-100">Kelola dan lihat data pengguna dengan mudah</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-10">
        
        <!-- Filter Section -->
        <div class="card-shadow bg-white rounded-lg p-6 mb-8">
            <h2 class="text-lg font-bold text-gray-800 mb-4">🔍 Filter & Cari</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                <!-- Search Box -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Cari Nama</label>
                    <input 
                        type="text" 
                        id="searchBox" 
                        class="search-box w-full px-4 py-2 rounded-lg" 
                        placeholder="Ketik nama user..."
                    >
                </div>

                <!-- Filter Select -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kolom Tampil</label>
                    <select id="filterOption" class="filter-select w-full px-4 py-2 rounded-lg">
                        <option value="all">Semua Kolom</option>
                        <option value="nama">Nama Saja</option>
                        <option value="kontak">Email Saja</option>
                        <option value="tanggal">Tanggal Saja</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="flex items-end gap-2">
                    <button id="applyFilter" class="btn-primary text-white px-6 py-2 rounded-lg font-medium w-full">
                        ✓ Terapkan
                    </button>
                    <button id="resetFilter" class="bg-gray-300 text-gray-700 px-6 py-2 rounded-lg font-medium w-full hover:bg-gray-400">
                        ↺ Reset
                    </button>
                </div>
            </div>

            <!-- Filter Indicator -->
            <div id="filterIndicator" style="display: none;">
                <div class="filter-badge" id="filterText"></div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="card-shadow bg-white rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-primary to-primary-light text-white">
                            <th class="px-6 py-4 text-left font-semibold column-id">ID</th>
                            <th class="px-6 py-4 text-left font-semibold column-nama">Nama</th>
                            <th class="px-6 py-4 text-left font-semibold column-kontak">Email</th>
                            <th class="px-6 py-4 text-left font-semibold column-tanggal">Terdaftar</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @foreach ($users as $user)
                            <tr class="table-row-hover border-b" data-nama="{{ $user->name }}">
                                <td class="px-6 py-4 column-id">{{ $user->id }}</td>
                                <td class="px-6 py-4 font-medium column-nama">{{ $user->name }}</td>
                                <td class="px-6 py-4 column-kontak">{{ $user->email }}</td>
                                <td class="px-6 py-4 text-gray-600 column-tanggal">{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- No Results Row -->
            <div id="noResultsRow" style="display: none;" class="text-center py-8 text-gray-500">
                <p class="text-lg">😔 Tidak ada data yang ditemukan</p>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="mt-6 text-center text-gray-600 text-sm">
            <p>Total users: <span id="totalUsers">{{ count($users) }}</span> | Ditampilkan: <span id="displayedUsers">{{ count($users) }}</span></p>
        </div>
    </div>

    <script>
        const filterSelect = document.getElementById('filterOption');
        const filterBtn = document.getElementById('applyFilter');
        const resetBtn = document.getElementById('resetFilter');
        const searchBox = document.getElementById('searchBox');
        const tableBody = document.getElementById('tableBody');
        const filterIndicator = document.getElementById('filterIndicator');
        const filterText = document.getElementById('filterText');
        const noResultsRow = document.getElementById('noResultsRow');

        let currentFilter = 'all';
        let currentSearch = '';

        const columnMap = {
            'all': ['column-id', 'column-nama', 'column-kontak', 'column-tanggal'],
            'nama': ['column-id', 'column-nama'],
            'kontak': ['column-id', 'column-kontak'],
            'tanggal': ['column-id', 'column-tanggal']
        };

        function showColumns(filter) {
            const allColumns = ['column-id', 'column-nama', 'column-kontak', 'column-tanggal'];
            const visibleColumns = columnMap[filter] || allColumns;

            allColumns.forEach(col => {
                const headers = document.querySelectorAll(`th.${col}`);
                const cells = document.querySelectorAll(`td.${col}`);
                
                headers.forEach(h => h.style.display = visibleColumns.includes(col) ? '' : 'none');
                cells.forEach(c => c.style.display = visibleColumns.includes(col) ? '' : 'none');
            });
        }

        function applyFilters() {
            const rows = tableBody.querySelectorAll('tr');
            let visibleCount = 0;

            rows.forEach(row => {
                const nama = row.getAttribute('data-nama') || '';
                const searchMatch = nama.toLowerCase().includes(currentSearch.toLowerCase());

                if (searchMatch) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            if (visibleCount === 0 && tableBody.querySelectorAll('tr').length > 0) {
                noResultsRow.style.display = 'block';
            } else {
                noResultsRow.style.display = 'none';
            }

            document.getElementById('displayedUsers').textContent = visibleCount;
            updateFilterIndicator();
        }

        function updateFilterIndicator() {
            const indicators = [];
            
            if (currentSearch) {
                indicators.push(`🔍 Cari: "${currentSearch}"`);
            }
            if (currentFilter !== 'all') {
                const filterLabels = {
                    'nama': 'Nama Saja',
                    'kontak': 'Email Saja',
                    'tanggal': 'Tanggal Saja'
                };
                indicators.push(`📋 ${filterLabels[currentFilter]}`);
            }

            if (indicators.length > 0) {
                filterIndicator.style.display = '';
                filterText.textContent = indicators.join(' | ');
            } else {
                filterIndicator.style.display = 'none';
            }
        }

        filterBtn.addEventListener('click', function () {
            currentFilter = filterSelect.value;
            showColumns(currentFilter);
            applyFilters();
        });

        resetBtn.addEventListener('click', function () {
            filterSelect.value = 'all';
            searchBox.value = '';
            currentFilter = 'all';
            currentSearch = '';
            showColumns('all');
            tableBody.querySelectorAll('tr').forEach(row => row.style.display = '');
            noResultsRow.style.display = 'none';
            document.getElementById('displayedUsers').textContent = tableBody.querySelectorAll('tr').length;
            updateFilterIndicator();
        });

        searchBox.addEventListener('input', function () {
            currentSearch = this.value;
            applyFilters();
        });

        // Initialize
        showColumns('all');
    </script>

</body>
</html>