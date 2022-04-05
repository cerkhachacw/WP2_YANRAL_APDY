<?php

namespace App\Controllers;

class Web extends BaseController
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
   
    public function index()
    {
        $data['judul'] = "Halaman Depan";
        echo view('v_header');
        echo view('v_index', $data);
        echo view('v_footer');
    }

    public function about()
    {
        $data['judul'] = "Halaman About";
        echo view('v_header');
        echo view('v_about', $data);
        echo view('v_footer');
    }
}