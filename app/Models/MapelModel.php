<?php

namespace App\Models;

use CodeIgniter\Model;

class MapelModel extends Model
{
    protected $table            = 'tb_mapel';
    protected $useTimestamps    = true;
    // protected $allowedFields = ['name', 'email'];

    public function getMapel($nama_lain = false)
    {
        if($nama_lain == false){
            return $this->findAll();
        }
        return $this->where(['nama_lain' => $nama_lain])->first();
    }
}