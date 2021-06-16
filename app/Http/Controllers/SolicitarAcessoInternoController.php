<?php

namespace App\Http\Controllers;

use App\SolicitarAcessoInterno;
use Illuminate\Http\Request;

class SolicitarAcessoInternoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AcessosInternos = SolicitarAcessoInterno::paginate(5);
        return view('AcessosInternos.index', compact('AcessosInternos') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AcessosInternos.create', ['action'=>route('solicitarAcessoInterno.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = $request->get('redirect_to', route('solicitarAcessoInterno.index'));
        if (! $request->has('cancel') ){
            $dados = $request->all();
            SolicitarAcessoInterno::create($dados);
            $request->session()->flash('message', 'Acesso Solicitado com sucesso');
        }
        else{ 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
         return redirect()->to($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SolicitarAcessoInterno  $solicitarAcessoInterno
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitarAcessoInterno $solicitarAcessoInterno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SolicitarAcessoInterno  $solicitarAcessoInterno
     * @return \Illuminate\Http\Response
     */
    public function edit(SolicitarAcessoInterno $solicitarAcessoInterno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SolicitarAcessoInterno  $solicitarAcessoInterno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solicitarAcessoInterno $solicitarAcessoInterno)
    {
        if (! $request->has('cancel') )
        {
            $solicitarAcessoInterno->usuario_interno = $request->input('usuario_interno');
            $solicitarAcessoInterno->matricula = $request->input('matricula');
            $solicitarAcessoInterno->setor_alocado = $request->input('setor_alocado');
            $solicitarAcessoInterno->data_nasc = $request->input('data_nasc');
            $solicitarAcessoInterno->pessoa_contato = $request->input('pessoa_contato');
            $solicitarAcessoInterno->tel_pessoa_contato = $request->input('tel_pessoa_contato');
            $solicitarAcessoInterno->fator_rh = $request->input('fator_rh');
            $solicitarAcessoInterno->contra_indicacao = $request->input('contra_indicacao');
            $solicitarAcessoInterno->update();
            \Session::flash('message', 'Solicitação atualizada com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('solicitarAcessoInterno.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SolicitarAcessoInterno  $solicitarAcessoInterno
     * @return \Illuminate\Http\Response
     */
    public function destroy(SolicitarAcessoInterno $solicitarAcessoInterno, Request $request)
    {
        if (! $request->has('cancel') ){
            $solicitarAcessoInterno->delete();
            \Session::flash('message', 'Solicitação excluída com sucesso!');
        }
        else
        { 
            $request->session()->flash('message', 'Operação cancelada pelo usuário'); 
        }
        return redirect()->route('solicitarAcessoInterno.index'); 
    }
}
