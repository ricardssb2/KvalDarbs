@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/dashboard.css')?>" type="text/css"> 
@section('content')
<div class="nosaukums">
  <h1>Home</h1>
</div>
<div class="container viss">
  <div class="row">
    <div class="teksts">
      <p>Username: {{$user->name}}</p>
      <p>Email: {{$user->email}}</p>
      <p>Member Since: {{$user->created_at}}</p>
      <a href="userpost" type="button" class="btn btn-dark">Your Posts</a>
    </div>
@endsection
