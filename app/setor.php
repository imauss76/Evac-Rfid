<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setor extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'usuario_responsavel',
        'descricao'
    ];
}
