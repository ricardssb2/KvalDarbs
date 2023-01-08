@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/userpost.css')?>" type="text/css"> 
@section('content')
<h1><b>Your Posts</b></h1>
@foreach($user_post as $key => $data)
      @if($data->author_id == Auth::user()->id)
        <div class="card kartina">
          <div class="card-body">
            <h5 class="card-title">{{$data->product_name}}</h5>
            <p class="card-text"><small class="text-muted">Time posted : {{$data->created_at}}</small></p>
            <a href="{{url('post.delete/'.$data->id)}}" type="button" class="btn btn-danger">Delete</a>
          </div>
        </div>
        <div class="back">
          <a href="home" type="button" class="btn btn-dark">Back</a>
        </div>
      @endif
    @endforeach

@endsection