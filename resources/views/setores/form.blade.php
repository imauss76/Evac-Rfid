<form action={{route('setor.store')}} method="post" autocomplete="off">
    {{ csrf_field() }}
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <h3>Incluir Novo Setor:</h3>
    </div>
    
    <div>
        <label for="nome">Nome do Setor:</label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="nome" placeholder="Digite o nome do Setor" name="nome">

    </div>
    
    <div>
    <label for="usuario_responsavel">Responsável do Setor:</label>
    
    <select name="usuario_responsavel" id="usuario_responsavel" style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;">
    <option selected></option>
        <?php
        
        $conn = mysqli_connect('localhost','root','','evac-rfid')or die(mysqli_error());
        mysqli_set_charset($conn,'utf8')or die(mysqli_error($conn));
        $sql = mysqli_query($conn,"SELECT id, name FROM users WHERE id >= 1 ORDER BY NAME");
        while($row = mysqli_fetch_assoc($sql)){
            echo "<option value=".$row['id'].">".$row['name']."</option>";
        }?>
    </select>
    </div>

    <div>
        <label for="descricao">Descrição do Setor:</label>
        <input style="width: 250px; background: #DCDCDC; border-radius: 6px; padding: 4px; cursor: pointer;
            color: #fff; border: none; font-size: 14px;" type="text" id="descricao" placeholder="Descreva o Setor" name="descricao">
    </div>
    
