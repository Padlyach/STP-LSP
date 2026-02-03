<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - LSP STP Bogor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0E7A4F',
                        'primary-dark': '#065F46',
                        'primary-light': '#10B981',
                        'accent': '#F59E0B',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body { 
            font-size: 14px;
            letter-spacing: -0.01em;
        }

        .data-label { 
            font-size: 10px; 
            font-weight: 700; 
            text-transform: uppercase; 
            color: #64748b; 
            margin-bottom: 6px;
            letter-spacing: 0.8px;
        }

        .doc-badge { 
            transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .doc-badge:hover { 
            transform: translateY(-4px) scale(1.08);
            box-shadow: 0 12px 24px -8px rgba(14, 122, 79, 0.4);
        }

        .card-elevated {
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-elevated:hover {
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            transform: translateY(-2px);
        }

        .gradient-primary {
            background: linear-gradient(135deg, #065F46 0%, #0E7A4F 50%, #10B981 100%);
        }

        .gradient-dark {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
        }

        .search-input:focus {
            box-shadow: 0 0 0 4px rgba(14, 122, 79, 0.1);
            border-color: #0E7A4F;
        }

        .table-row-hover {
            transition: all 0.2s ease;
        }

        .table-row-hover:hover {
            background: linear-gradient(90deg, rgba(14, 122, 79, 0.05) 0%, rgba(14, 122, 79, 0.02) 100%);
            border-left-color: #0E7A4F;
        }

        .status-badge {
            animation: pulse-soft 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse-soft {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.85; }
        }

        .header-pattern {
            background-color: #0E7A4F;
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.08) 0%, transparent 50%);
        }

        @media (max-width: 768px) {
            .mobile-card {
                border-left: 4px solid #0E7A4F;
            }
        }

        .icon-container {
            background: linear-gradient(135deg, rgba(14, 122, 79, 0.1) 0%, rgba(16, 185, 129, 0.1) 100%);
        }

        .badge-shimmer {
            background: linear-gradient(90deg, #F59E0B 0%, #FBBF24 50%, #F59E0B 100%);
            background-size: 200% 100%;
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .stat-number {
            font-variant-numeric: tabular-nums;
        }

        .divider-gradient {
            background: linear-gradient(90deg, transparent, #e2e8f0, transparent);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-slate-50 via-gray-50 to-slate-100 min-h-screen">
    @include('partials.navbaradmin')

    <!-- Enhanced Header Section -->
    <div class="header-pattern relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative">
            <div class="flex items-center justify-between flex-wrap gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-2 h-12 bg-white rounded-full"></div>
                        <div>
                            <h1 class="text-4xl md:text-5xl font-black text-white tracking-tight">Data Peserta LSP</h1>
                            <p class="text-green-100 text-sm font-medium mt-2 tracking-wide">Sistem Manajemen Sertifikasi Kompetensi</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center gap-4 bg-white/10 backdrop-blur-md rounded-2xl px-6 py-4 border border-white/20">
                    <div class="text-right">
                        <div class="text-xs font-bold text-green-100 uppercase tracking-wider">Total Pendaftar</div>
                        <div class="text-3xl font-black text-white stat-number">{{ count($data) }}</div>
                    </div>
                    <div class="w-14 h-14 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="max-w-7xl mx-auto -mt-8 pb-12 px-4 sm:px-6 lg:px-8"> 
        
        <!-- Enhanced Filter Section -->
        <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 mb-8 border border-gray-100/50 card-elevated backdrop-blur-sm mt-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="icon-container w-12 h-12 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-black text-gray-800 tracking-tight">Filter & Pencarian</h2>
                    <p class="text-sm text-gray-500 font-medium mt-1">Cari dan filter data peserta dengan mudah</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="lg:col-span-2">
                    <label class="block text-xs font-extrabold text-gray-700 mb-3 uppercase tracking-wider flex items-center gap-2">
                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Pencarian Peserta
                    </label>
                    <div class="relative">
                        <input type="text" id="searchBox" placeholder="Cari berdasarkan Nama, NIK, atau Email..." 
                               class="search-input w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-5 py-3.5 pl-12 focus:ring-0 focus:bg-white outline-none transition-all text-sm font-medium placeholder:text-gray-400">
                        <svg class="w-5 h-5 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
                
                <div>
                    <label class="block text-xs font-extrabold text-gray-700 mb-3 uppercase tracking-wider flex items-center gap-2">
                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        Skema Sertifikasi
                    </label>
                    <select id="skemaFilter" class="w-full bg-gray-50 border-2 border-gray-200 rounded-xl px-4 py-3.5 outline-none cursor-pointer hover:border-primary transition-all text-sm font-semibold text-gray-700 focus:border-primary focus:bg-white">
                        <option value="all">Semua Skema</option>
                        <option value="Receptionist">Receptionist</option>
                        <option value="Waiter">Waiter</option>
                        <option value="Room Attendant">Room Attendant</option>
                        <option value="Commis Pastry">Commis Pastry</option>
                    </select>
                </div>
                
                <div class="flex items-end gap-2">
                    <button onclick="location.reload()" class="w-full gradient-dark text-white font-bold py-3.5 rounded-xl hover:shadow-2xl transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 text-sm tracking-wide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        REFRESH
                    </button>
                    <a href="{{ route('admin.pendaftaranlsp.export') }}" class="w-full bg-green-600 text-white font-bold py-3.5 rounded-xl hover:shadow-2xl transition-all transform hover:-translate-y-1 flex items-center justify-center gap-3 text-sm tracking-wide">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        EXPORT
                    </a>
                </div>
            </div>
        </div>

        <!-- Enhanced Table Section - Desktop -->
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100/50">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900">
                            <th class="px-6 py-5 font-extrabold text-xs uppercase text-white tracking-wider text-left">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                                    </svg>
                                    Identitas & Kontak
                                </div>
                            </th>
                            <th class="px-6 py-5 font-extrabold text-xs uppercase text-white tracking-wider text-left">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                    </svg>
                                    Detail Personal
                                </div>
                            </th>
                            <th class="px-6 py-5 font-extrabold text-xs uppercase text-white tracking-wider text-left">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                                    </svg>
                                    Akademik & Skema
                                </div>
                            </th>
                            <th class="px-4 py-5 font-extrabold text-xs uppercase text-white tracking-wider text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Verifikasi Dokumen
                                </div>
                            </th>
                            <th class="px-6 py-5 font-extrabold text-xs uppercase text-white tracking-wider text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"></path>
                                    </svg>
                                    Aksi
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="divide-y divide-gray-100">
                        @forelse ($data as $p)
                        <tr class="table-row-hover border-l-4 border-transparent" 
                            data-nama="{{ strtolower($p->nama) }} {{ strtolower($p->nik) }} {{ strtolower($p->email) }}" 
                            data-skema="{{ $p->skema }}">
                            
                            <!-- Identity & Contact -->
                            <td class="px-6 py-6">
                                <div class="flex items-start gap-4">
                                    <div class="relative flex-shrink-0">
                                        <div class="h-14 w-14 rounded-2xl gradient-primary flex items-center justify-center text-white font-black text-xl shadow-lg ring-4 ring-green-100">
                                            {{ substr($p->nama, 0, 1) }}
                                        </div>
                                        <div class="status-badge absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full border-3 border-white shadow-sm"></div>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <h3 class="font-black text-gray-900 text-base leading-tight mb-2">{{ $p->nama }}</h3>
                                        <div class="inline-flex items-center gap-1.5 text-xs font-bold text-gray-600 bg-gradient-to-r from-gray-100 to-gray-50 px-3 py-1 rounded-lg mb-3">
                                            <svg class="w-3.5 h-3.5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $p->nik }}
                                        </div>
                                        <div class="space-y-2">
                                            <div class="flex items-center gap-2 text-xs text-primary font-semibold">
                                                <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                                </svg>
                                                <span class="truncate">{{ $p->email }}</span>
                                            </div>
                                            <div class="text-xs text-gray-400 italic pl-6">Gmail: {{ $p->email_google ?? '-' }}</div>
                                            <div class="flex items-center gap-2 text-xs text-gray-700 font-bold">
                                                <svg class="w-4 h-4 flex-shrink-0 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                                </svg>
                                                {{ $p->telepon }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Personal Details -->
                            <td class="px-6 py-6">
                                <div class="max-w-xs space-y-4">
                                    <div>
                                        <div class="data-label">Tempat, Tanggal Lahir</div>
                                        <div class="text-sm font-bold text-gray-800 flex items-center gap-2">
                                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $p->tempat_lahir }}, {{ \Carbon\Carbon::parse($p->tanggal_lahir)->format('d M Y') }}
                                        </div>
                                    </div>
                                    
                                    <div class="h-px divider-gradient"></div>
                                    
                                    <div>
                                        <div class="data-label">Alamat Lengkap</div>
                                        <div class="text-xs text-gray-600 leading-relaxed bg-gradient-to-br from-gray-50 to-gray-100 p-3 rounded-xl border border-gray-100">
                                            {{ $p->alamat }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Academic Info -->
                            <td class="px-6 py-6">
                                <div class="space-y-4">
                                    <div>
                                        <div class="data-label">Program Studi</div>
                                        <div class="inline-flex items-center gap-2 text-xs font-black text-blue-700 bg-gradient-to-r from-blue-50 to-blue-100 px-4 py-2 rounded-xl border-2 border-blue-200 uppercase tracking-wide">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"></path>
                                            </svg>
                                            {{ $p->program_studi }}
                                        </div>
                                    </div>
                                    
                                    <div class="flex gap-4">
                                        <div>
                                            <div class="data-label">Batch</div>
                                            <div class="inline-flex items-center gap-1.5 text-sm font-black text-gray-800 bg-gradient-to-r from-gray-100 to-gray-200 px-4 py-2 rounded-xl border-2 border-gray-300">
                                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                </svg>
                                                {{ $p->batch }}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <div class="data-label">Skema Sertifikasi</div>
                                        <div class="inline-flex items-center gap-2 badge-shimmer text-white px-4 py-2.5 rounded-xl font-black text-xs shadow-lg border-2 border-yellow-600 uppercase tracking-wider">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $p->skema }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <!-- Files Verification -->
                            <td class="px-4 py-6">
                                <div class="grid grid-cols-4 gap-2.5 w-48 mx-auto">
                                    @php
                                        $fileList = [
                                            ['key' => 'transkrip_nilai', 'short' => 'TR', 'name' => 'Transkrip Nilai'],
                                            ['key' => 'sertifikat_otjt', 'short' => 'OT', 'name' => 'Sertifikat OTJT'],
                                            ['key' => 'reference_letter', 'short' => 'RF', 'name' => 'Ref Letter'],
                                            ['key' => 'ktp_file', 'short' => 'KP', 'name' => 'KTP'],
                                            ['key' => 'cv', 'short' => 'CV', 'name' => 'CV'],
                                            ['key' => 'kartu_mahasiswa', 'short' => 'KM', 'name' => 'KTM'],
                                            ['key' => 'pas_foto', 'short' => 'FT', 'name' => 'Pas Foto'],
                                        ];
                                    @endphp

                                    @foreach($fileList as $file)
                                        @if($p->{$file['key']})
                                            <a href="{{ asset('storage/' . $p->{$file['key']}) }}" target="_blank" 
                                               class="doc-badge w-11 h-11 flex items-center justify-center bg-gradient-to-br from-white to-gray-50 text-primary rounded-xl border-2 border-primary/30 hover:bg-primary hover:text-white hover:border-primary shadow-sm" 
                                               title="{{ $file['name'] }}: Tersedia">
                                                <span class="text-xs font-black">{{ $file['short'] }}</span>
                                            </a>
                                        @else
                                            <div class="w-11 h-11 flex items-center justify-center bg-gray-50 text-gray-300 rounded-xl border-2 border-dashed border-gray-200 cursor-not-allowed" 
                                                 title="{{ $file['name'] }}: Tidak Ada">
                                                <span class="text-xs font-bold opacity-40">{{ $file['short'] }}</span>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="text-[10px] text-center mt-3 text-gray-500 font-semibold uppercase tracking-wider">Klik untuk preview</div>
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-6">
                                <div class="flex flex-col gap-3 items-center">
                                    <a href="{{ route('admin.pendaftaranlsp.edit', $p->id) }}" 
                                       class="w-full max-w-[110px] text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white py-2.5 rounded-xl text-xs font-black hover:from-blue-700 hover:to-blue-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center gap-2 tracking-wide">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                        EDIT
                                    </a>
                                    
                                    <form action="{{ route('admin.pendaftaranlsp.destroy', $p->id) }}" method="POST" class="w-full max-w-[110px]" onsubmit="return confirm('⚠️ PERINGATAN!\n\nAnda akan menghapus permanen data:\n{{ $p->nama }}\n\nData yang dihapus tidak dapat dikembalikan. Lanjutkan?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-2.5 rounded-xl text-xs font-black hover:from-red-700 hover:to-red-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center gap-2 tracking-wide">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                            HAPUS
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="py-32 text-center">
                                <div class="flex flex-col items-center">
                                    <div class="w-28 h-28 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mb-6 shadow-inner">
                                        <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-gray-700 font-black text-2xl mb-3 tracking-tight">Database Kosong</h3>
                                    <p class="text-gray-500 text-sm font-medium max-w-md">Belum ada peserta yang terdaftar dalam sistem. Data akan muncul setelah pendaftaran pertama dilakukan.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <div id="noResults" class="hidden py-32 text-center bg-gradient-to-b from-white to-gray-50">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mb-6 shadow-inner">
                        <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-700 text-xl font-black mb-2">Pencarian Tidak Ditemukan</p>
                    <p class="text-gray-500 text-sm font-medium">Coba gunakan kata kunci yang berbeda atau filter lainnya</p>
                </div>
            </div>
        </div>

        <!-- Enhanced Mobile Card View -->
        <div class="lg:hidden space-y-5" id="mobileView">
            @forelse ($data as $p)
            <div class="mobile-card bg-white rounded-2xl shadow-xl overflow-hidden card-elevated" 
                 data-nama="{{ strtolower($p->nama) }} {{ strtolower($p->nik) }} {{ strtolower($p->email) }}" 
                 data-skema="{{ $p->skema }}">
                
                <!-- Enhanced Header Card -->
                <div class="gradient-primary p-5 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
                    
                    <div class="flex items-center gap-4 relative z-10">
                        <div class="h-16 w-16 rounded-2xl bg-white/20 backdrop-blur-md flex items-center justify-center text-white font-black text-2xl shadow-xl border-2 border-white/40 ring-4 ring-white/10">
                            {{ substr($p->nama, 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-black text-xl leading-tight mb-1.5">{{ $p->nama }}</h3>
                            <div class="inline-flex items-center gap-1.5 bg-white/20 backdrop-blur-sm px-3 py-1 rounded-lg border border-white/30">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs font-bold">NIK: {{ $p->nik }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Content -->
                <div class="p-5 space-y-5">
                    <!-- Contact Info -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl p-4 space-y-3 border border-gray-200">
                        <div class="flex items-center gap-2 mb-2">
                            <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <div class="data-label mb-0">Informasi Kontak</div>
                        </div>
                        <div class="flex items-start gap-2 pl-1">
                            <svg class="w-4 h-4 text-primary mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs font-bold text-primary break-all">{{ $p->email }}</p>
                                <p class="text-xs text-gray-500 italic mt-1">Gmail: {{ $p->email_google ?? '-' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 pl-1">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                            <p class="text-xs font-black text-gray-800">{{ $p->telepon }}</p>
                        </div>
                    </div>

                    <!-- Personal Details -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="data-label mb-0">Informasi Personal</div>
                        </div>
                        
                        <div>
                            <div class="data-label">Tempat, Tanggal Lahir</div>
                            <div class="flex items-center gap-2 text-sm font-bold text-gray-800">
                                <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $p->tempat_lahir }}, {{ \Carbon\Carbon::parse($p->tanggal_lahir)->format('d M Y') }}
                            </div>
                        </div>
                        
                        <div>
                            <div class="data-label">Alamat Lengkap</div>
                            <div class="text-xs text-gray-700 bg-white p-3 rounded-xl leading-relaxed border-2 border-gray-100">
                                {{ $p->alamat }}
                            </div>
                        </div>
                    </div>

                    <!-- Academic Info -->
                    <div class="border-t-2 border-gray-100 pt-5">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-8 h-8 rounded-lg bg-yellow-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"></path>
                                </svg>
                            </div>
                            <div class="data-label mb-0">Informasi Akademik</div>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <div>
                                <div class="data-label">Program Studi</div>
                                <div class="text-xs font-black text-blue-700 bg-gradient-to-br from-blue-50 to-blue-100 px-3 py-2 rounded-xl uppercase border-2 border-blue-200">
                                    {{ $p->program_studi }}
                                </div>
                            </div>
                            <div>
                                <div class="data-label">Batch</div>
                                <div class="text-xs font-black text-gray-800 bg-gradient-to-br from-gray-100 to-gray-200 px-3 py-2 rounded-xl border-2 border-gray-300 flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $p->batch }}
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="data-label">Skema Sertifikasi</div>
                            <div class="inline-flex items-center gap-2 badge-shimmer text-white px-4 py-2.5 rounded-xl font-black text-sm shadow-lg border-2 border-yellow-600 uppercase tracking-wider">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                {{ $p->skema }}
                            </div>
                        </div>
                    </div>

                    <!-- Files -->
                    <div class="border-t-2 border-gray-100 pt-5">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="data-label mb-0">Dokumen Terlampir</div>
                        </div>
                        
                        <div class="grid grid-cols-4 gap-2.5">
                            @php
                                $fileList = [
                                    ['key' => 'transkrip_nilai', 'short' => 'TR', 'name' => 'Transkrip'],
                                    ['key' => 'sertifikat_otjt', 'short' => 'OT', 'name' => 'OTJT'],
                                    ['key' => 'reference_letter', 'short' => 'RF', 'name' => 'Ref'],
                                    ['key' => 'ktp_file', 'short' => 'KP', 'name' => 'KTP'],
                                    ['key' => 'cv', 'short' => 'CV', 'name' => 'CV'],
                                    ['key' => 'kartu_mahasiswa', 'short' => 'KM', 'name' => 'KTM'],
                                    ['key' => 'pas_foto', 'short' => 'FT', 'name' => 'Foto'],
                                ];
                            @endphp

                            @foreach($fileList as $file)
                                @if($p->{$file['key']})
                                    <a href="{{ asset('storage/' . $p->{$file['key']}) }}" target="_blank" 
                                       class="doc-badge aspect-square flex flex-col items-center justify-center bg-gradient-to-br from-white to-gray-50 text-primary rounded-xl border-2 border-primary/30 hover:bg-primary hover:text-white shadow-md p-2" 
                                       title="{{ $file['name'] }}">
                                        <span class="text-sm font-black">{{ $file['short'] }}</span>
                                        <span class="text-[9px] mt-1 font-bold opacity-80">{{ $file['name'] }}</span>
                                    </a>
                                @else
                                    <div class="aspect-square flex flex-col items-center justify-center bg-gray-50 text-gray-300 rounded-xl border-2 border-dashed border-gray-200 cursor-not-allowed p-2" 
                                         title="{{ $file['name'] }}: Tidak Ada">
                                        <span class="text-sm font-bold opacity-40">{{ $file['short'] }}</span>
                                        <span class="text-[9px] mt-1 font-semibold opacity-30">{{ $file['name'] }}</span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-3 pt-2">
                        <a href="{{ route('admin.pendaftaranlsp.edit', $p->id) }}" 
                           class="flex-1 text-center bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-xl text-sm font-black hover:from-blue-700 hover:to-blue-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            EDIT DATA
                        </a>
                        
                        <form action="{{ route('admin.pendaftaranlsp.destroy', $p->id) }}" method="POST" class="flex-1" onsubmit="return confirm('⚠️ PERINGATAN!\n\nAnda akan menghapus permanen data:\n{{ $p->nama }}\n\nData yang dihapus tidak dapat dikembalikan. Lanjutkan?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white py-3 rounded-xl text-sm font-black hover:from-red-700 hover:to-red-800 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                                HAPUS
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-white rounded-2xl shadow-xl p-16 text-center card-elevated">
                <div class="w-28 h-28 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-14 h-14 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                </div>
                <h3 class="text-gray-700 font-black text-2xl mb-3 tracking-tight">Database Kosong</h3>
                <p class="text-gray-500 text-sm font-medium max-w-md mx-auto">Belum ada peserta yang terdaftar dalam sistem. Data akan muncul setelah pendaftaran pertama dilakukan.</p>
            </div>
            @endforelse

            <div id="noResultsMobile" class="hidden bg-white rounded-2xl shadow-xl p-16 text-center card-elevated">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <p class="text-gray-700 text-xl font-black mb-2">Pencarian Tidak Ditemukan</p>
                <p class="text-gray-500 text-sm font-medium">Coba gunakan kata kunci yang berbeda atau filter lainnya</p>
            </div>
        </div>
    </main>

    <!-- Enhanced Footer Info -->
  

    <script>
        const searchBox = document.getElementById('searchBox');
        const skemaFilter = document.getElementById('skemaFilter');
        const tableBody = document.getElementById('tableBody');
        const noResults = document.getElementById('noResults');
        const mobileView = document.getElementById('mobileView');
        const noResultsMobile = document.getElementById('noResultsMobile');

        function filterTable() {
            const searchTerm = searchBox.value.toLowerCase().trim();
            const selectedSkema = skemaFilter.value;
            
            // Desktop table
            const rows = tableBody.querySelectorAll('tr');
            let foundCount = 0;

            rows.forEach(row => {
                const searchData = row.getAttribute('data-nama');
                const skemaData = row.getAttribute('data-skema');

                if (!searchData) return; // Skip empty state row

                const matchesSearch = searchData.includes(searchTerm);
                const matchesSkema = (selectedSkema === 'all' || skemaData === selectedSkema);

                if (matchesSearch && matchesSkema) {
                    row.style.display = '';
                    foundCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            noResults.classList.toggle('hidden', foundCount > 0);

            // Mobile cards
            if (mobileView) {
                const cards = mobileView.querySelectorAll('[data-nama]');
                let foundCountMobile = 0;

                cards.forEach(card => {
                    const searchData = card.getAttribute('data-nama');
                    const skemaData = card.getAttribute('data-skema');

                    const matchesSearch = searchData.includes(searchTerm);
                    const matchesSkema = (selectedSkema === 'all' || skemaData === selectedSkema);

                    if (matchesSearch && matchesSkema) {
                        card.style.display = '';
                        foundCountMobile++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (noResultsMobile) {
                    noResultsMobile.classList.toggle('hidden', foundCountMobile > 0);
                }
            }
        }

        // Event listeners with debounce for better performance
        let searchTimeout;
        searchBox.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(filterTable, 300);
        });
        
        skemaFilter.addEventListener('change', filterTable);

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading animation on refresh
        const refreshBtn = document.querySelector('button[onclick="location.reload()"]');
        if (refreshBtn) {
            refreshBtn.addEventListener('click', function(e) {
                this.innerHTML = `
                    <svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    MEMUAT...
                `;
                this.disabled = true;
            });
        }

        // Enhanced form validation
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn && !submitBtn.disabled) {
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
                }
            });
        });

        // Auto-focus search on page load
        window.addEventListener('load', function() {
            if (searchBox && window.innerWidth > 768) {
                searchBox.focus();
            }
        });
    </script>
</body>
</html>