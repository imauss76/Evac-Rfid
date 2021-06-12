@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">

    <br>
    <form action={{route('pontoMonitorado.update', ['pontoMonitorado' => $pto])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$pto->id}}>
        <div>
            <h3>Editar Ponto "{{$pto->id}}":</h3>
        </div>
        

        <div>
            <label for="setor"><strong>É um Ponto de Encontro?</strong></label>
                <select style="width: 100px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" name="ponto_encontro">
                    <option value="Sim">SIM</option>
                    <option value="Não">NÃO</option>
                </select>
        </div>

        <div>
        
        <label for="nome"><strong>Nome do Setor:</strong></label>
            <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="setor" name="setor" value="{{$pto->setor}}" readonly>

        
        </div>
        
        <div>
            <label for="descricao"><strong>Descrição do Ponto:</strong></label>
            <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="text" id="descricao" name="descricao" value="{{$pto->descricao}}">
        </div>
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_pto" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection