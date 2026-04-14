@extends('layouts.app', ['title' => 'Jadwal Kuliah'])

@section('content')
<div class="mb-6">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-gray-800">Jadwal Kuliah Mingguan</h2>
            <p class="text-sm text-gray-500">Semester Genap 2023/2024</p>
        </div>
        <div class="flex gap-2">
            <button class="bg-white border border-gray-200 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-gray-50 transition flex items-center gap-2">
                <i class="fas fa-print"></i> Cetak Jadwal
            </button>
        </div>
    </div>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-slate-800 text-white text-xs font-bold uppercase tracking-widest">
                    <th class="p-4 border-r border-slate-700 w-32">Waktu</th>
                    <th class="p-4 border-r border-slate-700">Senin</th>
                    <th class="p-4 border-r border-slate-700">Selasa</th>
                    <th class="p-4 border-r border-slate-700">Rabu</th>
                    <th class="p-4 border-r border-slate-700">Kamis</th>
                    <th class="p-4">Jumat</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="h-32 border-b">
                    <td class="bg-gray-50 p-4 font-bold text-center border-r text-gray-600">
                        08:00 - 09:40
                    </td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-blue-100 border-l-4 border-blue-500 p-3 rounded-xl h-full shadow-sm hover:shadow-md transition cursor-default">
                            <p class="font-extrabold text-blue-800 text-xs">IF101</p>
                            <p class="font-bold text-blue-900 leading-tight my-1">Pemrograman Web</p>
                            <p class="text-[10px] text-blue-700 font-medium"><i class="fas fa-door-open mr-1"></i> Ruang 301</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-purple-100 border-l-4 border-purple-500 p-3 rounded-xl h-full shadow-sm hover:shadow-md transition">
                            <p class="font-extrabold text-purple-800 text-xs">IF103</p>
                            <p class="font-bold text-purple-900 leading-tight my-1">Sistem Informasi</p>
                            <p class="text-[10px] text-purple-700 font-medium"><i class="fas fa-door-open mr-1"></i> Ruang 302</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 align-top">
                        <div class="bg-orange-100 border-l-4 border-orange-500 p-3 rounded-xl h-full shadow-sm hover:shadow-md transition">
                            <p class="font-extrabold text-orange-800 text-xs">UM101</p>
                            <p class="font-bold text-orange-900 leading-tight my-1">Pancasila</p>
                            <p class="text-[10px] text-orange-700 font-medium"><i class="fas fa-door-open mr-1"></i> Ruang 105</p>
                        </div>
                    </td>
                </tr>

                <tr class="h-32 border-b">
                    <td class="bg-gray-50 p-4 font-bold text-center border-r text-gray-600">
                        10:00 - 11:40
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-green-100 border-l-4 border-green-500 p-3 rounded-xl h-full shadow-sm hover:shadow-md transition">
                            <p class="font-extrabold text-green-800 text-xs">IF102</p>
                            <p class="font-bold text-green-900 leading-tight my-1">Basis Data</p>
                            <p class="text-[10px] text-green-700 font-medium"><i class="fas fa-door-open mr-1"></i> Ruang 205</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-indigo-100 border-l-4 border-indigo-500 p-3 rounded-xl h-full shadow-sm hover:shadow-md transition"></div>