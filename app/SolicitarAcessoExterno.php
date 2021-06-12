<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitarAcessoExterno extends Model
{
    protected $fillable = [

        'id',
        'setor',
        'anfitriao',
        'data_entrada',
        'data_saida',
        'usuario_visitante',
        'matricula',
        'data_nasc',
        'cpf',
        'pessoa_contato',
        'tel_pessoa_contato',
        'fator_rh',
        'contra_indicacao'
    ];
}
