<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function percobaan9()
    {
    	$siswa = Siswa::all();
    	return view("siswa",compact('siswa'));
    }

      public function show($siswa)
    {
    	$siswa = Siswa::find($siswa);
    	return $siswa;
    }
}
