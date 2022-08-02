<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresControllerAPI extends Controller
{
    public function index(){
        return Fornecedor::all();
    }

    public function store(Request $request){
        return response()->json(Fornecedor::create($request->all()), 201);
    }

    public function update(int $id, Request $request){
        //dd($request);
        //return $req->fill($request->all())->save();
        $fornecedor = Fornecedor::find($id);
        //dd($fornecedor);
        $fornecedor->CNPJ = $request->CNPJ;
        $fornecedor->nomeFantasia = $request->nomeFantasia;
        //dd($fornecedor);
        $fornecedor->save();
        return $fornecedor;
    }

    public function destroy(int $id){
        Fornecedor::destroy($id);
        return response()->noContent();
    }


}
