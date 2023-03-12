@extends('layouts.admin-master')

@section('title')
Edit Maintenance
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Maintenance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.maintenance.index') }}">Maintenance</a></div>
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
                  <form action="{{ route('admin.maintenance.update', ['id_maintenance' => $maintenance->id_maintenance]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf
                       @method('PUT')
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" name="aset_id">
                         @foreach( $aset_tik as $aset_tik)
                            <option value="{{ $aset_tik->id_aset }}" {{ $aset_tik->id_aset == $maintenance->aset_id ? 'selected="selected"' : '' }}> {{ $aset_tik->nama_aset}} </option>
                         @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Maintenance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_maintenance" id="tanggal_maintenance" value="{{$maintenance->tanggal_maintenance}}"> 
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{$maintenance->keterangan}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dokumen Pendukung</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control-file" enctype="multipart/form-data" name="dokumen_pendukung" id="dokumen_pendukung">
                      <img src="/image/{{$maintenance->dokumen_pendukung}}" width="200px">
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
