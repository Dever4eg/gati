<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class NewsController extends Controller
{
    //
    public function index(){
        $news = Post::where('status', 'PUBLISHED')->orderBy('created_at', 'desc')->paginate(10);
        return view('news')->with('news', $news);
    }

    public function show($id){
        $news = Post::find($id);
        $news->views++;
        $news->save();

        return view('showNews')->with('news', $news);
    }
}
