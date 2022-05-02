<?php

namespace App\Controllers;

use App\Helpers\Pagination;
use App\Models\BookModel;
use App\Models\ModelBuku;

class Book extends BaseController
{
    use Pagination;
    private $model;
    private $modelBuku;

    public function __construct()
    {
        $this->model = new BookModel();
        $this->modelBuku = new ModelBuku();
    }

    public function index()
    {
        $books = $this->paginate($this->request, $this->model);
        $divstart = '<div>';
        $divcontent = '';
        $divend = '</div>';
        foreach($books as $book) {
            $title = $book['name'];
            $divcontent = $divcontent."<div>
                <p>$title</p>
            </div>";
        }

        return $divstart.$divcontent.$divend;
    }

    public function store()
    {
        return 'test';
    }

    public function daftar_buku()
    {
        $buku = $this->modelBuku->getBuku();
        dd($buku->getResult());
    }
}