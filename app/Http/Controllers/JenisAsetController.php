<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JenisAset;

class JenisAsetController extends Controller
{
    public function index(Request $request)
    {
        $jenis_aset = JenisAset::when($request->search, function($query) use($request){
            $query->where('jenis_aset', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);

        return view('admin.jenis_aset.index', ['jenis_aset' => $jenis_aset]);
    }

    public function create()
    {
        return view('admin.jenis_aset.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'jenis_aset' => 'required',
            'keterangan' => 'required',
        ]);
        $form_data = array(
            'jenis_aset'     =>  $request->jenis_aset,
            'keterangan'     =>  $request->keterangan,
        );
 
        JenisAset::create($form_data);
        return redirect()->route('admin.jenis_aset.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $jenis_aset = JenisAset::find($id);
        return view('admin.jenis_aset.edit', compact('jenis_aset'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_aset' => 'required',
            'keterangan' => 'required',
        ]);

        $jenis_aset = JenisAset::find($id);
        $jenis_aset->jenis_aset = $request->input('jenis_aset');
        $jenis_aset->keterangan = $request->input('keterangan');
        $jenis_aset->save();
        return redirect()->route('admin.jenis_aset.index');
    }
 
    public function delete($id)
    {
        $jenis_aset = JenisAset::findOrFail($id);
        $jenis_aset->delete();
        return redirect()->route('admin.jenis_aset.index')->with('sukses', 'Data berhasil dihapus');
    }
}
