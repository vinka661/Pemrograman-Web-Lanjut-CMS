<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class MoreCollectController extends Controller
{
    public function Collect()
    {
        $collection = Collection::all();
        return view ('MoreCollect', ['collection' => $collection]);

        $value = Cache::remember('collections', $seconds, function () {
            return DB::table('collections')->get();
        });
    }
}
