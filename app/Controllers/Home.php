<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function biodata(): string
    {
        return view('biodata');
    }
    public function bintang($awal, $akhir)
    {
        $hasil = []; // Array untuk menyimpan hasil
        for ($baris = 1, $angka = $awal; $angka <= $akhir; $baris++) {
            $barisAngka = [];
            for ($i = 0; $i < $baris && $angka <= $akhir; $i++, $angka++) {
                $barisAngka[] = $angka;
            }
            $hasil[] = $barisAngka;
        }

        return view('bintang', ['angka' => $hasil]);
    }

    public function biodataCard($npm, $nama)
    {
        $data = [
            'npm' => $npm,
            'nama' => $nama,
            'foto' => 'img/myfoto.png',
        ];
        return view('biodataCard', $data);
    }
}
