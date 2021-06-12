@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
    <br>
    
    <form action={{route('solicitarAcessoInterno.update', ['solicitarAcessoInterno' => $sai])}} method="post" autocomplete="off">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$sai->id}}>
        
        <div>
        <h3>Editar Solicitação de "{{$sai->usuario_interno}}":</h3> 
        </div>

        <div>
        <label for="usuario_interno"><strong>Nome:</strong></label>
        <input style="width: 150px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer; color: black; border: none; font-size: 14px;" type="text" id="usuario_interno" name="usuario_interno" value="{{$sai->usuario_interno}}" readonly>
        </div>

        <div>
        <label for="matricula"><strong>Matricula:</strong></label>
        <input style="width: 150px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" value="{{$sai->matricula}}" readonly>
        </div>

        <div>
        <label for="setor_alocado"><strong>Setor:</strong></label>
        <select name="setor_alocado" id="setor_alocado" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" value="{{$sai->setor_alocado}}">
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
        <!--
        <div>
        <label for="responsavel_setor"><strong>Responsável pelo Setor?</strong></label>
        <select style="width: 70px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" name="responsavel_setor" value="{{$sai->responsavel_setor}}">
            <option value="Não">NÃO</option>
            <option value="Sim">SIM</option>
        </select>        
        </div>
        -->
        <div>
        <label for="data_nasc"><strong>Data de Nascimento:</strong></label>
        <input style="width: 140px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="{{$sai->data_nasc}}">
        </div>

        <div>
        <label for="pessoa_contato"><strong>Pessoa para Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" value="{{$sai->pessoa_contato}}">
        </div>

        <div>
        <label for="tel_pessoa_contato"><strong>Telefone da Pessoa de Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" value="{{$sai->tel_pessoa_contato}}">
        </div>

        <div>
        <label for="fator_rh"><strong>Fator RH:</strong></label>
        <select style="width: 70px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="fator_rh" name="fator_rh" value="{{$sai->fator_rh}}" readonly>
            <option selected>{{$sai->fator_rh}}</option>
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
        <input Style="width:400px; height:70px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" name="contra_indicacao" id="contra_indicacao" value="{{$sai->contra_indicacao}}"></input>
        </div>
        <br>
                
            <div class="form-group">
                <input style=" width: 70px; background: #069cc2; border-radius: 4px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="save_sai" value="Atualizar">
                <input style=" width: 70px; background: red; border-radius: 6px; padding: 4px;
            cursor: pointer;color: #fff; border: none; font-size: 14px;" type="submit" name="cancel" value="Cancelar">
            </div>
        </div>
    </form>
</div>
@endsection