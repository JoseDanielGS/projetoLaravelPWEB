<?php
namespace App\Http\Controllers;

class ListarFilmes{


    public function listaFilmes(){
        $filmes = ['A Vida é Bela','A Lista de Schindler','The Shosen'];

        $html = '<ul>';
        foreach($filmes as $filme){
            $html.= "<li>$filme</li>";
        }
        $html.='</lu>';

        echo $html;
    }



}

?>