<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function getDataKrs()
    {
        // Logika untuk mendapatkan array data mata kuliah
        $dataKrs = [
            ['id' => 1, 'kode' => 'IF101', 'nama' => 'Pemrograman Web', 'sks' => 3, 'terpilih' => true],
            ['id' => 2, 'kode' => 'IF102', 'nama' => 'Basis Data', 'sks' => 3, 'terpilih' => true],
            ['id' => 3, 'kode' => 'IF103', 'nama' => 'Sistem Informasi', 'sks' => 3, 'terpilih' => true],
            ['id' => 4, 'kode' => 'IF104', 'nama' => 'AI Dasar', 'sks' => 2, 'terpilih' => false],
            ['id' => 5, 'kode' => 'IF105', 'nama' => 'Jaringan Komputer', 'sks' => 3, 'terpilih' => false],
        ];

        return $dataKrs;
    }
    public function tampilkan()
    {
        $data = $this->getDataKrs();
        return view('krs', compact('data'));
    }
}