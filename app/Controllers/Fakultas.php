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

  public function edit($kode_fakultas)
  {
    if ($_POST) {
      $dataPost['nama_fakultas'] = $this->request->getVar('nama_fakultas');
      $dataPost['deskripsi_fakultas'] = $this->request->getVar('deskripsi_fakultas');
      $update = $this->mFakultas->updateData($kode_fakultas, $dataPost['nama_fakultas'], $dataPost['deskripsi_fakultas']);
      if ($update == 'success') {
        return redirect()->to('/fakultas')->with('success', 'Data Berhasil Diubah');
      } else {
        return redirect()->to('/edit-fakultas/' . $kode_fakultas)->with('error', 'Data Gagal Diubah');
      }
    }
    $getData = $this->mFakultas->getData($kode_fakultas);
    if (!$getData) {
      die('Data tidak ditemukan untuk kode_fakultas: ' . $kode_fakultas);
    }
    $data['fakultas'] = $getData;
    return view('fakultas/edit_fakultas', $data);
  }

  public function delete($kode_fakultas)
  {
    $this->mFakultas->deleteData($kode_fakultas);
    return redirect()->to('/fakultas')->with('success', 'Data Berhasil Dihapus');
  }
}
