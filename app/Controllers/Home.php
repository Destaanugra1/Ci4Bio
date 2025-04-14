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
    public function bintang($start, $end)
    { {
        $angka = []; // buat array kosong
        $count = 0; // buat variabel counter

        for ($i = 1; $count < ($end - $start + 1); $i++) {
            $baris = []; // angka yang dihasilkan dari baris ke-1 atau satu angka
            for ($j = 0; $j < $i; $j++) {
                if ($start + $count > $end) break; // jika sudah lebih dari batas akhir
                $baris[] = $start + $count; //tambahkan angka ke dalam array
                $count++; // tambahkan perhitungan
            }
            $angka[] = $baris; // tambahkan baris ke dalam array
        }

        return view('bintang', ['angka' => $angka]);
    }
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
