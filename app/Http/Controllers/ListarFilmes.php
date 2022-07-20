<?php
//controller criado com 'php artisan make:conttroler'
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ListarFilmes extends Controller
{   // há um padrão em ... que indica os nomes dos métodos 
    public function index(){
        $filmes = DB::select('select nome from movies;');

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

    public function store(Request $requestgit){
        
        $nomeSerie = $requestgit->input('nome');
        if(DB::insert('insert into movies (nome) values (?);', [$nomeSerie])){
            return 'OK';
        }else{
            return 'error';
        }

    }
}
