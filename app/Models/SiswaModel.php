<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'tb_siswa';
    protected $primaryKey       = 'id_siswa';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        '',
    ];

    public function getAllSiswa(){
        // Mengambil data Semua Siswa 
    }

    public function getSiswaByID(){
        // Mengambil data Siswa By ID_SISWA
    }

    public function getSiswaByIDKelas(){
        // Mengambil data Siswa Kelas
    }
}