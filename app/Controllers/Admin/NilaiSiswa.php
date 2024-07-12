<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NilaiSiswa extends BaseController
{
    public function index()
    {
        // Menampilkan Nilai Siswa

        $data=[
            'title'=>'Nilai',
            'judul'=>'Nilai Siswa',
        ];
        return view('admin/nilai/list-nilai-siswa',$data);
    }
}