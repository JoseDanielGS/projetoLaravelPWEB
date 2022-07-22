<?php
//controller criado com 'php artisan make:conttroler'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Requisicao;

class RequisicoesController extends Controller
{   // há um padrão em ... que indica os nomes dos métodos 
    public function index(){
        $filmes = Requisicao::query()->orderBy('name')->get();
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
        
        Requisicao::create($request->all());
        return to_route('requisicoes.index');
        
        /*
        $nomeSerie = $requestgit->input('nome');
        $filmes = new Requisicao();
        $filmes->name = $nomeSerie;
        $filmes->save();
        return redirect("/filmes");
        */

    }

    public function edit(Request $requestgit){
        return view('filmes.edit')->with('movie',Requisicao::find($requestgit->movie));
        
        /*
        if(DB::insert('insert into requisicoes (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }

    public function update(Request $requestgit){
        $filmes = Requisicao::find($requestgit->movie);
        // $filme = Requisicao::find($requestgit->get('id'));
         $filmes->name = $requestgit->input('NovoNome');
         $filmes->save();
         return to_route('requisicoes.index');
    }

    public function destroy(Request $request){
        
        Requisicao::destroy($request->movie);
        return to_route('requisicoes.index');


       // $filmes = Requisicao::find($requestgit->get('id'));
       // $filme = Requisicao::find($requestgit->get('id'));
       // $filmes->delete();
       //return redirect("/filmes");
        
        /*
        if(DB::insert('insert into requisicoes (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }
}
