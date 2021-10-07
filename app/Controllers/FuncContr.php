<?php

namespace App\Controllers;

class FuncContr extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('cadFunc');
        echo view('footer');
    }
}
?>