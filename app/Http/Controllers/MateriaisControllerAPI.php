<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class RequisicoesControllerAPI extends Controller
{
    public function index(){
        return Material::all();
    }

    public function store(Request $request){
        return response()->json(Material::create($request->all()), 201);
    }

    public function update(int $id, Request $request){
        //dd($request);
        //return $req->fill($request->all())->save();
        $material = Material::find($id);
        //dd($material);
        $material->nome = $request->nome;
        //dd($material);
        $material->save();
        return $material;
    }

    public function destroy(int $id){
        Material::destroy($id);
        return response()->noContent();
    }


}
