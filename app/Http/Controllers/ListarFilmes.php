<?php
//controller criado com 'php artisan make:conttroler'
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarFilmes extends Controller
{   // há um padrão em ... que indica os nomes dos métodos 
    public function index(Request $requestgit){
        $filmes = ['A Vida é Bela','A Lista de Schindler','The Shosen'];

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
}
