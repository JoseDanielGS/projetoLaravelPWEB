<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisicao;

class RequisicoesControllerAPI extends Controller
{
    public function index(){
        return Requisicao::all();
    }

    public function store(Request $request){
        return response()->json(Requisicao::create($request->all()), 201);
    }
}
