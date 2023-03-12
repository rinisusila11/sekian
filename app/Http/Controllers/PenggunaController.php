<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class PenggunaController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->search, function($query) use($request){
            $query->where('name', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);
        
        return view('admin.pengguna.index', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.pengguna.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'golongan' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        $form_data = array(
            'name'     =>  $request->name,
            'nip'     =>  $request->nip,
            'golongan'     =>  $request->golongan,
            'username'     =>  $request->username,
            'email'     =>  $request->email,
            'password'     =>  $request->password,
        );
 
        User::create($form_data);
        return redirect()->route('admin.pengguna.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.pengguna.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'golongan' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->nip = $request->input('nip');
        $users->golongan = $request->input('golongan');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->save();
        return redirect()->route('admin.pengguna.index');
    }
 
    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('admin.pengguna.index')->with('sukses', 'Data berhasil dihapus');
    }
}
