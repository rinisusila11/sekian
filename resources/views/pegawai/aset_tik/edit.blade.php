@extends('layouts.admin-master')

@section('title')
Edit Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.aset_tik.index') }}">Aset TIK</a></div>
        <div class="breadcrumb-item active" aria-current="page">Update Data</div>
      </div>  
    </div>  

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('admin.aset_tik.update', ['id_aset' => $aset_tik->id_aset]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="jenis_id">
                         @foreach( $jenis_aset as $j)
                            <option value="{{ $j->id_jenis }}" {{ $j->id_jenis == $aset_tik->jenis_id ? 'selected="selected"' : '' }}> {{ $j->jenis_aset}} </option>
                         @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="opd_id">
                         @foreach( $opd as $o)
                            <option value="{{ $o->id_opd }}" {{ $o->id_opd == $aset_tik->opd_id ? 'selected="selected"' : '' }}> {{ $o->nama_opd}} </option>
                         @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="lokasi_id">
                         @foreach( $lokasi_aset as $l)
                            <option value="{{ $l->id_lokasi }}" {{ $l->id_lokasi == $aset_tik->lokasi_id ? 'selected="selected"' : '' }}> {{ $l->lokasi}} </option>
                         @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_aset" id="nama_aset" value="{{$aset_tik->nama_aset}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type/Model</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="type" id="type" value="{{$aset_tik->type}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="merk" id="merk" value="{{$aset_tik->merk}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Seri</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="seri" id="seri" value="{{$aset_tik->seri}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli" value="{{$aset_tik->tanggal_beli}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="harga_beli" id="harga_beli" value="{{$aset_tik->harga_beli}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Garansi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_garansi" id="tanggal_garansi" value="{{$aset_tik->tanggal_garansi}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        

</section>
@endsection
