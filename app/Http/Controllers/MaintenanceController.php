<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Maintenance;
use App\Models\Aset;

class MaintenanceController extends Controller
{
    public function index(Request $request)
    {
        $maintenance = Maintenance::when($request->search, function($query) use($request){
            $query->where('nama_aset', 'LIKE', '%'.$request->search.'%');
        })->join('aset_tik', 'id_aset', '=', 'maintenance.aset_id')->orderBy('id_maintenance', 'asc')
        ->paginate(5);
        return view('admin.maintenance.index', ['maintenance' => $maintenance]);
    }

    public function create()
    {
        $aset_tik = Aset::all()->sortBy('nama_aset');
        return view('admin.maintenance.create', compact('aset_tik'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'aset_id' => 'required',
            'tanggal_maintenance' => 'required',
            'keterangan' => 'required',
            'dokumen_pendukung' => 'mimes:jpeg,png,jpg,gif,svg,pdf',
        ]);

        $imgName = $request->dokumen_pendukung->getClientOriginalName() . '-' . time() . '-' . $request->dokumen_pendukung->extension();
        $request->dokumen_pendukung->move(public_path('image'), $imgName);

        $form_data = array(
            'aset_id'     =>  $request->aset_id,
            'tanggal_maintenance'     =>  $request->tanggal_maintenance,
            'keterangan'     =>  $request->keterangan,
            'dokumen_pendukung'     =>  $imgName,
        );
 
        Maintenance::create($form_data);
        return redirect()->route('admin.maintenance.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $aset_tik = Aset::all()->sortBy('nama_aset');

        $maintenance = Maintenance::find($id);
        return view('admin.maintenance.edit', compact('maintenance'))->with('aset_tik', $aset_tik);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'aset_id' => 'required',
            'tanggal_maintenance' => 'required',
            'keterangan' => 'required',
            'dokumen_pendukung' => 'required',
        ]);

        $imgName = null;

        if($request->dokumen_pendukung){
            $imgName = $request->dokumen_pendukung->getClientOriginalName() . '-' . time() . '-' . $request->dokumen_pendukung->extension();
            $request->dokumen_pendukung->move(public_path('image'), $imgName);

        // if($request->hasFile('dokumen_pendukung')){
        //     $imgName->file('dokumen_pendukung')->move('image/', $request->file('dokumen_pendukung')->getClientOriginalName());
        //     $maintenance->dokumen_pendukung = $request->file('dokumen_pendukung')->getClientOriginalName();
        
        }

        $maintenance = Maintenance::find($id);
        $maintenance->aset_id = $request->input('aset_id');
        $maintenance->tanggal_maintenance = $request->input('tanggal_maintenance');
        $maintenance->keterangan = $request->input('keterangan');
        $maintenance->dokumen_pendukung = $imgName;
        $maintenance->save();
        return redirect()->route('admin.maintenance.index');
    }
 
    public function delete($id)
    {
        $maintenance = Maintenance::findOrFail($id);
        $maintenance->delete();
        return redirect()->route('admin.maintenance.index')->with('sukses', 'Data berhasil dihapus');
    }
}
