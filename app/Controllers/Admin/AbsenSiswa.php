<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AbsenSiswa extends BaseController
{
    public function index()
    {
        // Absen Siswa

        $data=[
            'title'=>'Absensi',
            'judul'=>'Absen Siswa'
        ];
        return view('admin/absen/list-absen-siswa',$data);
    }
}