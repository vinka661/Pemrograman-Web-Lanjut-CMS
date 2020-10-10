<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class MoreArtController extends Controller
{
    public function Art()
    {
        $brand = Brand::all();
        return view ('MoreArt', ['brand' => $brand]);

        $value = Cache::remember('brands', $seconds, function () {
            return DB::table('brands')->get();
        });
    }
}
