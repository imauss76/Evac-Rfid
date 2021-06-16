@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Usuários Internos:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('solicitarAcessoInterno.create')}}" class="btn btn-primary">Solicitar Acesso</a>
        </div>
        <div>{{ $AcessosInternos->links() }}</div>
  
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Setor Alocado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($AcessosInternos as $solicitarAcessoInterno)
              
                <tr>
                    <td>{{ $solicitarAcessoInterno->matricula }}</td>
                    <td>{{ $solicitarAcessoInterno->user->name }}</td>
                    <td>{{ $solicitarAcessoInterno->setor->nome }}</td>
                    <td>
                        <ul class="list-inline">

                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('solicitarAcessoInterno.edit', ['solicitarAcessoInterno' => $solicitarAcessoInterno])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('solicitarAcessoInterno.delete', ['solicitarAcessoInterno' => $solicitarAcessoInterno])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Deletar</a>
                                
                            </div>
                            </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection