<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pontoMonitorado extends Model
{
    protected $fillable = [
        'id',
        'ponto_encontro',
        'setor',
        'descricao'
    ];
}
