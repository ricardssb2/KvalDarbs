@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('/cart.css')?>" type="text/css"> 
@section('content')
    <div class="virsraksts">
        <!-- <h1>Your Cart</h1> -->
    </div>
    <div class="container">
    <div class="row">
    <div class="col-lg-9 tests2">
        <div class="container order-card">
            <div class="row">
                <div class="col-3 order-card-img">
                    <img src="https://images.saatchiart.com/saatchi/821958/art/7606759/6675349-HSC00001-6.jpg" alt="">
                </div>
                <div class="col-2">
                </div>
                <div class="col-7 order-card-desc">
                 <div class="x-poga">
                    <button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg></button>
                 </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 tests">
        <div class="os">
            <h1>Order Summary</h1>
        </div>
        <div class="items">
            <p>ITEMS 3</p>
            <div class="totalit">
                <P>3231.21$</P>
            </div>
            <div class="prodlist">

            </div>
        </div>
        <div class="proceed">
            <div class="subtotal">
                <p>Item(s) total:  <u>3231.21$</u></p>
                <p>Processing Fee:  <u>12.23$</u></p>
                <p>SUBTOTAL:  <u>3243.44$</u></p>
            </div>
            <div class="poga-end">
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection



