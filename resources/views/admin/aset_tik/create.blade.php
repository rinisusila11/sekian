@extends('layouts.admin-master')

@section('title')
Create Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.jenis_aset.index') }}">Aset TIK</a></div>
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
                  <form action="{{ route('admin.aset_tik.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
                  @csrf    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" id="jenis_id" name="jenis_id" class="form-control">
                        <option value="" hidden>Pilih Jenis</option>
                        @foreach($jenis_aset as $j)
                           <option value="{{ $j->id_jenis }}"> {{ $j->jenis_aset }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    @csrf 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">OPD</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" id="opd_id" name="opd_id" class="form-control">
                        <option value="" hidden>Pilih OPD</option>
                        @foreach($opd as $o)
                           <option value="{{ $o->id_opd }}"> {{ $o->nama_opd }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lokasi</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control" id="lokasi_id" name="lokasi_id" class="form-control">
                        <option value="" hidden>Pilih Lokasi</option>
                        @foreach($lokasi_aset as $l)
                           <option value="{{ $l->id_lokasi }}"> {{ $l->lokasi }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_aset" id="nama_aset">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type/Model</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="type" id="type">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Merk</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="merk" id="merk">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Seri</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="seri" id="seri">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_beli" id="tanggal_beli">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Beli</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="harga_beli" id="harga_beli">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Garansi</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tanggal_garansi" id="tanggal_garansi">
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
