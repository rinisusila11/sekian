@extends('layouts.admin-master')

@section('title')
Create Maintenance
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Maintenance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.maintenance.index') }}">Maintenance</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>  

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Create New Data</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('admin.maintenance.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
                  @csrf   
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" id="aset_id" name="aset_id" class="form-control">
                        <option value="" hidden>Pilih Aset</option>
                        @foreach($aset_tik as $a)
                           <option value="{{ $a->id_aset }}"> {{ $a->nama_aset }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Maintenance</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_maintenance" id="tanggal_maintenance">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="keterangan" id="keterangan">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dokumen Pendukung</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control-file" name="dokumen_pendukung" id="dokumen_pendukung">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
</section>
@endsection
