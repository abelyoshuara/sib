<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(string $namaDepan, string $namaBlkg)
    {

        return view('about', [
            'namaDepan' => $namaDepan,
            'namaBlkg' => $namaBlkg,
        ]);
    }
}
