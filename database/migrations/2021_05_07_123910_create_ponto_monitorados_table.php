<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePontoMonitoradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponto_monitorados', function (Blueprint $table) {
            $table->increments('id',10);
            $table->string('ponto_encontro');
            $table->integer('setor')->unsigned();
            $table->foreign('setor')
            ->references('id')
            ->on('setors')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('descricao');
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
        Schema::dropIfExists('ponto_monitorados');
    }
}
