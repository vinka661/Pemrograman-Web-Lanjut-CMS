<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use PDF;

class MoreArtController extends Controller
{
    //agar halaman ini tidak tampil sebelum melakukan login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Art()
    {
        $brand = Brand::all();
        return view ('MoreArt', ['brand' => $brand]);

        $value = Cache::remember('brands', $seconds, function () {
            return DB::table('brands')->get();
        });
    }
    //halaman tambah data
    public function add()
    {
        return view('AddMoreArt');
    }
    //proses penambahan data
    public function create(Request $request)
    {
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Brand::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $image_name,
        ]);
        return redirect('/art');
    }
    //halaman edit data
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('EditMoreArt',['brand'=>$brand]);
    }
    //proses update data
    public function update($id, Request $request)
    {
        $brand = Brand::find($id);
        $brand->nama = $request->nama;
        $brand->keterangan = $request->keterangan;
        
        if($brand->gambar && file_exists(storage_path('app/public/' . $brand->gambar)))
        {
            \Storage::delete('public/'.$brand->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $brand->gambar = $image_name;

        $brand->save();
        return redirect('/art');
    }
    //proses hapus data
    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/art');
    }
    //cetak pdf
    public function cetak_pdf() {
        $brand = Brand::all();
        $pdf = PDF::loadview('articles_pdf',['brand'=>$brand]);
        return $pdf->stream();
    }
}
