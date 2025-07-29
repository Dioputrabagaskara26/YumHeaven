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
            @apply flex items-center justify-center w-12 h-12 hover:bg-[#E3D5CA] rounded-lg cursor-pointer;
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
        <aside class="w-[72px] bg-white rounded-3xl p-4 flex flex-col items-center gap-8 fixed h-[96vh] m-3 shadow-sm">
            <a href="/" class="text-[#7F5539]">
                <!-- Home icon -->
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L2 12h3v8h6v-6h2v6h6v-8h3L12 2z"/>
                </svg>
            </a>
            <nav class="flex flex-col gap-6">
                <!-- User icon -->
                <a href="#" class="nav-item" title="Users">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </a>
                <!-- Cooking pot icon -->
                <a href="#" class="nav-item" title="Recipes">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 10v2c0 5.5 4.5 10 10 10s10-4.5 10-10v-2H3zm0-2h20V6c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v2z"/>
                    </svg>
                </a>
                <!-- Crown icon -->
                <a href="#" class="nav-item" title="Premium">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5 16L3 5l5.5 5L12 4l3.5 6L21 5l-2 11H5zm14 3c0 .6-.4 1-1 1H6c-.6 0-1-.4-1-1v-1h14v1z"/>
                    </svg>
                </a>
                <!-- Chat icon -->
                <a href="#" class="nav-item" title="Comments">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
                    </svg>
                </a>
                <!-- Grid icon -->
                <a href="#" class="nav-item" title="Apps">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
                    </svg>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 ml-[88px] p-8">
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
                <!-- Pengguna Saat Ini -->
                <div class="bg-[#A8D5BA] p-6 rounded-3xl">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-gray-700 text-sm">Pengguna Saat Ini</span>
                        </div>
                        <span class="text-5xl font-bold text-gray-800 mb-4">100</span>
                        <button class="bg-black bg-opacity-10 text-gray-700 rounded-full px-4 py-1.5 text-xs w-fit">
                            Selengkapnya
                        </button>
                    </div>
                </div>

                <!-- Pengguna Premium -->
                <div class="bg-[#F3D9B1] p-6 rounded-3xl">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span class="text-gray-700 text-sm">Pengguna Premium</span>
                        </div>
                        <span class="text-5xl font-bold text-gray-800 mb-4">35</span>
                        <button class="bg-black bg-opacity-10 text-gray-700 rounded-full px-4 py-1.5 text-xs w-fit">
                            Selengkapnya
                        </button>
                    </div>
                </div>

                <!-- Jumlah Resep -->
                <div class="bg-[#F7CAC9] p-6 rounded-3xl">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3v18m-6-9h.01M9 3v18m6-9h.01M3 3v18h18V3H3z" />
                            </svg>
                            <span class="text-gray-700 text-sm">Jumlah Resep</span>
                        </div>
                        <span class="text-5xl font-bold text-gray-800 mb-4">450</span>
                        <button class="bg-black bg-opacity-10 text-gray-700 rounded-full px-4 py-1.5 text-xs w-fit">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </div>

            <!-- History Section -->
            <section>
                <h2 class="text-2xl font-bold text-[#7F5539] mb-6">History</h2>
                <div class="space-y-4">
                    <div class="bg-white rounded-3xl p-4 flex justify-between items-center shadow-sm">
                        <div>
                            <h3 class="text-[#7F5539] font-medium mb-1">Mengubah Manajemen Resep</h3>
                            <p class="text-gray-500 text-sm">Ming, 20 Jul 25</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-500 text-sm">13.15</span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-4 flex justify-between items-center shadow-sm">
                        <div>
                            <h3 class="text-[#7F5539] font-medium mb-1">Menambah Fitur Premium</h3>
                            <p class="text-gray-500 text-sm">Sen, 21 Jul 25</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-500 text-sm">00.11</span>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-3xl p-4 flex justify-between items-center shadow-sm">
                        <div>
                            <h3 class="text-[#7F5539] font-medium mb-1">Mengubah Manajemen Pengguna</h3>
                            <p class="text-gray-500 text-sm">Sel, 22 Jul 25</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-500 text-sm">08.30</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
