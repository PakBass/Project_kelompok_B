<?php

namespace App\Controllers;
use App\Models\MapelModel;

class Mapel extends BaseController
{
    protected $mapel;
    public function __construct()
    {
        $this->mapelModel = new MapelModel();
    }


    public function index()
    {
        $mapel = $this->mapelModel->findAll();
        $data = [
            'title'     => 'Data Pelajaran | Programing RPL B',
            'mapel'     => $mapel
        ];
        return view('Mapel/index', $data);
    }

    public function detail($nama_lain)
    {
        $data = [
            'title'     => 'Detail Mata Pelajaran',
            'mapel'     => $this->mapelModel->getMapel($nama_lain)
        ];

        return view('mapel/detail', $data);
    }

}