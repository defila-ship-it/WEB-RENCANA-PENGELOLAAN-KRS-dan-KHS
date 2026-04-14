<?php
require_once 'layout.php';
ob_start();

// Simulasi Data Mata Kuliah
$matakuliah = [
    ['kode' => 'IF101', 'nama' => 'Pemrograman Web', 'sks' => 3, 'checked' => true],
    ['kode' => 'IF102', 'nama' => 'Basis Data', 'sks' => 3, 'checked' => true],
    ['kode' => 'IF103', 'nama' => 'Sistem Informasi', 'sks' => 3, 'checked' => true],
    ['kode' => 'IF104', 'nama' => 'AI Dasar', 'sks' => 2, 'checked' => false],
    ['kode' => 'IF105', 'nama' => 'Jaringan Komputer', 'sks' => 3, 'checked' => false],
];
?>

<div class="flex justify-between items-end mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800 tracking-tight">Kartu Rencana Studi (KRS)</h2>
        <p class="text-sm text-gray-500">Semester Genap 2023/2024</p>
    </div>
    <div class="text-right">
        <span class="text-xs font-bold text-gray-400 uppercase block mb-1">Total Terpilih</span>
        <span class="text-xl font-extrabold text-blue-600">9 SKS</span>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <table class="w-full text-left text-sm">
        <thead class="bg-gray-50 border-b border-gray-100 text-gray-500 font-bold uppercase text-[10px] tracking-widest">
            <tr>
                <th class="p-5 text-center w-20">Pilih</th>
                <th class="p-5">Kode MK</th>
                <th class="p-5">Nama Mata Kuliah</th>
                <th class="p-5 text-center">SKS</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-50">
            <?php foreach ($matakuliah as $mk): ?>
            <tr class="hover:bg-blue-50/30 transition group">
                <td class="p-5 text-center">
                    <input type="checkbox" <?php echo $mk['checked'] ? 'checked' : ''; ?> class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                </td>
                <td class="p-5 font-mono font-bold text-gray-700"><?php echo $mk['kode']; ?></td>
                <td class="p-5 font-medium text-gray-800"><?php echo $mk['nama']; ?></td>
                <td class="p-5 text-center">
                    <span class="bg-gray-100 px-3 py-1 rounded-full text-xs font-bold text-gray-600"><?php echo $mk['sks']; ?> SKS</span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div class="p-6 bg-gray-50 border-t border-gray-100 flex justify-end gap-3">
        <button class="px-6 py-2 text-sm font-bold text-gray-500 hover:text-gray-700 transition">BATAL</button>
        <button class="bg-slate-800 text-white px-8 py-2 rounded-xl text-sm font-bold shadow-lg hover:bg-slate-900 active:scale-95 transition-all">
            SIMPAN KRS
        </button>
    </div>
</div>

<?php
$html_content = ob_get_clean();
renderLayout('KRS', $html_content);
?>