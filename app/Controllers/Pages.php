<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'Home | Programing RPL B'
        ];
        return view('Pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title'     => 'About Me | Programing RPL B'
        ];
        return view('Pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title'     => 'Contact | Programing RPL B',
            'smk'       => [
                [
                    'sekolah'   => 'SMK AIRLANGGA BALIKPAPAN',
                    'alamat'    => 'Jl.S.Parman No.14 Gn.Guntur',
                    'kota'      => 'Kota Balikpapan'
                ]
            ]
        ];
        return view('Pages/contact', $data);
    }
}