<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
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

    public function posts() {

        $posts = Post::all();

        return view('pages.posts', compact('posts'));
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date' => 'required|date|',
        ]);

        $posts = Post::create($data);

        return redirect() -> route('posts');
    }
}
