<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected function initialize()
    {
       $this->allowedFields = [
          'nis', // NIS
          'nik', // NIK
          'nama_siswa', // Nama Lengkap
          'tlahir', // Tempat Lahir
          'tglahir', // Tanggal Lahir
          'id_kelas', // ID Kelas
          'jenis_kelamin', // Jenis Kelamain
          'no_hp', // No Handphone
          'unique_code' // Unique Code 
       ];
    }
 
    protected $table = 'tb_siswa';
 
    protected $primaryKey = 'id_siswa';

    public function getAllSiswa(){
        // Mengambil data Semua Siswa 
        $query = $this->join(
            'tb_kelas',
            'tb_kelas.id_kelas = tb_siswa.id_kelas',
            'LEFT'
         )->join(
            'tb_jurusan',
            'tb_kelas.id_jurusan = tb_jurusan.id',
            'LEFT'
         );
   
         if (!empty($kelas) && !empty($jurusan)) {
            $query = $this->where(['kelas' => $kelas, 'jurusan' => $jurusan]);
         } else if (empty($kelas) && !empty($jurusan)) {
            $query = $this->where(['jurusan' => $jurusan]);
         } else if (!empty($kelas) && empty($jurusan)) {
            $query = $this->where(['kelas' => $kelas]);
         } else {
            $query = $this;
         }
   
         return $query->orderBy('nama_siswa')->findAll();
    }

    public function getSiswaByID($id){
        // Mengambil data Siswa By ID_SISWA
        return $this->where([$this->primaryKey => $id])->first();
    }

    public function getSiswaByIDKelas($kelas = null, $jurusan = null){
        // Mengambil data Siswa Kelas
        $query = $this->join(
            'tb_kelas',
            'tb_kelas.id_kelas = tb_siswa.id_kelas',
            'LEFT'
         )->join(
            'tb_jurusan',
            'tb_kelas.id_jurusan = tb_jurusan.id',
            'LEFT'
         );
   
         if (!empty($kelas) && !empty($jurusan)) {
            $query = $this->where(['kelas' => $kelas, 'jurusan' => $jurusan]);
         } else if (empty($kelas) && !empty($jurusan)) {
            $query = $this->where(['jurusan' => $jurusan]);
         } else if (!empty($kelas) && empty($jurusan)) {
            $query = $this->where(['kelas' => $kelas]);
         } else {
            $query = $this;
         }
   
         return $query->orderBy('nama_siswa')->findAll();
    }

    public function saveSiswa($idsiswa, $nis, $nik, $namasiswa, $tlahir, $tglahir, $idkelas, $jeniskelamin, $noHp)
   {
      return $this->save([
         $this->primaryKey => $idsiswa, // ID Siswa
         'nis' => $nis, //NIS Siswa
         'nik' => $nik, // NIK SISWA
         'nama_siswa' => $namasiswa, // Nama Siswa
         'tlahir' => $tlahir, // Tempat Lahir
         'tglahir' => $tglahir, //Tanggal Lahir
         'id_kelas' => $idkelas, // ID Kelas
         'jenis_kelamin' => $jeniskelamin, // Jenis Kelamin
         'no_hp' => $noHp, // No HP
         'unique_code' => sha1($namasiswa . md5($nik . $tlahir . $namasiswa)) . substr(sha1($nik . $tglahir . rand(0, 100)), 0, 24)
      ]);
   }
}