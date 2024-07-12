<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        // Login Form
        return view('auth/login');
    }

    public function Login()
    {
        // Proses Login
    }

    public function forgot()
    {
        // Form Lupa Pass

        return view('auth/forgot');
    }

    public function reset(){
        // Proses Reset Password
    }

    public function logout(){
        // Proses LogOut
    }
}