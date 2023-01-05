<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\CreatePost;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('post');
    }

    public function create_posts(Request $request)
    {   

        $request->validate([
            'product_name' => 'required',
            'product_price'=>'required',
            'product_description'=>'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = time() . '-' . $request->product_name . '.' . 
        $request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $post = new CreatePost;
        $post->product_name = $request->product_name;
        $post->product_price = $request->product_price;
        $post->product_description = $request->product_description;
        $post->image_path = $newImageName;
        $post->author_id = Auth::user()->id;
        $post->save();
        return redirect('feed')->with('status', 'Your artwork has been added.');
    }

    public function imageUpload()
    {
        return view('feed');
    }

    public function  DeletePost($id)
    {
        $postdelete = CreatePost::where('id', $id)->delete();

        return redirect('home');

    }
}