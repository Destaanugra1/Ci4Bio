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
}
