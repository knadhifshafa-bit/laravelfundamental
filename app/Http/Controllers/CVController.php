<?php

namespace App\Http\Controllers;

class CVController extends Controller
{
    public function index()
    {
        $data = [
            'nama'       => 'Nama Kamu',
            'email'      => 'email@example.com',
            'telepon'    => '08123456789',
            'alamat'     => 'Surabaya, Jawa Timur',
            'pendidikan' => [
                [
                    'tahun'     => '2020-2024',
                    'institusi' => 'Universitas X',
                    'jurusan'   => 'Teknik Informatika'
                ],
            ],
            'pengalaman' => [
                [
                    'tahun'      => '2023',
                    'posisi'     => 'Web Developer',
                    'perusahaan' => 'PT. ABC'
                ],
            ],
            'keahlian' => ['PHP', 'Laravel', 'MySQL', 'HTML', 'CSS'],
        ];

        return view('cv', $data);
    }
}