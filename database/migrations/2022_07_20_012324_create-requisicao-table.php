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
        Schema::dropIfExists('requisicoes');
        Schema::create('requisicoes', function (Blueprint $table) {
            $table->id();
            $table->string('fornecedor');
            $table->string('material');
            $table->string('validacaoAlmoxarifado');
            $table->string('validacaoDemandante');
            $table->string('tipoMaterial');
            $table->string('pago');
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
