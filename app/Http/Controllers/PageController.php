<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('Home');
    }

    public function article() {
        return view('Article');
    }

    public function about() {
        return view('About');
    }

    /*public function about() {
        return 'Nim : 1931710004 <br> Nama : Vinka Amalia Safitri';
    }*/
}
