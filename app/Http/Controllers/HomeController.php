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
        // MI RICHIAMO TUTTI I POST DENTRO IL DB E LI COMPATTO PER LA VIEW
        $posts = Post::all();

        return view('pages.posts', compact('posts'));
    }

    public function create() {

        // PRENDO CATEGORIE E REAZIONI PER POI RITROVARMI L'ELENCO DURANTE LA CREAZIONE DEL POST
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

        // VALIDO I DATI SOPRA SENZA CARICARLI NEL DB
        $posts = Post::make($data);

        //  ASSOCIO IL POST A CATEGORIA E REAZIONE
        $category = Category::findOrFail($request -> get('category'));
        $posts -> category() -> associate($category);
        $posts -> save();

        $reactions = Reaction::findOrFail($request -> get('reactions'));
        $posts -> reactions() -> attach($reactions);

        // SALVO IL POST IN DATABASE
        $posts -> save();
          
        return redirect() -> route('posts');
    }

    public function edit($id) {

        // CARICO LE CATEGORIE E LE REAZIONI DEL POST
        $categories = Category::all();
        $reactions = Reaction::all();

        // CERCO LE INFORMAZIONI DEL POST
        $post = Post::findOrFail($id);

        return view('pages.edit', compact('categories', 'reactions', 'post'));
    }

    public function update(Request $request, $id) {

        // VALIDO I DATI
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // CERCO IL POST PER ID E AGGIORNO CON I DATI VALIDATI
        $post = Post::findOrFail($id);
        $post -> update($data);

        // STESSA COSA PER LE CATEGORIE E POI ASSOCIO AL POST
        $category = Category::findOrFail($request -> get('category'));
        $post -> category() -> associate($category);
        $post -> save();

        // STESSA COSA PER LE REAZIONI E LE SINCRONIZZO CON LE NUOVE INFORMAZIONI E
        $reactions = [];
        if ($request -> has('reactions'))
            $reactions = Reaction::findOrFail($request -> get('reactions'));

        $post -> reactions() -> sync($reactions);

        // INFINE SALVO TUTTE LE NUOVE INFORMAZIONI NEL DB
        $post -> save();

        return redirect() -> route('posts');
    }

    public function delete($id) {


        $post = Post::findOrFail($id);

        // dd($post);
        $post -> reactions() -> sync([]);
        $post -> save();

        $post -> delete();

        return redirect() -> route('posts');
    }
}
