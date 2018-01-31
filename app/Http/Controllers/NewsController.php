<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    //
    public function index(){
        $news = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('news')->with('news', $news);
    }

    public function show($id){
        $news = Post::find($id);

        return view('showNews')->with('news', $news);
    }
}
