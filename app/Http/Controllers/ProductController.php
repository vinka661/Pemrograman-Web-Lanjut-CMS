<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //agar halaman ini tidak tampil sebelum melakukan login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Product()
    {
        return view ('Product');
    }
}
