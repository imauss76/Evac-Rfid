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
    
    public function user()
    {
        return $this->belongsTo('App\User','usuario_interno','id');
    }

    public function setor()
    {
        return $this->belongsTo('App\Setor','setor_alocado','id');
    }

    // public function somentePermitidos($setor) {
    //     $data = User::whereNotExist('status', '<>', $setor)
    //     ->groupBy('status')
    //     ->get();

    //     return $data
    // }
}
