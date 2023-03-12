<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aset;
use App\Models\JenisAset;
use App\Models\Opd;
use App\Models\LokasiAset;

class AsetController extends Controller
{
    public function index(Request $request)
    {
        $aset_tik = Aset::when($request->search, function($query) use($request){
            $query->where('nama_aset', 'LIKE', '%'.$request->search.'%');
        })->join('jenis_aset', 'id_jenis', '=', 'aset_tik.jenis_id')->orderBy('id_aset', 'asc')
        ->join('opd', 'id_opd', '=', 'aset_tik.opd_id')->orderBy('id_aset', 'asc')
        ->join('lokasi_aset', 'id_lokasi', '=', 'aset_tik.lokasi_id')->orderBy('id_aset', 'asc')
        ->paginate(5);

        return view('admin.aset_tik.index', ['aset_tik' => $aset_tik]);
    }

    public function create()
    {
        $jenis_aset = JenisAset::all()->sortBy('jenis_aset');
        $opd = Opd::all()->sortBy('nama_opd');
        $lokasi_aset = LokasiAset::all()->sortBy('lokasi');
        return view('admin.aset_tik.create', compact('jenis_aset', 'opd', 'lokasi_aset'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'jenis_id' => 'required',
            'opd_id' => 'required',
            'lokasi_id' => 'required',
            'nama_aset' => 'required',
            'type' => 'required',
            'merk' => 'required',
            'seri' => 'required',
            'tanggal_beli' => 'required',
            'harga_beli' => 'required',
            'tanggal_garansi' => 'required',
        ]);
        $form_data = array(
            'jenis_id'     =>  $request->jenis_id,
            'opd_id'     =>  $request->opd_id,
            'lokasi_id'     =>  $request->lokasi_id,
            'nama_aset'     =>  $request->nama_aset,
            'type'     =>  $request->type,
            'merk'     =>  $request->merk,
            'seri'     =>  $request->seri,
            'tanggal_beli'     =>  $request->tanggal_beli,
            'harga_beli'     =>  $request->harga_beli,
            'tanggal_garansi'     =>  $request->tanggal_garansi,
        );
 
        Aset::create($form_data);
        return redirect()->route('admin.aset_tik.index')->with('success', 'Data Added Successfully.');
    }
 
    public function edit($id)
    {
        $jenis_aset = JenisAset::all()->sortBy('jenis_aset');
        $opd = Opd::all()->sortBy('nama_opd');
        $lokasi_aset = LokasiAset::all()->sortBy('lokasi');

        $aset_tik = Aset::find($id);
        return view('admin.aset_tik.edit', compact('aset_tik'))->with('jenis_aset', $jenis_aset)->with('opd', $opd)->with('lokasi_aset', $lokasi_aset);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_id' => 'required',
            'opd_id' => 'required',
            'lokasi_id' => 'required',
            'nama_aset' => 'required',
            'type' => 'required',
            'merk' => 'required',
            'seri' => 'required',
            'tanggal_beli' => 'required',
            'harga_beli' => 'required',
            'tanggal_garansi' => 'required',
        ]);

        $aset_tik = Aset::find($id);
        $aset_tik->jenis_id = $request->input('jenis_id');
        $aset_tik->opd_id = $request->input('opd_id');
        $aset_tik->lokasi_id = $request->input('lokasi_id');
        $aset_tik->nama_aset = $request->input('nama_aset');
        $aset_tik->type = $request->input('type');
        $aset_tik->merk = $request->input('merk');
        $aset_tik->seri = $request->input('seri');
        $aset_tik->tanggal_beli = $request->input('tanggal_beli');
        $aset_tik->harga_beli = $request->input('harga_beli');
        $aset_tik->tanggal_garansi = $request->input('tanggal_garansi');
        $aset_tik->save();
        return redirect()->route('admin.aset_tik.index');
    }
 
    public function delete($id)
    {
        $aset_tik = Aset::findOrFail($id);
        $aset_tik->delete();
        return redirect()->route('admin.aset_tik.index')->with('sukses', 'Data berhasil dihapus');
    }
}
