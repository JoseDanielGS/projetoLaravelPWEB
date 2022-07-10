<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarFilmes extends Controller
{
    public function index(Request $requestgit){
        $filmes = ['A Vida é Bela','A Lista de Schindler','The Shosen'];

        $html = '<ul>';
        foreach($filmes as $filme){
            $html.= "<li>$filme</li>";
        }
        $html.='</lu>';

        return $html;
    }
}
