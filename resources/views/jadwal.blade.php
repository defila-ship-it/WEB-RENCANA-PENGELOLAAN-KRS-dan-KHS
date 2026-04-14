@extends('layouts.app', ['title' => 'Jadwal Kuliah'])

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h2 class="text-2xl font-bold text-gray-800 tracking-tight">Jadwal Kuliah Mingguan</h2>
        <p class="text-sm text-gray-500">Semester Genap 2023/2024</p>
    </div>
    <button class="bg-white border border-gray-200 px-4 py-2 rounded-xl text-sm font-bold flex items-center gap-2 hover:bg-gray-50 transition shadow-sm">
        <i class="fas fa-print text-gray-400"></i> Cetak Jadwal
    </button>
</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        {{-- class table-fixed di bawah ini sangat penting agar kolom tidak melenceng --}}
        <table class="w-full table-fixed border-collapse min-w-[800px]">
            <thead>
                <tr class="bg-slate-800 text-white text-[10px] uppercase tracking-widest">
                    <th class="p-4 border-r border-slate-700 w-32">Waktu</th>
                    <th class="p-4 border-r border-slate-700">Senin</th>
                    <th class="p-4 border-r border-slate-700">Selasa</th>
                    <th class="p-4 border-r border-slate-700">Rabu</th>
                    <th class="p-4 border-r border-slate-700">Kamis</th>
                    <th class="p-4">Jumat</th>
                </tr>
            </thead>
            <tbody class="text-sm">
                <tr class="h-40 border-b border-gray-100">
                    <td class="bg-gray-50 p-4 font-bold text-center border-r text-gray-400">08:00 - 09:40</td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-blue-50 border-l-4 border-blue-500 p-3 rounded-xl h-full shadow-sm">
                            <p class="text-[10px] font-bold text-blue-600 uppercase">IF101</p>
                            <p class="font-bold text-blue-900 leading-tight my-1">Pemrograman Web</p>
                            <p class="text-[10px] text-blue-500 mt-2"><i class="fas fa-door-open mr-1"></i> R. 301</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td> {{-- Kolom Selasa Kosong --}}
                    <td class="p-2 border-r align-top">
                        <div class="bg-purple-50 border-l-4 border-purple-500 p-3 rounded-xl h-full shadow-sm">
                            <p class="text-[10px] font-bold text-purple-600 uppercase">IF103</p>
                            <p class="font-bold text-purple-900 leading-tight my-1">Sistem Informasi</p>
                            <p class="text-[10px] text-purple-500 mt-2"><i class="fas fa-door-open mr-1"></i> R. 302</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td> {{-- Kolom Kamis Kosong --}}
                    <td class="p-2 align-top">
                        <div class="bg-orange-50 border-l-4 border-orange-500 p-3 rounded-xl h-full shadow-sm">
                            <p class="text-[10px] font-bold text-orange-600 uppercase">UM101</p>
                            <p class="font-bold text-orange-900 leading-tight my-1">Pancasila</p>
                            <p class="text-[10px] text-orange-500 mt-2"><i class="fas fa-door-open mr-1"></i> R. 105</p>
                        </div>
                    </td>
                </tr>

                <tr class="h-40">
                    <td class="bg-gray-50 p-4 font-bold text-center border-r text-gray-400">10:00 - 11:40</td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 border-r align-top">
                        <div class="bg-green-50 border-l-4 border-green-500 p-3 rounded-xl h-full shadow-sm">
                            <p class="text-[10px] font-bold text-green-600 uppercase">IF102</p>
                            <p class="font-bold text-green-900 leading-tight my-1">Basis Data</p>
                            <p class="text-[10px] text-green-500 mt-2"><i class="fas fa-door-open mr-1"></i> R. 205</p>
                        </div>
                    </td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 border-r bg-gray-50/30"></td>
                    <td class="p-2 bg-gray-50/30"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection