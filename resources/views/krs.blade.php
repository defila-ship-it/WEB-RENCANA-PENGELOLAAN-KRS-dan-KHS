@extends('layouts.app', ['title' => 'Kartu Rencana Studi'])

@section('content')
<div class="bg-white rounded-xl shadow-sm border overflow-hidden">
    <table class="w-full text-left">
        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="p-4 w-16 text-center">Pilih</th>
                <th class="p-4">Kode MK</th>
                <th class="p-4">Mata Kuliah</th>
                <th class="p-4 text-center">SKS</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="p-4 text-center"><input type="checkbox" checked></td>
                <td class="p-4 font-mono">IF101</td>
                <td class="p-4 font-semibold">Pemrograman Web Terapan</td>
                <td class="p-4 text-center">3</td>
            </tr>
        </tbody>
    </table>
    <div class="p-4 bg-gray-50 flex justify-end gap-2">
        <button class="px-6 py-2 bg-slate-800 text-white rounded-lg font-bold hover:bg-slate-900 transition">SIMPAN KRS</button>
    </div>
</div>
@endsection