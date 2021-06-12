@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <form action={{route('solicitarAcessoExterno.destroy', ['solicitarAcessoExterno' => $sae->id])}} method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <div>
    <h3>Deletar Solicitação:</h3>
    </div>

    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
        <label for="setor"><strong>Setor:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="setor" name="setor" value="{{$sae->setor}}" disabled>
    </div>

    <div>
        <label for="anfitriao"><strong>Anfitriao:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="anfitriao" name="anfitriao" value="{{$sae->anfitriao}}" disabled>
    </div>

    <div>
        <label for="data_entrada"><strong>Data de Entrada:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_entrada" name="data_entrada" value="{{$sae->data_entrada}}" disabled>  
        </div>

    <div>
        <label for="data_entrada"><strong>Data de Saída:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_saida" name="data_saida" value="{{$sae->data_saida}}" disabled>  
    </div>


    <div>
    <label for="nome"><strong>Nome:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{$sae->nome}}" disabled>
    </div>

    <div>
    <label for="matricula"><strong>Matricula:</strong></label>
    <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$sae->matricula}}" disabled>
    </div>

    <div>
        <label for="email"><strong>E_mail:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="email" name="email" value="{{$sae->email}}" disabled>
    </div>

    <div>
        <label for="data_nasc"><strong>Data de Nascimento:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="{{$sae->data_nasc}}" disabled>
    </div>

    <div>
        <label for="cpf"><strong>CPF:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="cpf" name="cpf" value="{{$sae->cpf}}" disabled>
    </div>

    <div>
        <label for="pessoa_contato"><strong>Pessoa Para Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" value="{{$sae->pessoa_contato}}" disabled>
    </div>

    <div>
        <label for="tel_pessoa_contato"><strong>Telefone da Pessoa de Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" value="{{$sae->tel_pessoa_contato}}" disabled>
    </div>

    <div>
        <label for="fator_rh"><strong>Fator RH:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="fator_rh" name="fator_rh" value="{{$sae->fator_rh}}" disabled>
    </div>

    <div>
        <label for="contra_indicacao"><strong>Contra Indicações / Alergia:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" name="contra_indicacao" id="contra_indicacao" value="{{$sae->contra_indicacao}}" rows="3"></input disabled> 
    </div>
    <br>

    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão da solicitação?</div>
    <div class="form-group">
      <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="delete_sae" value="Deletar">
      <input style=" width:70px; background: red; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection