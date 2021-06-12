<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitarAcessoInterno extends Model
{
    protected $fillable = [
        'id',
        'usuario_interno',
        'matricula',
        'setor_alocado',
        'data_nasc',
        'pessoa_contato',
        'tel_pessoa_contato',
        'fator_rh',
        'contra_indicacao'
    ];
}
