<?php
// layout.php
function renderLayout($title, $content) {
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?> - Sistem Akademik</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body class="bg-gray-100 flex h-screen overflow-hidden text-gray-800">

        <aside class="w-64 bg-slate-800 text-white flex flex-col shrink-0 shadow-xl">
            <div class="p-6 text-lg font-bold border-b border-slate-700 flex items-center gap-3">
                <i class="fas fa-graduation-cap text-blue-400"></i>
                <span>Sistem KRS & KHS</span>
            </div>
            <nav class="flex-1 p-4 space-y-2">
                <?php
                $menu = [
                    'index.php' => ['Dashboard', 'fa-th-large'],
                    'krs.php'   => ['KRS', 'fa-edit'],
                    'khs.php'   => ['KHS', 'fa-file-alt'],
                    'jadwal.php'=> ['Jadwal Kuliah', 'fa-calendar-alt'],
                    'profil.php'=> ['Profil', 'fa-user']
                ];
                foreach ($menu as $url => $data): 
                    $active = ($current_page == $url) ? 'bg-blue-600 shadow-md' : 'hover:bg-slate-700 opacity-70 hover:opacity-100';
                ?>
                <a href="<?php echo $url; ?>" class="flex items-center p-3 rounded-lg transition-all <?php echo $active; ?>">
                    <i class="fas <?php echo $data[1]; ?> mr-3 w-5 text-center"></i>
                    <span class="text-sm font-medium"><?php echo $data[0]; ?></span>
                </a>
                <?php endforeach; ?>
            </nav>
            <div class="p-4 border-t border-slate-700">
                <a href="login.php" class="flex items-center p-3 text-red-400 hover:bg-red-500 hover:text-white rounded-lg transition">
                    <i class="fas fa-sign-out-alt mr-3"></i> <span class="text-sm font-bold">Logout</span>
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm px-8 py-4 flex justify-between items-center border-b border-gray-200">
                <div class="relative w-64">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                        <i class="fas fa-search text-sm"></i>
                    </span>
                    <input type="text" placeholder="Cari data..." class="w-full bg-gray-50 border border-gray-200 rounded-full py-1.5 pl-10 pr-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="flex items-center gap-6">
                    <button class="text-gray-400 hover:text-blue-500 relative transition">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="flex items-center gap-3 border-l pl-6">
                        <div class="text-right">
                            <p class="text-sm font-bold text-gray-700 leading-none">Andi Saputra</p>
                            <p class="text-[10px] text-gray-500 font-medium uppercase tracking-tighter">Mahasiswa Aktif</p>
                        </div>
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center font-bold shadow-inner">
                            AS
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-6xl mx-auto">
                    <?php echo $content; ?>
                </div>
            </main>
        </div>

    </body>
    </html>
    <?php
}
?>