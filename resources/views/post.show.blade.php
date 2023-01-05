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
            {{$post->product_name}}
      </div>
    </div>
    
  </div>
    </div>
  </div>

</div>
@endsection
