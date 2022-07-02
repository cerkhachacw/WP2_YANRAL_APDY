<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\ModelUser;

class Admin extends CI_Controller
{
    private $ModelUser;
    private $ModelBuku;
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModelBuku = new BookModel();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['buku'] = $this->ModelBuku->getBuku()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}