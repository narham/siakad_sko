<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class User extends BaseController
{
    public function index()
    {
        // Menampilkan Data Users
        $data=[
            'title'=>'Users',
            'judul'=>'Data Users'
        ];

        return view('admin/user/list-user',$data);
    }
}