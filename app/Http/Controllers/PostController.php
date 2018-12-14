<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::simplePaginate(8);

        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('post_title');
        $url   = $request->input('video_url');
        $body  = $request->input('post_body');
        $category = $request->input('category');

        $post = new \App\Post;
        $post->post_title = $title;
        $post->post_body  = $body;
        $post->video_url = $url;
        $post->user_id   = \Auth::id();
        $post->category  = $category;
        $post->save();

        return redirect('recipes/' . $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = \App\Post::where('id', $id)->first();

        return view('post.show', ['post' => $post]);
    }
}
