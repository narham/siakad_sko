<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Siswa extends BaseController
{
    public function index(){
        // Menampilkan Daftar Siswa
        $data=[
            'title'=>'Siswa',
            'judul'=>'Data Siswa'
        ];

        return view('admin/siswa/list-siswa',$data);
    }

    public function editSiswa(){
        // Form Edit Siswa

        return view('');
    }

    public function updateSiswa(){
        // Proses Update Siswa
    }

    public function delete(){
        // Proses Hapus Siswa
    }
}