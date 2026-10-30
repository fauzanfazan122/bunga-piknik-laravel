<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = 
        [
            [
                "nama" => "fauzan",
                "prodi" => "Teknologi Informasi",
                "nim" => 162024035
            ],
            [
                "nama" => "elaina",
                "prodi" => "Teknologi Informasi",
                "nim" => 162024034
            ],
            [
                "nama" => "nadia",
                "prodi" => "Sistem Informasi",
                "nim" => 162024041
            ],
            [
                "nama" => "rizky",
                "prodi" => "Teknik Informatika",
                "nim" => 162024052
            ],
            [
                "nama" => "putri",
                "prodi" => "Manajemen",
                "nim" => 162024063
            ]
        ];
        
        // masukan array ke mahasiswa
        return view('home', ["mahasiswa" => $data, 'title' => 'Home']);
    }
}
