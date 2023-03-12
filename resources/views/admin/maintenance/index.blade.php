@extends('layouts.admin-master')

@section('title')
Maintenance
@endsection

@section('content')
<section class="section">
 
<div class="section-header">
    <h1>Maintenance</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.maintenance.index') }}">Maintenance</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data</div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admin.maintenance.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a><hr>
            <form action="" method="get">
              <div class="input-group mb-3-left">
                <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
          </div>
                
          <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Aset</th>
                  <th scope="col">Tanggal Maintenance</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Dokumen Pendukung</th>             
                  <th scope="col">Action</th>                       
                </tr>
                @foreach($maintenance as $key => $m)
              </thead>
              <tbody>
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{!!$m->nama_aset!!}</td>
                     <td>{!!$m->tanggal_maintenance!!}</td>
                     <!-- <td>{{\Carbon\Carbon::parse($m->tanggal_maintenance)->translatedformat('d-m-Y')}}</td> -->
                     <td>{!!$m->keterangan!!}</td>
                     <td><img width ="150px" src="/image/{{$m->dokumen_pendukung}}"></td>
                    <td>
                        <a href="{{ route('admin.maintenance.edit', ['id_maintenance' => $m->id_maintenance]) }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Edit</a>
                        <a href="{{ route('admin.maintenance.delete', ['id_maintenance' => $m->id_maintenance]) }}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {{ $maintenance->links() }}
            Showing {{ $maintenance->currentPage() }} to {{ $maintenance->total() }} of {{ $maintenance->perPage() }} entries
            </nav>
          </div>
        </div>
      </div>

</section>
@endsection
