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

    public function post() {

        $posts = Post::all();

        return view('pages.posts', compact('posts'));
    }
}
