@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/dashboard.css')?>" type="text/css"> 
@section('content')
<div class="nosaukums">
</div>
<div class="container viss">
  <div class="row">
    <div class="col-lg-3  kreisa">
      <div class="avatarphoto">
      </div>
      <div class="vards">

      </div>
    </div>
    <div class="col-lg-9 laba">
              <div class="virsraksts">
                  <h1>Your Listed Artwork</h1>
              </div>
  <div class="card-deck kartinu-kopa">
    @foreach($user_post as $key => $data)
      @if($data->author_id == Auth::user()->id)
        <div class="card kartina">
          <div class="card-body">
            <h5 class="card-title">{{$data->product_name}}</h5>
            <p class="card-text"><small class="text-muted">Time posted : {{$data->created_at}}</small></p>
            <a href="{{url('post.delete/'.$data->id)}}" type="button" class="btn btn-danger">Delete</a>
          </div>
        </div>
      @endif
    @endforeach
  </div>
    </div>
  </div>

</div>
@endsection
