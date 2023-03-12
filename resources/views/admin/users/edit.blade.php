@extends('layouts.admin-master')

@section('title')
Edit Profile ({{ $user->name }})
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Profile</h1> 
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="dashboard">Profil</a></div>
        <div class="breadcrumb-item ">Update profil</div>
      </div>    
  </div>  
  <div class="section-body">
      <profile-component user='{!! $user->toJson() !!}'></profile-component>
  </div>
</section>
@endsection
