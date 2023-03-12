<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Opd;

class OpdController extends Controller
{
    public function index(Request $request)
    {
        $opd = Opd::when($request->search, function($query) use($request){
            $query->where('nama_opd', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);
        
        return view('admin.opd.index', ['opd' => $opd]);
    }

    public function create()
    {
        return view('admin.opd.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nama_opd' => 'required',
        ]);
        $form_data = array(
            'nama_opd'     =>  $request->nama_opd,
        );
 
        Opd::create($form_data);
        return redirect()->route('admin.opd.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $opd = Opd::find($id);
        return view('admin.opd.edit', compact('opd'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_opd' => 'required',
        ]);

        $opd = Opd::find($id);
        $opd->nama_opd = $request->input('nama_opd');
        $opd->save();
        return redirect()->route('admin.opd.index');
    }
 
    public function delete($id)
    {
        $opd = Opd::findOrFail($id);
        $opd->delete();
        return redirect()->route('admin.opd.index')->with('sukses', 'Data berhasil dihapus');
    }
}
