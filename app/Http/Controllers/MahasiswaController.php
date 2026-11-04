<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Deva Aditya L';
        $nim =  '242520027';
        $prodi = 'Teknologi Informasi';
        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
}
