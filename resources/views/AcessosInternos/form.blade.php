<form action={{route('solicitarAcessoInterno.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    

    <div>
    <h3>Solicitar Acesso - Interno:</h3>
    </div>

    <div>
        <label for="usuario_interno"><strong>Nome:</strong></label>

        <select name="usuario_interno" id="usuario_interno" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
                <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, name FROM users u 
                WHERE NOT EXISTS (SELECT usuario_interno FROM solicitar_acesso_internos i WHERE u.id = i.usuario_interno) AND NOT EXISTS (SELECT usuario_visitante FROM solicitar_acesso_externos e WHERE u.id = e.usuario_visitante) order by name");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    
                }?>
        </select>
        Quando temos nomes composto só grava o primeiro nome no BD.
    </div>

    <div>
        <label for="matricula"><strong>Matricula:</strong></label>
        <input style="width: 150px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="matricula" name="matricula" placeholder="Digite a Matricula.">
            
    </div>

    <div>
        <label for="setor_alocado"><strong>Setor Alocado:</strong></label>
        <select name="setor_alocado" id="setor_alocado" style="width: 200px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
            <option selected></option>
                <?php
                $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
                mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
                $sql = mysqli_query($conn,"SELECT id, nome FROM setors WHERE id >= 1 ORDER BY nome");
                while($row = mysqli_fetch_assoc($sql)){
                    echo "<option value=".$row['id'].">".$row['nome']."</option>";
                }?>
        </select>
    </div>

    <div>
        <label for="data_nasc"><strong>Data de Nascimento:</strong></label>
        <input style="width: 140px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="date" id="data_nasc" name="data_nasc" value="dd-mm-yyyy">
    </div>

    <div>
        <label for="pessoa_contato"><strong>Pessoa para Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="pessoa_contato" name="pessoa_contato" placeholder="Pessoa para contato">
    </div>

    <div>
        <label for="tel_pessoa_contato"><strong>Telefone da Pessoa de Contato:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="tel_pessoa_contato" name="tel_pessoa_contato" placeholder="Telefone da Pessoa para Contato">
    </div>

    <div>
        <label for="fator_rh"><strong>Fator RH:</strong></label>
        <select style="width: 70px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="fator_rh" name="fator_rh">
            <option value="">   </option>
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
            color: black; border: none; font-size: 14px;" type="text" name="contra_indicacao" id="contra_indicacao"></input>
    </div>
    <br>