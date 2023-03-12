@extends('layouts.admin-master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Dashboard</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item ">Data</a></div>
      </div>    
  </div>   

            <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                <a class="nav-link" href="{{ route('admin.lokasi_aset.index') }}"><i class="fas fa-map-marked-alt"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Lokasi Aset</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <a class="nav-link" href="{{ route('admin.aset_tik.index') }}"> <i class="	fas fa-database"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                  <h4>Aset TIK</h4>
                  </div>
                  <div class="card-body">
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
</section>
@endsection