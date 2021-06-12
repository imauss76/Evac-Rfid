<?php

namespace App\Http\Controllers;

use App\pontoMonitorado;
use Illuminate\Http\Request;

class PontoMonitoradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = pontoMonitorado::paginate(5);
        return view('pontosMonitorados.index', compact('dados') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pontosMonitorados.create', ['action'=>route('pontoMonitorado.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('pontoMonitorado.index'));
    if (! $request->has('cancel') ){
        $dados = $request->all();
        pontoMonitorado::create($dados);
        $request->session()->flash('message', 'Ponto cadastrado com sucesso');
    }
    else
    { 
        $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
    }
    return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pontoMonitorado  $pontoMonitorado
     * @return \Illuminate\Http\Response
     */
    public function show(pontoMonitorado $pontoMonitorado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pontoMonitorado  $pontoMonitorado
     * @return \Illuminate\Http\Response
     */
    public function edit(pontoMonitorado $pontoMonitorado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pontoMonitorado  $pontoMonitorado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pontoMonitorado $pontoMonitorado)
    {
        if (! $request->has('cancel') ){
            $pontoMonitorado->ponto_encontro = $request->input('ponto_encontro');
            $pontoMonitorado->setor = $request->input('setor');
            $pontoMonitorado->descricao = $request->input('descricao');
            $pontoMonitorado->update();
            \Session::flash('message', 'Ponto atualizado com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('pontoMonitorado.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pontoMonitorado  $pontoMonitorado
     * @return \Illuminate\Http\Response
     */
    public function destroy(pontoMonitorado $pontoMonitorado, Request $request)
    {
        if (! $request->has('cancel') ){
            $pontoMonitorado->delete();
            \Session::flash('message', 'Ponto excluído com sucesso !');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('pontoMonitorado.index'); 
    }
}
