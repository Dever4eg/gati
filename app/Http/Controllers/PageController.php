<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{

    public function show($slug){
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('showPage')->with('page', $page);
    }
}
