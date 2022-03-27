<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLatihan1 extends Model
{
    // public $nilai1, $nilai2, $hasil;
    //method penjumlahan
    public function jumlah($nil1 = 0, $nil2 = 0)
    {
        return $nil1 + $nil2;
    }
}