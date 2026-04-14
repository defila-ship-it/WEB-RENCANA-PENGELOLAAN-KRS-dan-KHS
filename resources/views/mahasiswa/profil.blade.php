<?php
require_once 'layout.php';
ob_start();
?>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div class="lg:col-span-1 bg-white rounded-xl shadow-sm border p-6 text-center">
        <div class="relative inline-block">
            <div class="w-32 h-32 bg-gray-200 rounded-2xl mx-auto flex items-center justify-center overflow-hidden border-4 border-white shadow-md">
                <i class="fas fa-user text-6xl text-gray-400"></i>
            </div>
            <button class="absolute bottom-0 right-0 bg-blue-600 text-white p-2 rounded-lg hover:bg-blue-700 transition shadow">
                <i class="fas fa-camera text-xs"></i>
            </button>
        </div>
        
        <div class="mt-6 space-y-4 text-left border-t pt-6">
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">NIM</label>
                <p class="font-bold text-gray-800">2021010001</p>
            </div>
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Nama Lengkap</label>
                <p class="font-bold text-gray-800">Andi Saputra</p>
            </div>
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Program Studi</label>
                <p class="font-bold text-gray-800">Sistem Informasi</p>
            </div>
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Fakultas</label>
                <p class="font-bold text-gray-800">Fakultas Ilmu Komputer</p>
            </div>
        </div>
    </div>

    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-xl shadow-sm border p-6">
            <h4 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                <i class="fas fa-lock text-blue-500"></i> Ubah Password
            </h4>
            <form action="#" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-gray-600 mb-1">Password Lama</label>
                    <input type="password" placeholder="••••••••" class="w-full border rounded-lg p-2.5 outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-600 mb-1">Password Baru</label>
                        <input type="password" placeholder="••••••••" class="w-full border rounded-lg p-2.5 outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-600 mb-1">Konfirmasi Password Baru</label>
                        <input type="password" placeholder="••••••••" class="w-full border rounded-lg p-2.5 outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="pt-4">
                    <button class="bg-slate-800 text-white px-6 py-2.5 rounded-lg font-bold hover:bg-slate-900 transition active:scale-95 shadow-md">
                        SIMPAN PERUBAHAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
renderLayout('Profil Mahasiswa', $content);
?>