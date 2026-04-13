<?php
// login.php
session_start();

// Simulasi logika login sederhana
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    // Contoh validasi sederhana (nanti bisa disambungkan ke database)
    if ($nim == '2021010001' && $password == 'password123') {
        $_SESSION['user'] = $nim;
        header('Location: index.php'); // Redirect ke dashboard jika sukses
        exit;
    } else {
        $error = "NIM atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Akademik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-sm border border-gray-200">
        <div class="text-center mb-8">
            <div class="bg-slate-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                <i class="fas fa-graduation-cap text-white text-3xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Sistem KRS & KHS</h2>
            <p class="text-gray-500 text-sm mt-1">Silakan masuk untuk melanjutkan</p>
        </div>

        <?php if (isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4 text-sm text-center">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="login.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">NIM</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                        <i class="fas fa-user text-sm"></i>
                    </span>
                    <input type="text" name="nim" required placeholder="Masukkan NIM" 
                        class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-1">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                        <i class="fas fa-lock text-sm"></i>
                    </span>
                    <input type="password" name="password" required placeholder="Masukkan Password" 
                        class="w-full pl-10 pr-10 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 cursor-pointer hover:text-gray-600">
                        <i class="fas fa-eye text-sm"></i>
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <a href="#" class="text-xs text-blue-600 hover:underline">Lupa Password?</a>
            </div>

            <button type="submit" 
                class="w-full bg-slate-800 text-white font-bold py-2.5 rounded-lg shadow-md hover:bg-slate-900 transition-all active:scale-[0.98]">
                LOGIN
            </button>
        </form>

        <footer class="mt-8 text-center text-gray-400 text-xs">
            &copy; 2026 Academic Information System
        </footer>
    </div>

</body>
</html>