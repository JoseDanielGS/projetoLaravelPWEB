<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    public function requisicoes(){

        return $this->hasMany(Requisicao::class);

    }

    public function materias(){

        return $this->belongsToMany(Material::class);

    }

}
