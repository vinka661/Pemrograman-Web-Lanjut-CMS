<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function __invoke()
    {
        return view('Article');
    }*/

    //agar halaman ini tidak tampil sebelum melakukan login
    public function __construct()
    {
        $this->middleware('auth');
        /*$this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });*/
    }

    public function Article()
    {
        return view ('Article');
    }
}
