<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Post::orderBy('created_at', 'asc')->take(12)->get();

        return view('home', ['posts' => $posts]);
    }
}
