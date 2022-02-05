<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class GuestController extends Controller
{
    public function homeGuest() {

        return view('pages.homeGuest');
    }

    public function registration() {

        return view('pages.registration');
    }

    public function accesso() {

        return view('pages.login');
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
