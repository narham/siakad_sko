<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        // Dashboard Admin
        $data=[
            'title'=>'Dashboard',
            // 'judul'=>'Dashboard',
        ];

        return view('admin/dashboard',$data);
    }
}