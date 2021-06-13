<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('teste', function () {
    $dados = DB::table('setors')->get();
    dd($dados);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('sobre', function () {
    return view('sobre');
});

Auth::routes();

Route::middleware('auth')->group(function(){

    Route::resource('/inicio', 'InicioController');

    Route::resource('/setor', 'SetorController');

    Route::resource('/pontoMonitorado', 'PontoMonitoradoController');

    Route::resource('/solicitarAcessoInterno', 'SolicitarAcessoInternoController');

    Route::resource('/solicitarAcessoExterno', 'SolicitarAcessoExternoController');
});


Route::get('/home', 'HomeController@index')->name('home');

/** Rotas para INICIO */



/** Rotas para SETORES */

Route::resource('/setor', 'SetorController')->Middleware('auth');

Route::get('/setor/delete/{setor}', function (App\setor $setor) {
    return view('setores.destroy', ['str' => $setor]);
})->name('setor.delete');

Route::get('/setor/edit/{setor}', function (App\setor $setor) {
    return view('setores.edit', ['str' => $setor]);
})->name('setor.edit');

/** Rotas para PONTOS MONITORADOS */

//Route::resource('/pontoMonitorado', 'PontoMonitoradoController')->Middleware('auth');

Route::get('/pontoMonitorado/delete/{pontoMonitorado}', function (App\pontoMonitorado $pontoMonitorado) {
    return view('pontosMonitorados.destroy', ['pto' => $pontoMonitorado]);
})->name('pontoMonitorado.delete');

Route::get('/pontoMonitorado/edit/{pontoMonitorado}', function (App\pontoMonitorado $pontoMonitorado) {
    return view('pontosMonitorados.edit', ['pto' => $pontoMonitorado]);
})->name('pontoMonitorado.edit');

/** Rotas para SOLICITAR ACESSO USUÁRIO INTERNO */

//Route::resource('/solicitarAcessoInterno', 'SolicitarAcessoInternoController')->Middleware('auth');

Route::get('/solicitarAcessoInterno/delete/{solicitarAcessoInterno}', function (App\solicitarAcessoInterno $solicitarAcessoInterno) {
    return view('acessosInternos.destroy', ['sai' => $solicitarAcessoInterno]);
})->name('solicitarAcessoInterno.delete');

Route::get('/solicitarAcessoInterno/edit/{solicitarAcessoInterno}', function (App\solicitarAcessoInterno $solicitarAcessoInterno) {
    return view('acessosInternos.edit', ['sai' => $solicitarAcessoInterno]);
})->name('solicitarAcessoInterno.edit');

/** Rotas para SOLICITAR ACESSO USUÁRIO EXTERNO - VISITANTE */

//Route::resource('/solicitarAcessoExterno', 'SolicitarAcessoExternoController')->Middleware('auth');

Route::get('/solicitarAcessoExterno/delete/{solicitarAcessoExterno}', function (App\solicitarAcessoExterno $solicitarAcessoExterno) {
    return view('acessosExternos.destroy', ['sae' => $solicitarAcessoExterno]);
})->name('solicitarAcessoExterno.delete');

Route::get('/solicitarAcessoExterno/edit/{solicitarAcessoExterno}', function (App\solicitarAcessoExterno $solicitarAcessoExterno) {
    return view('acessosExternos.edit', ['sae' => $solicitarAcessoExterno]);
})->name('solicitarAcessoExterno.edit');

Route::get('arqui', function () {
    return view('/Arquivos/arquivoUI');
});

Route::get('arquv', function () {
    return view('/Arquivos/arquivoUV');
});

/** Rota para ATUALIZAR SENHA DO USUÁRIO */

Route::get('/atualizar', function () {
    return view('/auth/passwords.reset');
});
