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
    public function piramida($awal, $akhir)
     {
        $data['piramid'] = [];

        for ($i = $awal; $i <= $akhir; $i++) {
            // Hitung spasi agar rata tengah
            $spasi = '';
            for ($k = 0; $k < $akhir - $i; $k++) {
                $spasi .= ' ';
            }

            // Buat deretan angka dari 1 sampai i
            $angka = '';
            for ($j = 1; $j <= $i; $j++) {
                $angka .= $j . ' ';
            }

            // Gabung spasi dan angka, lalu simpan ke array
            $data['piramid'][] = $spasi . $angka;
        }

        $data['awal'] = $awal;
        $data['akhir'] = $akhir;

        return view('piramida', $data);
    }


    public function biodataCard($nama, $npm)
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'foto' => 'img/myfoto.png'

        ];
        return view('biodataCard', $data);
    }
}
