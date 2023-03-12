@extends('layouts.admin-master')

@section('title')
Edit Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Pengguna</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.pengguna.index') }}">Pengguna</a></div>
        <div class="breadcrumb-item active" aria-current="page">Create New Data</div>
      </div>  
    </div>   

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Update Data</h4>
                  </div>
                  <div class="card-body">
                  <form action="{{ route('admin.pengguna.update', ['id' => $users->id]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
                      <input type="hidden" name="_method" value="PUT">
                      @csrf
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" id="name" value="{{$users->name}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIP</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nip" id="nip" value="{{$users->nip}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gol/Pangkat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="golongan" id="golongan" value="{{$users->golongan}}">
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Username</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="username" id="username" value="{{$users->username}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="email" id="email" value="{{$users->email}}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="password" id="password" value="{{$users->password}}">
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
