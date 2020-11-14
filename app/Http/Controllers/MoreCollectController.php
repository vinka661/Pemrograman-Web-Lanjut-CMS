<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;
use PDF;

class MoreCollectController extends Controller
{
    //agar halaman ini tidak tampil sebelum melakukan login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Collect()
    {
        $collection = Collection::all();
        return view ('MoreCollect', ['collection' => $collection]);

        $value = Cache::remember('collections', $seconds, function () {
            return DB::table('collections')->get();
        });
    }
    //halaman tambah data
    public function add()
    {
        return view('AddMoreCollect');
    }
    //proses penambahan data
    public function create(Request $request)
    {
        Collection::create([
        'nama' => $request->nama,
        'merk' => $request->merk,
        'keterangan' => $request->keterangan
    ]);
    return redirect('/collect');
    }
    //halaman edit data
    public function edit($id)
    {
        $collection = Collection::find($id);
        return view('EditMoreCollect',['collection'=>$collection]);
    }
    //proses update data
    public function update($id, Request $request)
    {
        $collection = Collection::find($id);
        $collection->nama = $request->nama;
        $collection->merk = $request->merk;
        $collection->keterangan = $request->keterangan;
        $collection->save();
        return redirect('/collect');
    }
    //proses hapus data
    public function delete($id)
    {
        $collection = Collection::find($id);
        $collection->delete();
        return redirect('/collect');
    }
    //cetak pdf
    public function cetak_pdf() {
        $collection = Collection::all();
        $pdf = PDF::loadview('collection_pdf',['collection' => $collection]);
        return $pdf->stream();
    }
}
