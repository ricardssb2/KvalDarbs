<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @extends('layouts.app')
        <link rel="stylesheet" href="<?php echo asset('/mainpage.css')?>" type="text/css"> 
    </head>
 @section('content')
 <div class="container">
     <div class="row">
       <div class="col-5">
         <div class="tekstcont">
             <div class="teksts">
                 <h1>Get your First<br>Artpiece for <Br><u>50% off</u></h1>
                     <p>Best place to sell & buy artwork.</p>
             </div>
             @guest
             @if (Route::has('register'))
             <div class="poga">
                   <a class="button button5 "href="{{ route('register') }}">Get started!</a>
             </div>
             @endif
             @endguest
         </div>
       </div>
       <div class="col-7">
          <div class="img-main">
             <img src="https://avikawebtech.com/img/bg-img/web-development.svg" alt="">
          </div>
       </div>
     </div>
   </div>
 @endsection
           
    </body>
</html>
