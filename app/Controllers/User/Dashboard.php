<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Dashboard',
            'judul'=>'User Dashboard',
        ];

        return view('user/dashboard',$data);
    }
}