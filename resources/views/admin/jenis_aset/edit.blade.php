@extends('layouts.admin-master')

@section('title')
Edit Jenis Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Jenis Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.jenis_aset.index') }}">Jenis Aset</a></div>
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
                  <form action="{{ route('admin.jenis_aset.update', ['id_jenis' => $jenis_aset->id_jenis]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Aset</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="jenis_aset" id="jenis_aset" value="{{$jenis_aset->jenis_aset}}">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
                      <div class="col-sm-12 col-md-7">
                       <input type="text" class="form-control inputtags" name="keterangan" id="keterangan" value="{{$jenis_aset->keterangan}}"></textarea>
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
