@extends('layouts.app', ['title' => 'Kartu Hasil Studi'])

@section('content')
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="p-6 border-b bg-gray-50 flex justify-between items-center">
        <h4 class="font-bold text-gray-700">Semester 3 (2023/2024)</h4>
        <button class="bg-blue-600 text-white px-4 py-1.5 rounded-lg text-xs font-bold hover:bg-blue-700 transition">Cetak KHS</button>
    </div>
    <table class="w-full text-sm text-left">
        <thead class="bg-white border-b text-gray-400 font-bold text-[10px] uppercase tracking-widest">
            <tr>
                <th class="p-4 text-center">No</th>
                <th class="p-4">Mata Kuliah</th>
                <th class="p-4 text-center">Nilai</th>
                <th class="p-4 text-center">SKS</th>
                <th class="p-4 text-center">Bobot</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @php
                $data_khs = [
                    ['nama' => 'Pemrograman Web', 'nilai' => 'A', 'sks' => 3, 'bobot' => 12.00],
                    ['nama' => 'Basis Data', 'nilai' => 'B+', 'sks' => 3, 'bobot' => 10.50],
                    ['nama' => 'UI/UX Design', 'nilai' => 'A', 'sks' => 2, 'bobot' => 8.00],
                ];
            @endphp

            @foreach($data_khs as $index => $khs)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-4 text-center text-gray-500">{{ $index + 1 }}</td>
                <td class="p-4 font-bold text-gray-800">{{ $khs['nama'] }}</td>
                <td class="p-4 text-center font-extrabold text-blue-600">{{ $khs['nilai'] }}</td>
                <td class="p-4 text-center">{{ $khs['sks'] }}</td>
                <td class="p-4 text-center">{{ number_format($khs['bobot'], 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="grid grid-cols-3 divide-x bg-gray-50 border-t">
        <div class="p-4 text-center">
            <p class="text-[10px] font-bold text-gray-400 uppercase">IPK Kumulatif</p>
            <p class="text-xl font-extrabold text-gray-800">3.68</p>
        </div>
        <div class="p-4 text-center">
            <p class="text-[10px] font-bold text-gray-400 uppercase">SKS Diambil</p>
            <p class="text-xl font-extrabold text-gray-800">8</p>
        </div>
        <div class="p-4 text-center">
            <p class="text-[10px] font-bold text-gray-400 uppercase">SKS Lulus</p>
            <p class="text-xl font-extrabold text-gray-800">8</p>
        </div>
    </div>
</div>
@endsection