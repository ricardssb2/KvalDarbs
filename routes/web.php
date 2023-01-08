<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//user home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('post.delete/{id}', [App\Http\Controllers\PostController::class, 'DeletePost']);


//user post
Route::get('/userpost', [App\Http\Controllers\UserPostController::class, 'index'])->name('userpost');
Route::get('userpost', function (){
    $user_post = DB::table('create_posts')->get();
    return view('userpost',['user_post' => $user_post]);
});

//feed 
Route::get('/feed', [App\Http\Controllers\FeedController::class, 'index'])->name('feed');
Route::get('feed', function (){
    $feed_list = DB::table('create_posts')->get();
    return view('feed',['feed_list' => $feed_list]);
});


//Lai izveidotu cart 
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/', [App\Http\Controllers\CartController2::class, 'store'])->name('cart.store');
Route::delete('/cart/remove/{product}', [App\Http\Controllers\CartController2::class, 'destroy'])->name('cart.destroy');


//lai izveidotu postus
Route::get('/post', [App\Http\Controllers\PostController::class, 'index']);
Route::post('/newpost', [App\Http\Controllers\PostController::class, 'create_posts']);


