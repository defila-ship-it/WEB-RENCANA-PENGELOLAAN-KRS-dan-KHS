<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Akademik POLIBATAM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen px-4">

    <div class="bg-white p-8 rounded-3xl shadow-2xl w-full max-w-sm border border-gray-100">
        <div class="text-center mb-8">
            <div class="bg-slate-800 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg rotate-3 group-hover:rotate-0 transition-transform">
                <i class="fas fa-graduation-cap text-white text-3xl"></i>
            </div>
            <h2 class="text-2xl font-extrabold text-gray-800 tracking-tight">Portal Akademik</h2>
            <p class="text-gray-400 text-sm mt-1">Silakan masuk dengan akun Anda</p>
        </div>

        <form action="{{ url('/dashboard') }}" method="GET" class="space-y-5">
            {{-- Gunakan method="GET" sementara agar bisa langsung tembus ke dashboard tanpa database --}}
            
            <div>
                <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-1.5 ml-1">NIM</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400">
                        <i class="fas fa-user text-sm"></i>
                    </span>
                    <input type="text" name="nim" required placeholder="Masukkan NIM Anda" 
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all placeholder:text-gray-300">
                </div>
            </div>

            <div>
                <div class="flex justify-between items-center mb-1.5 ml-1">
                    <label class="block text-[10px] font-bold text-gray-500 uppercase tracking-widest">Password</label>
                    <a href="#" class="text-[10px] font-bold text-blue-600 hover:underline">Lupa?</a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-gray-400">
                        <i class="fas fa-lock text-sm"></i>
                    </span>
                    <input type="password" name="password" required placeholder="••••••••" 
                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all placeholder:text-gray-300">
                </div>
            </div>

            <button type="submit" 
                class="w-full bg-slate-800 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-slate-200 hover:bg-slate-900 hover:shadow-xl transition-all active:scale-[0.98] mt-2">
                MASUK SEKARANG
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-[10px] text-gray-400 uppercase tracking-widest font-medium">
                &copy; 2026 Politeknik Negeri Batam
            </p>
        </div>
    </div>

</body>
</html>