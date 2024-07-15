<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SiswaModel;

use CodeIgniter\HTTP\ResponseInterface;

class Siswa extends BaseController
{

    protected SiswaModel $siswaModel;
    // protected KelasModel $kelasModel;
    // protected JurusanModel $jurusanModel;
 
    protected $siswaValidationRules = [
       'nik' => [
          'rules' => 'required|max_length[16]|min_length[16]',
          'errors' => [
             'required' => 'NIK harus diisi.',
             'is_unique' => 'NIK ini telah terdaftar.',
             'min_length[4]' => 'Panjang NIS minimal 4 karakter'
          ]
       ],
       'nis' => [
          'rules' => 'required|max_length[20]|min_length[4]',
          'errors' => [
             'required' => 'NIS harus diisi.',
             'is_unique' => 'NIS ini telah terdaftar.',
             'min_length[4]' => 'Panjang NIS minimal 4 karakter'
          ]
       ],
       'nama' => [
          'rules' => 'required|min_length[3]',
          'errors' => [
             'required' => 'Nama harus diisi'
          ]
       ],
       'id_kelas' => [
          'rules' => 'required',
          'errors' => [
             'required' => 'Kelas harus diisi'
          ]
       ],
       'jk' => ['rules' => 'required', 'errors' => ['required' => 'Jenis kelamin wajib diisi']],
       'no_hp' => 'required|numeric|max_length[20]|min_length[5]'
    ];
 
    public function __construct()
    {
       $this->siswaModel = new SiswaModel();
    //    $this->kelasModel = new KelasModel();
    //    $this->jurusanModel = new JurusanModel();
    }

    public function index(){
        // Menampilkan Daftar Siswa
        $data=[
            'title'=>'Siswa',
            'judul'=>'Data Siswa',
            'siswa'=>$this->siswaModel->getAllSiswa(),
        ];

        return view('admin/siswa/list-siswa',$data);
    }

    public function tambahSiswa(){
        // Form Tambah Siswa
        $data=[
            'title'=>'Siswa',
            'judul'=>'Tambah Siswa',
            
        ];

        return view('admin/siswa/tambah-siswa',$data);
    }

    public function editSiswa(){
        // Form Edit Siswa
        $data=[
            'title'=>'Siswa',
            'judul'=>'Edit Siswa',
            
        ];

        return view('admin/siswa/edit-siswa',$data);
    }

    public function profilSiswa($id){
        // Menampilkan Profil Siswa

        $data=[
            'title'=>'Siswa',
            'judul'=>'Profil Siswa',
            'siswa'=>$this->siswaModel->getSiswaByID($id),
            
        ];
        // dd($data);

        return view('admin/siswa/profile-siswa',$data);


    }

    public function updateSiswa(){
        // Proses Update Siswa
    }

    public function delete(){
        // Proses Hapus Siswa
    }
}