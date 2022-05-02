<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'category_id', 'author', 'publisher', 'published_in', 'isbn', 'stock', 'borrowed', 'booked', 'image'];
}