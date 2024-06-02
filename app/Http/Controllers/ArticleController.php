<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    // Middleware che protegge le funzioni delle rotte
    // (Non si usa quasi mai, il metodo corretto è proteggere direttamente le rotte)
   
    // public function __construct(){
    //     $this->middleware(['auth', 'verified']);
    // }

      // Dimentichiamoci di inserire gli articoli così da oggi in poi
    // public $articles = [
    //     1 =>["name" => "Articolo 1", "id" => "1", "description" => "lorem ipsum"],
    //     2 =>["name" => "Articolo 2", "id" => "2", "description" => "lorem ipsum"],
    //     3 =>["name" => "Articolo 3", "id" => "3", "description" => "lorem ipsum"],
    //     4 =>["name" => "Articolo 4", "id" => "4", "description" => "lorem ipsum"],
    //     5 =>["name" => "Articolo 5", "id" => "5", "description" => "lorem ipsum"],
    // ];

    public function index() {
    
        $title = 'I nostri articoli:';

        // $articles = $this->articles;

        $articles = Article::orderBy('created_at', 'DESC')->paginate(10);

        // $articles = Article::where('id','>',10)->paginate(8);
        // $articles = Article::where('id','>',10)->get();
        // $article = Article::where('id','>',10)->first();
        // $article = Article::where('id','>',10)->firstOrFail();

        /*
        Alcuni metodi dei modelli
        - all() --> prende tutte le categorie
        - find() --> prende la categoria con l'id specificato
        - findOrFail() --> trova la categoria o fallisce
        - orderBy() --> ordina la categoria per un campo
        - where() =,>,<
        - first() [firstOrFail()]
        */
    
        return view('pages.articles.articles', compact('title', 'articles'));
    }

    // public function show($id){
        
    //     $title = "Breve descrizione dell'articolo";

    //     if(array_key_exists($id,$this->articles)){
      
    //     $article = $this->articles[$id];
    //     return view('pages.articles.article', compact('title', 'article'));
    
    //     }else{
      
    //     abort(404);

    //     }
   
    //     return view('article');

    // }

    public function show($id){
        
        $title = "Breve descrizione dell'articolo";

        //select * from articles where id = $id
        
        //Questo è un metodo per richiamare un articolo tramite id
        
        // $article = Article::where('id', $id)->first();

        //Questo è un altro metodo, find però vale solo con chiavi primarie

        $article = Article::findOrFail($id);

        return view('pages.articles.article', compact('title', 'article'));

    }

    //Funzione più sintetica con dependency injection
    
    // public function show(Article $article){
    //     $title = "Breve descrizione dell'articolo";
    //     return view('pages.article', compact('title', 'article'));
    // }

    //Di conseguenza nella rotta parametrica con l'id passeremo
    //articolo intero facendo la stessa cosa anche nel componente 'card'

    public function createArticle(){
        return view('pages.articles.create-article');
    }

    public function store(StoreArticleRequest $request){
        
        // // verificare che i dati inseriti siano validi
        // // creiamo l'oggetto validator

        // $validator = Validator::make(
        //     $request->all(),
        //     //regole -> le regole che ogni input deve rispettare
        //     [
        //         'name'=>'required | min:5 | max:50',
        //         'description'=>'required | min:5 | max:50',
        //     ],
        //     //messaggi di errore personalizzati
        //     [
        //         'name.required' => 'Inserisci il titolo',
        //         'name.min' => 'Il titolo è troppo corto',
        //         'name.max' => 'Il titolo è troppo lungo',
        //         'description.required' => 'Inserisci il contenuto',
        //         'description.min' => 'Il contenuto è troppo corto',
        //         'description.max' => 'Il contenuto è troppo lungo',
        //     ]
        // );

        // //controlliamo i campi
        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        $path = null;

        // dd($request->all());
        $article = Article::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        // Salviamo l'immagine

        if($request->hasFile('cover')){
            // $request->file('cover')->storeAs('public/covers'.$article->id, 'cover.jpg');
            // dd($path);

            //salvare il file(metodo meno sicuro)
            // $article->cover=$request->file('cover')->storeAs('public/covers'.$article->id, 'cover.jpg');
            // $article->save();

            //questa funzione ci restituisce il path dell'articolo
            
            $article->update([
                'cover' => $request->file('cover')->storeAs('public/covers/'.$article->id, 'cover.jpg'),
            ]);
        }

        return redirect()->back()->with(['succes'=>'Articolo creato con successo!']);
    }

}

