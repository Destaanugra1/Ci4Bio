<?php

namespace App\Controllers;

use App\Models\M_Fakultas;

class Fakultas extends BaseController
{
  protected $mFakultas;

  function __construct()
  {
    $this->mFakultas = new M_Fakultas();
  }

  public function index(): string
  {
    $dataFakultas = $this->mFakultas->list_all();
    $data['fakultas'] = $dataFakultas;
    return view('fakultas/list_fakultas', $data);
  }

  public function tambah()
  {
    $rules = [
      'kode_fakultas' => 'required',
      'nama_fakultas' => 'required',
      'deskripsi_fakultas' => 'required'
    ];
    // Validasi input
    if (!$this->validate($rules)) {
      return view('fakultas/tambah_fakultas', [
        'validation' => $this->validator
      ]);
    }
    if ($_POST) {
      $dataPost["kode_fakultas"] = $this->request->getVar('kode_fakultas');
      $dataPost["nama_fakultas"] = $this->request->getVar('nama_fakultas');
      $dataPost["deskripsi_fakultas"] = $this->request->getVar('deskripsi_fakultas');

      $tambah = $this->mFakultas->add($dataPost);
      if ($tambah == 'success') {
        return redirect()->to('/fakultas')->with('success', 'Data Berhasil Ditambahkan');
      } else {
        return redirect()->to('/tambah-fakultas')->with('error', 'Data Gagal Ditambahkan');
      }
    }
    return view('fakultas/tambah_fakultas');
  }
}
