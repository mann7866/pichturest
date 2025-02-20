<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Album;
use App\Models\Comment;
use App\Models\Keywords;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function made()
    {
        $posts = Post::latest()->where('users_id', Auth::id())->get();
        $albums = Album::latest()->where('users_id', Auth::id())->get();
        $keywords = Keywords::latest()->where('users_id', Auth::id())->get();
        return view('pages.profile.made', compact('posts', 'albums', 'keywords'));
    }
    public function saved()
    {
        $posts = Post::latest()->where('users_id', Auth::id())->get();
        return view('pages.profile.saved', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keywords = Keywords::all();
        $albums = Album::all();
        return view('pages.profile.create', compact('keywords', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $data = $request->validated();

        $data['id_unik'] = time();
        $data['users_id'] = Auth::id();
        if($request->has('image')){
            $data['image'] = $request->file('image')->store('images/posts');
        }
        $post = Post::create($data);
        if ($request->has('keywords')) {
            $keywords = $request->input('keywords', []);
            $post->keywords()->attach($keywords);
        }
        if ($request->has('albums')) {
            $albums = $request->input('albums', []);
            $post->albums()->attach($albums);
        }

        return redirect()->route('posts.made')->with('success', 'Berhasil menambah postingan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_unik)
    {
        $post = Post::where('id_unik',$id_unik)->first();
        $posts = Post::latest()->where('users_id', Auth::id())->get();
        $comments = Comment::where('post_id', $post->id)
                    ->whereNull('parent_id')
                    ->with('replies')
                    ->get();
        return view('pages.profile.show',compact('post','posts','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
