<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cadastro_id');
            $table->string('nome do vendedor');
            $table->integer('qtd de pecas vendida');
            $table->date('data de saida');
            $table->string('forma de pagamento');
            $table->double('total a pagar');   
            $table->timestamps();
            $table->foreign('cadastro_id')->references('id')->on('cadastros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
