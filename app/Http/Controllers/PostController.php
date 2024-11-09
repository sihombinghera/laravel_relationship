<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  //
  public function index()
  {

    //  $posts = Post::all();
    //$posts = Post::paginate(10);
    if (request('search')) {
      $posts = Post::where('title', 'like', '%' . request('search') . '%')->paginate(10);
    } else {
      $posts = Post::paginate(10);
    }

    return view('posts.index', compact('posts'));
  }
}
