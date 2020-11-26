<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use PDF;

class ManageUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ManageUser()
    {
        $user = User::all();
        return view ('ManageUser', ['user' => $user]);

        $value = Cache::remember('users', $seconds, function () {
            return DB::table('users')->get();
        });
    }

    //halaman tambah data
    public function add()
    {
        return view('AddManageUser');
    }

    //proses penambahan data
    public function create(Request $request)
    {
        if($request->file('foto')) {
            $image_name = $request->file('foto')->store('images','public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'foto' => $image_name,
        ]);
        return redirect('/manage');
    }

    //halaman edit data
    public function edit($id)
    {
        $user = User::find($id);
        return view('EditManageUser',['user'=>$user]);
    }

    //proses update data
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        //$user->password = Hash::make($request->password);
        $user->roles = $request->roles;
        if($user->foto && file_exists(storage_path('app/public/' . $user->foto)))
        {
            \Storage::delete('public/'.$user->foto);
        }
        $image_name = $request->file('foto')->store('images', 'public');
        $user->foto = $image_name;
        $user->save();
        return redirect('/manage');
    }

    //proses hapus data
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/manage');
    }

    //cetak pdf
    public function cetak_pdf() {
        $user = User::all();
        $pdf = PDF::loadview('user_report',['user'=>$user]);
        return $pdf->stream();
    }
}
