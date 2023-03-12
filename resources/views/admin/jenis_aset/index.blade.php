@extends('layouts.admin-master')

@section('title')
Jenis Aset
@endsection

@section('content')
<section class="section">
  
<div class="section-header">
    <h1>Jenis Aset</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.jenis_aset.index') }}">Jenis Aset</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data </div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admin.jenis_aset.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a><hr>
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
                  <th scope="col">Jenis Aset</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Action</th>                       
                </tr>
                @foreach($jenis_aset as $key => $j)
              </thead>
              <tbody>
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{!!$j->jenis_aset!!}</td>
                     <td>{!!$j->keterangan!!}</td>
                     <td>
                        <a href="{{ route('admin.jenis_aset.edit', ['id_jenis' => $j->id_jenis]) }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Edit</a>
                        <a href="{{ route('admin.jenis_aset.delete', ['id_jenis' => $j->id_jenis]) }}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {{ $jenis_aset->links() }}
            Showing {{ $jenis_aset->currentPage() }} to {{ $jenis_aset->total() }} of {{ $jenis_aset->perPage() }} entries
            </nav>
          </div>
        </div>
      </div>

</section>
@endsection
