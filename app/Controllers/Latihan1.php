<?php

namespace App\Controllers;

use App\Models\ModelLatihan1;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $hasil = ModelLatihan1::jumlah($n1, $n2);
        echo "Hasil penjumlahan dari ".$n1." + ".$n2." = ".$hasil;
    }

    public function penjumlahanwithview($n1, $n2)
    {
        echo view('view-latihan', [
            'nilai1' => $n1,
            'nilai2' => $n2,
            'hasil' => ModelLatihan1::jumlah($n1, $n2),
        ]);
    }
}