@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
    <br>

    <form action={{route('solicitarAcessoExterno.update', ['solicitarAcessoExterno' => $sae])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$sae->id}}>
        
        <div>
        <h3>Editar Solicitação de "{{$sae->nome}}": </h3> 
        </div>

        <div>
        <label for="setor"><strong>Setor:</strong></label>
        <select name="setor" id="setor" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" value="{{$sae->setor}}">
            <option selected></option>
                <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
        </select>
        </div>

        <div><!-- busca o nome dos responsaveis pelo setor (vincular o setor escolhido na label anterior) -->
        <label for="setor"><strong>Anfitrião:</strong></label>
        <select name="anfitriao" id="anfitriao" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
                <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM solicitar_acesso_internos WHERE responsavel_setor = 'Sim'");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
        </select>
        </div>

        <div>
            <label for="data_entrada"><strong>Data de Entrada:</strong></label>
            <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="date" id="data_entrada" name="data_entrada" value="{{$sae->data_entrada}}">  
        </div>

        <div>
            <label for="data_entrada"><strong>Data de Saída:</strong></label>
            <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
                color: black; border: none; font-size: 14px;" type="date" id="data_saida" name="data_saida" value="{{$sae->data_saida}}">  
        </div>


        <div>
        <label for="nome"><strong>Nome:</strong></label>
        <input style="width: 150px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer; color: black; border: none; font-size: 14px;" type="text" id="nome" name="nome" value="{{$sae->nome}}">
        </div>

    <div>
        <label for="matricula"><strong>Matricula:</strong></label>
        <input style="width: 150px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$sae->matricula}}" readonly>
    </div>

    <div>
        <label for="email"><strong>E_mail:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="email" name="email" value="{{$sae->email}}" readonly>
    </div>

    <div>
        <label for="data_nasc"><strong>Data de Nascimento:</strong></label>
        <input style="width: 145px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="{{$sae->data_nasc}}">
    </div>

    <div>
        <label for="cpf"><strong>CPF:</strong></label>
        <input style="width: 140px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="cpf" name="cpf" value="{{$sae->cpf}}">
    </div>


    <div>
        <label for="pessoa_contato"><strong>Pessoa para Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" value="{{$sae->pessoa_contato}}">
    </div>

    <div>
        <label for="tel_pessoa_contato"><strong>Telefone da Pessoa de Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" value="{{$sae->tel_pessoa_contato}}">
    </div>

    <div>
        <label for="fator_rh"><strong>Fator RH:</strong></label>
        <select style="width: 70px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="fator_rh" value="{{$sae->fator_rh}}">
            <option value="---">---</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
        </select>        
    </div>

    <div>
        <label for="contra_indicacao"><strong>Contra Indicações / Alergias:</strong></label><br>
        <input Style="width:500px; height:50px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="contra_indicacao" id="contra_indicacao" value="{{$sae->contra_indicacao}}"></input>
    </div>
    <br>
                
            <div class="form-group">
                <input style=" width:70px; background: #069cc2; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_sae" value="Atualizar">
                <input style=" width:70px; background: red; border-radius: 6px; padding: 6px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection