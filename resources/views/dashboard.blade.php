@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    @php
        $stats = [
            ['label' => 'Total SKS', 'val' => '21', 'icon' => 'fa-book', 'color' => 'text-blue-500'],
            ['label' => 'IPS', 'val' => '3.75', 'icon' => 'fa-chart-line', 'color' => 'text-green-500'],
            ['label' => 'IPK', 'val' => '3.68', 'icon' => 'fa-award', 'color' => 'text-yellow-500'],
            ['label' => 'Status', 'val' => 'Aktif', 'icon' => 'fa-user-check', 'color' => 'text-purple-500'],
        ];
    @endphp

    @foreach($stats as $s)
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 text-center">
        <i class="fas {{ $s['icon'] }} {{ $s['color'] }} text-2xl mb-2"></i>
        <p class="text-gray-400 text-xs font-bold uppercase">{{ $s['label'] }}</p>
        <h3 class="text-2xl font-bold">{{ $s['val'] }}</h3>
    </div>
    @endforeach
</div>

<div class="bg-white p-6 rounded-xl border border-orange-100 bg-orange-50">
    <h4 class="font-bold text-orange-700 mb-2 italic">Info Penting:</h4>
    <p class="text-sm text-orange-600">Jangan lupa melakukan validasi KRS sebelum tanggal 20 April 2026!</p>
</div>
@endsection