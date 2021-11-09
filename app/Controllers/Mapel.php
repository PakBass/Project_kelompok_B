<?php

namespace App\Controllers;

class Mapel extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Data Pelajaran | Programing RPL B'
        ];
        return view('Mapel/index', $data);
    }
}