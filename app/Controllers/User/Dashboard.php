<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\SiswaModel;

class Dashboard extends BaseController
{

    protected SiswaModel $siswaModel;

    public function __construct()
    {
       $this->siswaModel = new SiswaModel();
    
    }

    public function index()
    {
        $data=[
            'title'=>'Dashboard',
            'judul'=>'User Dashboard',
            // 'siswa'=>$this->siswaModel->getSiswaByID()
        ];

        return view('user/dashboard',$data);
    }
}