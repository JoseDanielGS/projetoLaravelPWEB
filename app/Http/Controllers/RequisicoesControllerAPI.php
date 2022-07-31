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

    public function update(int $id, Request $request){
        //dd($request);
        //return $req->fill($request->all())->save();
        $requisicao = Requisicao::find($id);
        //dd($requisicao);
        $requisicao->material = $request->material;
        $requisicao->fornecedor = $request->fornecedor;
        $requisicao->validacaoAlmoxarifado = $request->validacaoAlmoxarifado;
        $requisicao->validacaoDemandante = $request->validacaoDemandante;
        $requisicao->tipoMaterial = $request->tipoMaterial;
        $requisicao->pago = $request->pago;
        $requisicao->status = $request->status;

        //dd($requisicao);
        $requisicao->save();
        return $requisicao;
    }

    public function destroy(int $id){
        Requisicao::destroy($id);
        return response()->noContent();
    }


}
