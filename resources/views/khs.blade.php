<?php
require_once 'layout.php';
ob_start();

// Simulasi data Nilai
$data_khs = [
    ['no' => 1, 'kode' => 'IF101', 'nama' => 'Pemrograman Web', 'nilai' => 'A', 'sks' => 3, 'bobot' => 12.00],
    ['no' => 2, 'kode' => 'IF102', 'nama' => 'Basis Data', 'nilai' => 'B+', 'sks' => 3, 'bobot' => 10.50],
    ['no' => 3, 'kode' => 'IF103', 'nama' => 'Sistem Informasi', 'nilai' => 'A', 'sks' => 3, 'bobot' => 12.00],
    ['no' => 4, 'kode' => 'UM101', 'nama' => 'Pendidikan Pancasila', 'nilai' => 'A-', 'sks' => 2, 'bobot' => 7.40],
    ['no' => 5, 'kode' => 'UM102', 'nama' => 'Bahasa Inggris', 'nilai' => 'B', 'sks' => 2, 'bobot' => 6.00],
];
?>

<div class="flex justify-between items-center mb-6">
    <div class="flex items-center gap-3">
        <label class="text-sm font-semibold">Pilih Semester:</label>
        <select class="border rounded px-3 py-1.5 text-sm outline-none focus:ring-2 focus:ring-blue-500">
            <option>Semester 3 (2023/2024)</option>
            <option>Semester 2 (2022/2023)</option>
            <option>Semester 1 (2022/2023)</option>
        </select>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border overflow-hidden">
    <table class="w-full text-sm text-left">
        <thead class="bg-gray-50 border-b text-gray-700 uppercase text-xs font-bold">
            <tr>
                <th class="p-4 text-center">No</th>
                <th class="p-4">Kode MK</th>
                <th class="p-4">Nama Mata Kuliah</th>
                <th class="p-4 text-center">Nilai</th>
                <th class="p-4 text-center">SKS</th>
                <th class="p-4 text-center">Bobot</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            <?php foreach ($data_khs as $row): ?>
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 text-center"><?= $row['no'] ?></td>
                <td class="p-4 font-mono font-bold text-blue-600"><?= $row['kode'] ?></td>
                <td class="p-4"><?= $row['nama'] ?></td>
                <td class="p-4 text-center font-bold"><?= $row['nilai'] ?></td>
                <td class="p-4 text-center"><?= $row['sks'] ?></td>
                <td class="p-4 text-center"><?= number_format($row['bobot'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div class="grid grid-cols-3 divide-x border-t bg-gray-50">
        <div class="p-4 text-center">
            <p class="text-xs text-gray-500 uppercase font-bold">Jumlah SKS</p>
            <p class="text-xl font-bold">13</p>
        </div>
        <div class="p-4 text-center">
            <p class="text-xs text-gray-500 uppercase font-bold">IPS Semester</p>
            <p class="text-xl font-bold text-blue-600">3.67</p>
        </div>
        <div class="p-4 text-center">
            <p class="text-xs text-gray-500 uppercase font-bold">IPK</p>
            <p class="text-xl font-bold text-green-600">3.68</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
renderLayout('Kartu Hasil Studi (KHS)', $content);
?>