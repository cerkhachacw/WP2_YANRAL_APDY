<?php

namespace App\Controllers;


class Student extends BaseController
{
    public function index()
    {
        echo 'Student index controller';
    }

    public function form_add()
    {
        return view('view-add-student-form');
    }

    public function add_student()
    {
        return view('view-add-student-data.php', ['data' => $this->request->getVar()]);
    }
}