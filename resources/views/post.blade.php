@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/post.css')?>" type="text/css"> 

@section('content')
<form>
    <form>
        <div method="POST" action="{{ route('post') }}">
            <label for="exampleFormControlTextarea1">Art Name</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="product_name" rows="1"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Art Price</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="product_price" rows="1"></textarea>
          </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Art Description</label>
          <textarea class="form-control description" id="exampleFormControlTextarea1" name="product_description" rows="3"></textarea>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
@endsection