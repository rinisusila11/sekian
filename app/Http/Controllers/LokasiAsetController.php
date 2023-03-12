<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LokasiAset;
use App\Models\OPD;

class LokasiAsetController extends Controller
{
    public function index(Request $request)
    {
        $lokasi_aset = LokasiAset::when($request->search, function($query) use($request){
            $query->where('lokasi', 'LIKE', '%'.$request->search.'%');
        })->join('opd', 'id_opd', '=', 'lokasi_aset.opd_id')->orderBy('id_lokasi', 'asc')
        ->paginate(5);
        return view('admin.lokasi_aset.index', ['lokasi_aset' => $lokasi_aset]);
    }

    public function create()
    {
        $opd = Opd::all()->sortBy('nama_opd');
        return view('admin.lokasi_aset.create', compact('opd'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'opd_id' => 'required',
            'lokasi' => 'required',
        ]);
        $form_data = array(
            'opd_id'  =>  $request->opd_id,
            'lokasi'  =>  $request->lokasi,
        );
 
        LokasiAset::create($form_data);
        return redirect()->route('admin.lokasi_aset.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $opd = Opd::all()->sortBy('nama_opd');

        $lokasi_aset = LokasiAset::find($id);
        return view('admin.lokasi_aset.edit', compact('lokasi_aset'))->with('opd', $opd);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'opd_id' => 'required',
            'lokasi' => 'required',
        ]);

        $lokasi_aset = LokasiAset::find($id);
        $lokasi_aset->opd_id = $request->input('opd_id');
        $lokasi_aset->lokasi = $request->input('lokasi');
        $lokasi_aset->save();
        return redirect()->route('admin.lokasi_aset.index');
    }
 
    public function delete($id)
    {
        $lokasi_aset = LokasiAset::findOrFail($id);
        $lokasi_aset->delete();
        return redirect()->route('admin.lokasi_aset.index')->with('sukses', 'Data berhasil dihapus');
    }
}
