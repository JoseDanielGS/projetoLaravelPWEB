<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->id();
            $table->string('fornecedor');
            $table->string('material');
            $table->boolean('validacaoAlmoxarifado');
            $table->boolean('validacaoDemandante');
            $table->string('tipoMaterial');
            $table->boolean('pago');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
