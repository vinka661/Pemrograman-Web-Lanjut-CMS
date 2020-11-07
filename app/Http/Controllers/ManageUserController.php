<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
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
        $user->password = Hash::make($request->password);
        $user->roles = $request->roles;
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
}
