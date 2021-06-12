<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitarAcessoInternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**este formulario será preenchido pelo 'admin'
     * apos este realizar login do usuario interno
    */
    public function up() 
    {
        Schema::create('solicitar_acesso_internos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->bigInteger('usuario_interno')->unsigned();
            $table->foreign('usuario_interno')
            ->references('id')
            ->on('users')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->String('matricula');

            $table->integer('setor_alocado')->unsigned();
            $table->foreign('setor_alocado')
            ->references('id')
            ->on('setors')
            ->onDelete('no action')
            ->onUpdate('no action');

            $table->date('data_nasc');
            $table->string('pessoa_contato');
            $table->string('tel_pessoa_contato');
            $table->string('fator_rh');
            $table->text('contra_indicacao');
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
        Schema::dropIfExists('solicitar_acesso_internos');
    }
}
