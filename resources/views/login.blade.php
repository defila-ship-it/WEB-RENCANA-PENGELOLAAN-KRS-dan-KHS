<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Portal Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-sm border border-gray-200">
        <div class="text-center mb-8">
            <div class="bg-slate-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                <i class="fas fa-graduation-cap text-white text-3xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Sistem Akademik</h2>
            <p class="text-gray-500 text-sm mt-1">Gunakan NIM untuk masuk</p>
        </div>

        <form action="/dashboard" method="GET" class="space-y-5">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">NIM</label>
                <input type="text" placeholder="Masukkan NIM" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Password</label>
                <input type="password" placeholder="••••••••" class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none transition">
            </div>

            <button type="submit" class="w-full bg-slate-800 text-white font-bold py-3 rounded-lg shadow-md hover:bg-slate-900 transition-all active:scale-95">
                MASUK SEKARANG
            </button>
        </form>
    </div>
</body>
</html>