@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/cart.css')?>" type="text/css"> 
@section('content')
    <div class="virsraksts">
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-9 tests2">
        <div class="container order-card">
            @if (session()->has('msg') )
                <div class="alert alert-success">{{ session()->get('msg') }}</div>
            @endif
            <div class="row">
            @foreach($cart as $cart)
                <div class="col-8 order-card-desc">
                    <div class="descetc">
                        <div class="dzest">
                          <form action="{{ route('cart.destroy', $cart->rowId) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                            </svg></button>
                          </form>
                        </div>
                        <div class="nosaukums">
                            <h1>{{$cart->id}}</h1>
                        </div>
                        <div class="apraksts">
                            <p><b>Description:</b> {{$cart->name}}</p>
                        </div>
                        <div class="cena">
                            <p>Price: {{$cart->qty}}$</p>
                        </div>
                        
                        <div>
                        <hr class="hr" />
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-3 tests">
        <div class="os">
            <h1>Order Summary</h1>
        </div>
        <div class="items">
            <p>Items ({{ \Gloudemans\Shoppingcart\Facades\Cart::content()->count() }})</p>
        </div>
        <div class="proceed">
            <div class="subtotal">
                <p>Item(s) total:  <u><?php echo Cart::initial(); ?></u></p>
                <p>SUBTOTAL:  <u><?php echo Cart::subtotal(); ?></u></p>
            </div>
            <div class="poga-end">
                <button href="checkout" type="button" class="btn btn-dark">Checkout</button>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection



