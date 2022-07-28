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

    public function update(Request $request){
        $requisicao = Requisicao::find($request->all());
        $requisicao->save();
        return $requisicao;
    }

    public function destroy(int $id){
        Requisicao::destroy($id);
        return response()->noContent();
    }


}
