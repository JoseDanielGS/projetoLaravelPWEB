<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;

    protected $fillable = ['fornecedor','material','validacaoAlmoxarifado','validacaoDemandante','tipoMaterial','pago','status'];
    protected $table = 'requisicoes';
}
