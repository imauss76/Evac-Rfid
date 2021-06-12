@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <form action={{route('solicitarAcessoInterno.destroy', ['solicitarAcessoInterno' => $sai->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Solicitação:</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
    <label for="usuario_interno"><strong>Nome:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="usuario_interno" name="usuario_interno" value="{{$sai->usuario_interno}}" disabled>
    </div>

    <div>
    <label for="matricula"><strong>Matricula:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$sai->matricula}}" disabled>
    </div>
    <!--
    <div>
        <label for="email"><strong>E_mail:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="email" name="email" value="{{$sai->email}}" disabled>
    </div>
    -->
    <div>
        <label for="setor_alocado"><strong>Setor:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="setor_alocado" name="setor_alocado" value="{{$sai->setor_alocado}}" disabled>
    </div>
    <!--
    <div>
        <label for="responsavel_setor"><strong>Responsável pelo Setor:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="responsavel_setor" name="responsavel_setor" value="{{$sai->responsavel_setor}}" disabled>
    </div>
    -->
    <div>
        <label for="data_nasc"><strong>Data de Nascimento:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="{{$sai->data_nasc}}" disabled>
    </div>

    <div>
        <label for="pessoa_contato"><strong>Pessoa Para Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" value="{{$sai->pessoa_contato}}" disabled>
    </div>

    <div>
        <label for="tel_pessoa_contato"><strong>Telefone da Pessoa de Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 4px; padding: 6px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" value="{{$sai->tel_pessoa_contato}}" disabled>
    </div>

    <div>
        <label for="fator_rh"><strong>Fator RH:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="fator_rh" name="fator_rh" value="{{$sai->fator_rh}}" disabled>
    </div>

    <div>
        <label for="contra_indicacao"><strong>Contra Indicações / Alergia:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" name="contra_indicacao" id="contra_indicacao" value="{{$sai->contra_indicacao}}"></input disabled> 
    </div>
    <br>

    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão da solicitação?</div>
    <div class="form-group">
      <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_sai" value="Deletar">
      <input style=" width:70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection