<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Category;
use App\Reaction;

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

        $categories = Category::all();
        $reactions = Reaction::all();

        return view('pages.create', compact('categories', 'reactions'));
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $posts = Post::make($data);

        $category = Category::findOrFail($request -> get('category'));
        $posts -> category() -> associate($category);
        $posts -> save();

        $reactions = Reaction::findOrFail($request -> get('reactions'));
        $posts -> reactions() -> attach($reactions);
        $posts -> save();
          
        return redirect() -> route('posts');

    }
}
