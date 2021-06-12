@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <form action={{route('pontoMonitorado.destroy', ['pontoMonitorado' => $pto->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Ponto "{{$pto->id}}":</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <label for="ponto_encontro"><strong>Ponto Monitorado:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="ponto_encontro" name="ponto_encontro" value="{{$pto->ponto_encontro}}" disabled>
    </div>
    <div>
    <label for="setor"><strong>Setor:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="setor" name="setor" value="{{$pto->setor}}" disabled>
    </div>
    <div>
    <label for="descricao"><strong>Descrição do Ponto:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="descricao" name="descricao" value="{{$pto->descricao}}" disabled>
    </div>
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do ponto?</div>
      <div class="form-group">
        <input style=" width: 70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_pto" value="Deletar">
        <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
    </div>
  </form>
</div>
@endsection
