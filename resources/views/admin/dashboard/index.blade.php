<?php
$conn = mysqli_connect('localhost','root','','coba6');

$get1 = mysqli_query($conn, "select * from opd");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($conn, "select * from jenis_aset");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($conn, "select * from aset_tik");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($conn, "select * from lokasi_aset");
$count4 = mysqli_num_rows($get4);

$get5 = mysqli_query($conn, "select * from maintenance");
$count5 = mysqli_num_rows($get5);
?>

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
                <div class="card-icon bg-primary">
                <a href="{{ route('admin.opd.index') }}"><i class="fas fa-users"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Operator Perangkat Daerah</h4>
                  </div>
                  <div class="card-body">
                  <?=$count1; ?>
                  </div>
                </div>
              </div>
            </div>
        
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                <a class="nav-link" href="{{ route('admin.jenis_aset.index') }}"><i class="fas fa-layer-group"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jenis Aset</h4>
                  </div>
                  <div class="card-body">
                  <?=$count2; ?>
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
                  <?=$count3; ?>
                  </div>
                </div>
              </div>
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
                  <?=$count4; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                <a class="nav-link" href="{{ route('admin.maintenance.index') }}"> <i class="fas fa-cogs"></i></a>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Maintenance</h4>
                  </div>
                  <div class="card-body">
                  <?=$count5; ?>
                  </div>
                </div>
              </div>
            </div>
</div>
</section>
@endsection