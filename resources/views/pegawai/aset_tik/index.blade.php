@extends('layouts.admin-master')

@section('title')
Aset
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Aset TIK</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.aset_tik.index') }}">Aset TIK</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data</div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admin.aset_tik.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a><hr>
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
                  <th scope="col">No</th>
                  <th scope="col">Jenis Aset</th>
                  <th scope="col">OPD</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Nama Aset</th>
                  <th scope="col">Type/Model</th>
                  <th scope="col">Merk</th>
                  <th scope="col">Seri</th>
                  <th scope="col">Tanggal Beli</th>
                  <th scope="col">Harga Beli</th>
                  <th scope="col">Tanggal Garansi</th>             
                  <th scope="col">Action</th>                       
                </tr>
                @foreach($aset_tik as $key => $a)
              </thead>
              <tbody>
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{!!$a->jenis_aset!!}</td>
                     <td>{!!$a->nama_opd!!}</td>
                     <td>{!!$a->lokasi!!}</td>
                     <td>{!!$a->nama_aset!!}</td>
                     <td>{!!$a->type!!}</td>
                     <td>{!!$a->merk!!}</td>
                     <td>{!!$a->seri!!}</td>
                     <td>{!!$a->tanggal_beli!!}</td>
                     <!-- <td>{{\Carbon\Carbon::parse($a->tanggal_beli)->translatedformat('d-m-Y')}}</td> -->
                     <td>@currency($a->harga_beli)</td>
                     <td>{!!$a->tanggal_garansi!!}</td>
                     <!-- <td>{{\Carbon\Carbon::parse($a->tanggal_garansi)->translatedformat('d-m-Y')}}</td> -->
                     <td>
                        <a href="{{ route('admin.aset_tik.edit', ['id_aset' => $a->id_aset]) }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Edit</a>
                        <a href="{{ route('admin.aset_tik.delete', ['id_aset' => $a->id_aset]) }}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {{ $aset_tik->links() }}
            Showing {{ $aset_tik->currentPage() }} to {{ $aset_tik->total() }} of {{ $aset_tik->perPage() }} entries
            </nav>
          </div>
        </div>
      </div>

</section>
@endsection
