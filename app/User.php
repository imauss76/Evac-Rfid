<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\CustomPassword;

class User extends Authenticatable
{
    use Notifiable;

    //Enviar e-mail traduzido

    public function sendPasswordResetNotification($token){

        $this->notify(new CustomPassword($token));

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function solicitarAcessoInterno()
    {
        return $this->belongsTo('App\SolicitarAcessoInterno', 'id', 'usuario_interno');
    }
}
