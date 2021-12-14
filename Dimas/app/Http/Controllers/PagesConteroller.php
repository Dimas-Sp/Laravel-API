<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function home(){
        return view('index');
    }

    public function coba(){
        return view('coba');
    }
}
