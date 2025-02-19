<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Keywords;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(Request $request)
{
    $posts = Post::latest()
        ->with('keywords')
        ->when($request->keywords, function ($query) use ($request) {
            return $query->whereHas('keywords', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->keywords . '%');
            });
        })
        ->get();

    return view('pages.dashboard', compact('posts'));
}

    public function explore(){
        $keywords = Keywords::all();
        return view('pages.explore',compact('keywords'));
    }
}
