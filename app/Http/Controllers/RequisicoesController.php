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
      
        return view('requisicoes.index')->with('requisicoes',$requisicoes);
    }

    public function create(){
        
        return view('requisicoes.create');
    }

    public function store(Request $request){
        
      
        Requisicao::create($request->all());
        return to_route('requisicoes.index');
      
    }

    public function edit(Request $requestgit){
        return view('requisicoes.edit')->with('movie',Requisicao::find($requestgit->movie));

    }

    public function update(Request $requestgit){
        $requisicoes = Requisicao::find($requestgit->movie);
         $requisicoes->name = $requestgit->input('NovoNome');
         $requisicoes->save();
         return to_route('requisicoes.index');
    }

    public function destroy(Request $request){
        
        Requisicao::destroy($request->movie);
        return to_route('requisicoes.index');

    }
}
