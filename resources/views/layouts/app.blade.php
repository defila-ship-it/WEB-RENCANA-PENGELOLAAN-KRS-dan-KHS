<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portal Akademik' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex h-screen overflow-hidden">

    <aside class="w-64 bg-slate-800 text-white flex flex-col shrink-0">
        <div class="p-6 text-lg font-bold border-b border-slate-700 flex items-center gap-2">
            <i class="fas fa-graduation-cap"></i> POLIBATAM
        </div>

        <nav class="flex-1 p-4 space-y-2">
            <a href="/dashboard" class="flex items-center p-3 {{ Request::is('dashboard') ? 'bg-blue-600' : 'hover:bg-slate-700' }} rounded-lg transition">
                <i class="fas fa-th-large mr-3 w-5"></i> Dashboard
            </a>

            <a href="/krs" class="flex items-center p-3 {{ Request::is('krs') ? 'bg-blue-600' : 'hover:bg-slate-700' }} rounded-lg transition">
                <i class="fas fa-edit mr-3 w-5"></i> KRS
            </a>

            <a href="/khs" class="flex items-center p-3 {{ Request::is('khs') ? 'bg-blue-600' : 'hover:bg-slate-700' }} rounded-lg transition">
                <i class="fas fa-file-alt mr-3 w-5"></i> KHS
            </a>

            <a href="/jadwal" class="flex items-center p-3 {{ Request::is('jadwal') ? 'bg-blue-600' : 'hover:bg-slate-700' }} rounded-lg transition">
                <i class="fas fa-calendar-alt mr-3 w-5"></i> Jadwal Kuliah
            </a>

            <a href="/profil" class="flex items-center p-3 {{ Request::is('profil') ? 'bg-blue-600' : 'hover:bg-slate-700' }} rounded-lg transition">
                <i class="fas fa-user mr-3 w-5"></i> Profil
            </a>
        </nav>

        <div class="p-4 border-t border-slate-700">
            <a href="/logout" class="flex items-center p-3 text-red-400 hover:bg-red-500 hover:text-white rounded-lg transition font-bold group">
                <i class="fas fa-sign-out-alt mr-3 w-5 group-hover:translate-x-1 transition-transform"></i> Logout
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center">
            <h1 class="font-bold text-gray-700 uppercase tracking-tight">{{ $title }}</h1>
            <div class="flex items-center gap-3">
                <div class="text-right mr-2">
                    <span class="block text-sm font-bold text-gray-800 leading-none">Ema Merlisa</span>
                    <span class="text-[10px] text-gray-400 font-medium">2021010001</span>
                </div>
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold shadow-inner">
                    AS
                </div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-8">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </main>
    </div>

</body>
</html>