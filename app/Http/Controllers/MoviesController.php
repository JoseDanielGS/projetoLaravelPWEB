<?php
//controller criado com 'php artisan make:conttroler'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Movie;

class MoviesController extends Controller
{   // há um padrão em ... que indica os nomes dos métodos 
    public function index(){
        $filmes = Movie::query()->orderBy('name')->get();
        //dd($filmes);

        //$html = '<ul>';
        //foreach($filmes as $filme){
        //    $html.= "<li>$filme</li>";
        //}
        //$html.='</lu>';
        
        //o Laravel transforma a String de retorno na resposta do request, se for algum objeto, transforma em JSON
        return view('filmes.index')->with('filmes',$filmes);
    }

    public function create(){
        
        return view('filmes.create');
    }

    public function store(Request $request){
        
        Movie::create($request->all());
        return to_route('movies.index');
        
        /*
        $nomeSerie = $requestgit->input('nome');
        $filmes = new Movie();
        $filmes->name = $nomeSerie;
        $filmes->save();
        return redirect("/filmes");
        */

    }

    public function edit(Request $requestgit){
        return view('filmes.edit')->with('movie',Movie::find($requestgit->movie));
        
        /*
        if(DB::insert('insert into movies (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }

    public function update(Request $requestgit){
        $filmes = Movie::find($requestgit->movie);
        // $filme = Movie::find($requestgit->get('id'));
         $filmes->name = $requestgit->input('NovoNome');
         $filmes->save();
         return to_route('movies.index');
    }

    public function destroy(Request $request){
        
        Movie::destroy($request->movie);
        return to_route('movies.index');


       // $filmes = Movie::find($requestgit->get('id'));
       // $filme = Movie::find($requestgit->get('id'));
       // $filmes->delete();
       //return redirect("/filmes");
        
        /*
        if(DB::insert('insert into movies (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }
}
