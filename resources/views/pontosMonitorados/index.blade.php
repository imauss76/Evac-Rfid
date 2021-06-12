@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Pontos Monitorados:</h3>
        </div>
        <div class="col-md-8">
        <a href="{{route('pontoMonitorado.create')}}" class="btn btn-primary">Incluir Novo Ponto</a>
        </div>

        <div>{{ $dados->links() }}</div>

    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ponto de Encontro</th>
                    <th>Setor</th>
                    <th>Descrição do Ponto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $pontoMonitorado)
                <tr>
                    <td>{{ $pontoMonitorado->ponto_encontro }}</td>
                    <td>{{ $pontoMonitorado->setor }}</td>
                    <td>{{ $pontoMonitorado->descricao }}</td>
                    <td>
                        <ul class="list-inline">
                            <div class="btn-group" role="group" aria-label="Exemplo básico">
                                <a href="{{route('pontoMonitorado.edit', ['pontoMonitorado' => $pontoMonitorado])}}" style=" width: 60px; margin: 0 2px; background: #069cc2; border-radius: 6px; padding: 4px;
                                cursor: pointer;color: #fff; border: none; font-size: 14px;" class="btn btn-primary">Editar</a>
                                    
                                <a href="{{route('pontoMonitorado.delete', ['pontoMonitorado' => $pontoMonitorado])}}" style=" width: 60px; margin: 0 2px; background: red; border-radius: 6px; padding: 4px;
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