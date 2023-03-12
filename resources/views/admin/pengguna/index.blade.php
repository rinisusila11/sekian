@extends('layouts.admin-master')

@section('title')
Pengguna
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Pengguna</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.pengguna.index') }}">Pengguna</a></div>
        <div class="breadcrumb-item active" aria-current="page">Data</div>
      </div>  
    </div>  

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
            <a href="{{ route('admin.pengguna.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Insert Data</a><hr>
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
                  <th scope="col">Name</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Gol/Pangkat</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>       
                  <th scope="col">Action</th>                       
                </tr>
                @foreach($users as $key => $u)
              </thead>
              <tbody>
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{!!$u->name!!}</td>
                     <td>{!!$u->nip!!}</td>
                     <td>{!!$u->golongan!!}</td>
                     <td>{!!$u->username!!}</td>
                     <td>{!!$u->email!!}</td>
                     <td>{!!$u->password!!}</td>
                     <td>
                        <a href="{{ route('admin.pengguna.edit', ['id' => $u->id]) }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-edit"></i>Edit</a>
                        <a href="{{ route('admin.pengguna.delete', ['id' => $u->id]) }}" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>Delete</a>
                     </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          <div class="card-footer text-right">
            <nav class="d-inline-block">
            {{ $users->links() }}
            Showing {{ $users->currentPage() }} to {{ $users->total() }} of {{ $users->perPage() }} entries
            </nav>
          </div>
        </div>
      </div>

</section>
@endsection
