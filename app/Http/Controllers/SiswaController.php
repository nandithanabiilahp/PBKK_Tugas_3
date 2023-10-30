<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function siswa()
    {
        $nama = 'Nanditha Nabiilah Putri';
        $umur = '20 Tahun';

        return view('siswa', compact('nama', 'umur'));
    }
}
