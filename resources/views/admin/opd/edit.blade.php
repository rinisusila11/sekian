@extends('layouts.admin-master')

@section('title')
Edit OPD
@endsection

@section('content')
<section class="section">

<div class="section-header">
          <h1>Operator Perangkat Daerah</h1> 
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.opd.index') }}">Operator Perangkat Daerah</a></div>
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
                    <form action="{{ route('admin.opd.update', ['id_opd' => $opd->id_opd]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="nama_opd" id="nama_opd" value="{{$opd->nama_opd}}">
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
