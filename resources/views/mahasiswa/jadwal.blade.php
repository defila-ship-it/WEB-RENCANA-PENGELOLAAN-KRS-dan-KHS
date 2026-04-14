<?php
require_once 'layout.php';
ob_start();
?>

<div class="bg-white rounded-xl shadow-sm border overflow-hidden">
    <div class="p-4 bg-gray-50 border-b">
        <h3 class="font-bold text-gray-700 uppercase text-xs">Semester Genap 2023/2024</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-xs font-bold uppercase text-gray-600">
                    <th class="border p-3 w-32">Waktu</th>
                    <th class="border p-3">Senin</th>
                    <th class="border p-3">Selasa</th>
                    <th class="border p-3">Rabu</th>
                    <th class="border p-3">Kamis</th>
                    <th class="border p-3">Jumat</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="h-24">
                    <td class="border p-2 bg-gray-50 font-bold text-center">08:00 - 09:40</td>
                    <td class="border p-2">
                        <div class="bg-blue-100 border-l-4 border-blue-500 p-2 rounded text-xs">
                            <p class="font-bold">Pemrograman Web</p>
                            <p class="text-gray-600">R. 301</p>
                        </div>
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                         <div class="bg-purple-100 border-l-4 border-purple-500 p-2 rounded text-xs">
                            <p class="font-bold">Sistem Informasi</p>
                            <p class="text-gray-600">R. 302</p>
                        </div>
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                </tr>
                <tr class="h-24">
                    <td class="border p-2 bg-gray-50 font-bold text-center">10:00 - 11:40</td>
                    <td class="border p-2"></td>
                    <td class="border p-2">
                        <div class="bg-green-100 border-l-4 border-green-500 p-2 rounded text-xs">
                            <p class="font-bold">Basis Data</p>
                            <p class="text-gray-600">R. 205</p>
                        </div>
                    </td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                    <td class="border p-2"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
$content = ob_get_clean();
renderLayout('Jadwal Kuliah', $content);
?>