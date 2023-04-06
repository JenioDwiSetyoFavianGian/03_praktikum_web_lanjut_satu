<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $prof = Profile::all();
        return view('profile')->with('profile',$prof);
    }
}

// ->with('nama', 'Jenio Dwi Setyo Favian Gian')
        // ->with('jurusan', 'Teknik Informatika')
        // ->with('nim', '2141720212')
        // ->with('kelas', 'TI - 2H')
        // ->with('absen', '13');