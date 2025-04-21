<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }
    public function biodata(): string
    {
        return view('biodata');
    }
    public function biodataCard($npm, $nama)
    {
        $data = [
            'npm' => $npm,
            'nama' => $nama,
            'foto' => 'img/myfoto.png'
        ];
        return view('biodataCard', $data);
    }
    public function piramid($awal, $akhir): string
    { 
        $data['piramid'] = [];
        for ($i = $awal; $i <= $akhir; $i++) {
            $spasi = '';
            for ($k = 0; $k < $akhir - $i; $k++) {
                $spasi .= ' ';
            }
            $angka = '';
            for ($j = 1; $j <= $i; $j++) {
                $angka .= $j. ' ';
            }
            // gabungkan datanya
            $data['piramid'][] = $spasi . $angka;
        }

        $data['awal'] = $awal;
        $data['akhir'] = $akhir;
        return view('piramid', $data);
    }
  
}
