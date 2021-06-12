@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
    
    <br>
    <form action={{route('setor.update', ['setor' => $str])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$str->id}}>
        
        <div>
        <h3>Editar Setor:</h3>
        </div>
                       
        <div>
            <label for="nome">Nome do Setor:</label>
            <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{$str->nome}}" readonly>
        </div>
        <div>
            <label for="usuario_responsavel">Responsável do Setor:</label>
            <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="usuario_responsavel" name="usuario_responsavel" value="{{$str->usuario_responsavel}}">
        </div>
        <div>
            <label for="descricao">Descrição do Setor:</label>
            <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="descricao" name="descricao" value="{{$str->descricao}}">
        </div>
        <br>
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer; color: #fff; border: none; font-size: 14px;" type="submit" name="save_str" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection