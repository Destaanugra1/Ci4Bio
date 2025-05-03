<?php

namespace App\Controllers;

use App\Models\M_prodi;

class Programstudi extends BaseController
{
  protected $mProdi;

  function __construct()
  {
    $this->mProdi = new M_prodi();
  }

  public function index(): string
  {
    $dataProdi = $this->mProdi->list_all();
    $data['prodi'] = $dataProdi;
    return view('prodi/list_programstudi', $data);
  }

  public function tambah()
  {
    $rules = [
      'nama_programstudi' => 'required',
      'programstudi_deskripsi' => 'required'
    ];
    // Validasi input
    if (!$this->validate($rules)) {
      return view('prodi/tambah_programstudi', [
        'validation' => $this->validator
      ]);
    }
    if ($_POST) {
      $dataPost["nama_programstudi"] = $this->request->getVar('nama_programstudi');
      $dataPost["programstudi_deskripsi"] = $this->request->getVar('programstudi_deskripsi');

      $tambah = $this->mProdi->add($dataPost);
      if ($tambah == 'success') {
        return redirect()->to('/programstudi')->with('success', 'Data Berhasil Ditambahkan');
      } else {
        return redirect()->to('/tambah-programstudi')->with('error', 'Data Gagal Ditambahkan');
      }
    }
    return view('prodi/tambah_programstudi');
  }
}
