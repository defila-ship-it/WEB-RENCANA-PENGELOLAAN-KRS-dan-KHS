<?php
require_once 'layout.php';
ob_start(); // Memulai buffer konten
?>

<div class="mb-8">
    <h2 class="text-2xl font-bold text-gray-800 tracking-tight">Dashboard</h2>
    <p class="text-sm text-gray-500">Selamat datang kembali di portal akademik Anda.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
    <?php
    $stats = [
        ['label' => 'Total SKS', 'val' => '21', 'icon' => 'fa-book', 'bg' => 'bg-blue-50', 'text' => 'text-blue-600'],
        ['label' => 'IPS Semester', 'val' => '3.75', 'icon' => 'fa-chart-line', 'bg' => 'bg-green-50', 'text' => 'text-green-600'],
        ['label' => 'IPK', 'val' => '3.68', 'icon' => 'fa-award', 'bg' => 'bg-yellow-50', 'text' => 'text-yellow-600'],
        ['label' => 'Status', 'val' => 'Aktif', 'icon' => 'fa-user-check', 'bg' => 'bg-purple-50', 'text' => 'text-purple-600'],
    ];
    foreach($stats as $s): ?>
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
        <div class="<?= $s['bg'] ?> <?= $s['text'] ?> w-12 h-12 rounded-xl flex items-center justify-center mb-4 text-xl">
            <i class="fas <?= $s['icon'] ?>"></i>
        </div>
        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1"><?= $s['label'] ?></p>
        <h3 class="text-2xl font-extrabold text-gray-800"><?= $s['val'] ?></h3>
    </div>
    <?php endforeach; ?>
</div>

<div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
    <div class="flex items-center gap-2 mb-6">
        <div class="w-8 h-8 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center">
            <i class="fas fa-bullhorn text-sm"></i>
        </div>
        <h4 class="font-bold text-gray-800">Notifikasi Terbaru</h4>
    </div>
    <ul class="space-y-4">
        <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50 transition">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full"></div>
            <div>
                <p class="text-sm font-semibold text-gray-800">Pengisian KRS Semester Genap 2023/2024</p>
                <p class="text-xs text-gray-500">Batas akhir pengisian adalah 15 Februari 2024. Harap segera lengkapi.</p>
            </div>
        </li>
        <li class="flex items-start gap-4 p-3 rounded-lg hover:bg-gray-50 transition border-t">
            <div class="w-2 h-2 mt-2 bg-blue-500 rounded-full"></div>
            <div>
                <p class="text-sm font-semibold text-gray-800">Nilai Semester Ganjil</p>
                <p class="text-xs text-gray-500">Nilai semester sebelumnya sudah dapat Anda akses pada menu KHS.</p>
            </div>
        </li>
    </ul>
</div>

<?php
$html_content = ob_get_clean(); // Mengambil isi buffer
renderLayout('Dashboard', $html_content); // Menjalankan layout
?>