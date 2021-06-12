<!Doctype html lang="pt-br">
  <head>
    <title>EVAC - Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top"> <!--menu fixado no topo-->
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">EVAC21</a>
      </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="sobre">Sobre</a></li>

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Solicitação de  Acesso <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/solicitarAcessoInterno">Usuário Interno</a></li> <!--Acesso de Cadastro Somente p/ Usuario Admin-->           
                <li><a href="/solicitarAcessoExterno">Visitante</a></li>
            </ul>

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastros <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/setor">Setores</a></li> <!--Abre a view setor_show.blade.php, (/setors) é 
                uma Route que aponta para o index do setorController-->           
                <li><a href="/pontoMonitorado">Pontos Monitorados</a></li>
                <li><a href="#">Cracha Rfid</a></li>
            </ul>
          </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Rota do Usuário</a></li>
            <li><a href="#">Lista de Presença</a></li> <!-- lista de Usuários presente no local monitorado  -->
            <li><a href="#">Lista de Presença no P.E</a></li> <!-- lista de usuários no Ponto de Encontro -->
          </ul>
        </li>
        <li><a href="#">Históricos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
      </ul>
    </div>
  </nav>
    
  <div class="container">
    <h3>Right Aligned Navbar</h3> <br> <br> <br>
    <h1 class='text-center'>EVAC </h1>
    <br>
    <h2 class='text-center'>Evacuação Monitorada </h2>
    <br>
    <h3 class='text-center'> Sua segurança é a nossa Missão! </h3>

  </div>

    
</div>

  </body>
  </html>
