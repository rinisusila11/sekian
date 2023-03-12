@extends('layouts.admin-master')

@section('title')
OPD
@endsection

@section('content')
<section class="section">

      <div class="section-header">
        <h1>Operator Perangkat Daerah</h1> 
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin.opd.index') }}">Operator Perangkat Daerah</a></div>
            <div class="breadcrumb-item active" aria-current="page">Data</div>
          </div>  
      </div> 

      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admin.opd.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a><hr>
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
                  <th scope="col">Nama</th>
                  <th scope="col">Action</th>                       
                </tr>
                @foreach($opd as $key => $o)
              </thead>
              <tbody>
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{!!$o->nama_opd!!}</td>
                     <td>
                        <a href="{{ route('admin.opd.edit', ['id_opd' => $o->id_opd]) }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Edit</a>
                        <a href="{{ route('admin.opd.delete', ['id_opd' => $o->id_opd]) }}"  class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
       
          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {{ $opd->links() }}
            Showing {{ $opd->currentPage() }} to {{ $opd->total() }} of {{ $opd->perPage() }} entries
            </nav>
          </div>
        </div>
      </div>

</section>
@endsection
