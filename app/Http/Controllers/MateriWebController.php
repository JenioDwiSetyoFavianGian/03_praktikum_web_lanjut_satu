<?php

namespace App\Http\Controllers;

use App\Models\Web;


class MateriWebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('_materi_web',['_materi_web'=>Web::tampil()]);
    }

}
