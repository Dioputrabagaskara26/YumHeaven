<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - YumHeaven</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5EBE0;
        }
        .nav-item {
            @apply flex items-center gap-2 p-4 hover:bg-[#E3D5CA] rounded-lg cursor-pointer;
        }
        .nav-item.active {
            @apply bg-[#D5BDAF] text-[#7F5539];
        }
        .stats-card {
            @apply p-6 rounded-3xl shadow-lg;
        }
        .history-item {
            @apply flex justify-between items-center p-4 bg-white rounded-2xl shadow mb-4;
        }
    </style>
</head>
<body>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-[100px] bg-white p-4 flex flex-col items-center gap-8">
            <a href="/" class="text-2xl font-bold text-[#7F5539]">
                <img src="{{ asset('images/logo.png') }}" alt="YumHeaven" class="w-12 h-12">
            </a>
            <nav class="flex flex-col gap-4 flex-grow">
                <div class="nav-item active">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div class="nav-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-4xl font-bold text-[#7F5539]">Halaman Admin</h1>
                    <p class="text-gray-600">Sabtu, 19 Jul 25</p>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari" class="pl-4 pr-10 py-2 rounded-full bg-[#D5BDAF] bg-opacity-50 focus:outline-none focus:ring-2 focus:ring-[#7F5539]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute right-3 top-2.5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex gap-8 mb-8 text-gray-600">
                <a href="#" class="border-b-2 border-[#7F5539] text-[#7F5539] pb-2">Dashboard</a>
                <a href="#" class="pb-2">Manajemen Pengguna</a>
                <a href="#" class="pb-2">Manajemen Resep</a>
                <a href="#" class="pb-2">Fitur Premium</a>
                <a href="#" class="pb-2">Komentar&Ulasan</a>
            </nav>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-3 gap-8 mb-12">
                <div class="stats-card bg-[#D5BDAF] bg-opacity-50">
                    <div class="flex flex-col">
                        <span class="text-gray-600 mb-4">Pengguna Saat Ini</span>
                        <span class="text-5xl font-bold mb-4">100</span>
                        <a href="#" class="text-gray-600 bg-gray-700 bg-opacity-10 rounded-full px-4 py-2 text-sm w-fit">Selengkapnya</a>
                    </div>
                </div>
                <div class="stats-card bg-[#E3D5CA]">
                    <div class="flex flex-col">
                        <span class="text-gray-600 mb-4">Pengguna Premium</span>
                        <span class="text-5xl font-bold mb-4">35</span>
                        <a href="#" class="text-gray-600 bg-gray-700 bg-opacity-10 rounded-full px-4 py-2 text-sm w-fit">Selengkapnya</a>
                    </div>
                </div>
                <div class="stats-card bg-[#FFB5A7]">
                    <div class="flex flex-col">
                        <span class="text-gray-600 mb-4">Jumlah Resep</span>
                        <span class="text-5xl font-bold mb-4">450</span>
                        <a href="#" class="text-gray-600 bg-gray-700 bg-opacity-10 rounded-full px-4 py-2 text-sm w-fit">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- History Section -->
            <section>
                <h2 class="text-2xl font-bold text-[#7F5539] mb-6">History</h2>
                <div class="space-y-4">
                    <div class="history-item">
                        <div>
                            <h3 class="font-semibold">Mengubah Manajemen Resep</h3>
                            <p class="text-gray-600">Ming, 20 Jul 25</p>
                        </div>
                        <span class="text-gray-600">13.15</span>
                    </div>
                    <div class="history-item">
                        <div>
                            <h3 class="font-semibold">Menambah Fitur Premium</h3>
                            <p class="text-gray-600">Sen, 21 Jul 25</p>
                        </div>
                        <span class="text-gray-600">00.11</span>
                    </div>
                    <div class="history-item">
                        <div>
                            <h3 class="font-semibold">Mengubah Manajemen Pengguna</h3>
                            <p class="text-gray-600">Sel, 22 Jul 25</p>
                        </div>
                        <span class="text-gray-600">08.30</span>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
