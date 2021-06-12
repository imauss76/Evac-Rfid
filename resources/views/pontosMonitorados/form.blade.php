    <div class="row justify-content-center align-items-center">
<form  action={{route('pontoMonitorado.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>

    <div>
    <h3>Incluir Novo Ponto:</h3>
    </div>
    
    <div>
    <div >
        <label for="setor"><strong>É um Ponto de Encontro?</strong></label>
    <select name="ponto_encontro" style="width: 100px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
      <option value="Não">NÃO</option>
      <option value="Sim">SIM</option>
    </select>
        
    </div>
    <div>
        <label for="setor"><strong>Setor:</strong></label>

        <select name="setor" id="setor" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;">
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
    <div>
        <label for="descricao"><strong>Descrição do Ponto:</strong></label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: black; border: none; font-size: 14px;" type="text" id="decricao" name="descricao" placeholder="Descreva o ponto.">
    </div>