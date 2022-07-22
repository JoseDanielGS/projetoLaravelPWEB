<?php
//controller criado com 'php artisan make:conttroler'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Requisicao;

class RequisicoesController extends Controller
{   // há um padrão em ... que indica os nomes dos métodos 
    public function index(){
        $requisicoes = Requisicao::query()->orderBy('material')->get();
        //dd($requisicoes);

        //$html = '<ul>';
        //foreach($requisicoes as $filme){
        //    $html.= "<li>$filme</li>";
        //}
        //$html.='</lu>';
        
        //o Laravel transforma a String de retorno na resposta do request, se for algum objeto, transforma em JSON
        return view('requisicoes.index')->with('requisicoes',$requisicoes);
    }

    public function create(){
        
        return view('requisicoes.create');
    }

    public function store(Request $request){
        
        Requisicao::create($request->all());
        return to_route('requisicoes.index');
        
        /*
        $nomeSerie = $requestgit->input('nome');
        $requisicoes = new Requisicao();
        $requisicoes->name = $nomeSerie;
        $requisicoes->save();
        return redirect("/requisicoes");
        */

    }

    public function edit(Request $requestgit){
        return view('requisicoes.edit')->with('movie',Requisicao::find($requestgit->movie));
        
        /*
        if(DB::insert('insert into requisicoes (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }

    public function update(Request $requestgit){
        $requisicoes = Requisicao::find($requestgit->movie);
        // $filme = Requisicao::find($requestgit->get('id'));
         $requisicoes->name = $requestgit->input('NovoNome');
         $requisicoes->save();
         return to_route('requisicoes.index');
    }

    public function destroy(Request $request){
        
        Requisicao::destroy($request->movie);
        return to_route('requisicoes.index');


       // $requisicoes = Requisicao::find($requestgit->get('id'));
       // $filme = Requisicao::find($requestgit->get('id'));
       // $requisicoes->delete();
       //return redirect("/requisicoes");
        
        /*
        if(DB::insert('insert into requisicoes (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }*/

    }
}
