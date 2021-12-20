<?php 
require("../backend_php/classes/Personagem.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $personagem = new Personagem();
  
  $personagem->nome = $_POST['nome'];
  $personagem->idade = $_POST['idade'];
  $personagem->interprete = $_POST['interprete'];
  $personagem->alinhamento = $_POST['alinhamento'];
  $personagem->biografia  = $_POST['biografia'];
  // var_dump($personagem);
  $inserir = Personagem::inserir($personagem);
  // var_dump($inserir);
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Boys 3 - Formulário</title>
    <script>
    function alert(){
      alert("Parabéns, Sua idéia foi enviada com sucesso!");
    }
    </script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body class="main-bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <a class="navbar-brand" href="#"
        ><img src="../assets/logo_cotic.fw.png" width="256" height="64" alt=""
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#conteudoNavbarSuportado"
        aria-controls="conteudoNavbarSuportado"
        aria-expanded="false"
        aria-label="Alterna navegação"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html"
              >Início <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="formulario.php">
              Sugerir Personagem <span class="sr-only">(página atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista.php">
              Lista <span class="sr-only">(página atual)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Form -->
  <div class="formWrap container bgForm">
    
    <img src="../assets/formImage.jpg">

    <h1>Insira abaixo as informações refentes à sua ideia para o novo personagem da terceira temporada de The Boys. </h1>

    <form action="formulario.php" method="POST">

      <div class="form-group">
        <label for="nomePersonagemInput">Nome</label>
        <input type="text" class="form-control" id="nomePersonagemInput" placeholder="Insira aqui o nome desejado" name="nome" required>
      </div>
      <div class="form-group ">
        <label for="idadePersonagemInput">Idade</label>
        <input type="number" class="form-control" id="idadePersonagemInput" placeholder="Insira aqui a idade do personagem" name="idade" required>
      </div>
      <div class="form-group">
        <label for="pessoasPersonagemInput">Possíveis Atores/Atrizes</label>
        <input type="text" class="form-control" id="pessoasPersonagemInput" placeholder="Insira aqui o ator/atriz desejado" name="interprete" required>
      </div>
      <div class="form-group">
        <label for="alinhamentoPersonagemInput">Alinhamento</label>
        <select class="form-control" id="alinhamentoPersonagemInput" name="alinhamento" required>
          <option>The boys</option>
          <option>Supes</option>
        </select>
      </div>
      <div class="form-group">
          <label for="biografiaPersonagemInput">Biografia</label>
          <textarea class="form-control" id="biografiaPersonagemInput" rows="3" placeholder="Insira aqui a Biografia do personagem" name="biografia" required></textarea>
      </div>
    
      <div id="btnForm">
        <a href="index.html" class="btn btn-outline-secondary btnSend">Voltar</a>


        <button type="submit" class="btn btn-outline-light btnSend">Enviar</button>

    
      </div>

      
    </form>
    <div id="blackBg"></div>
  </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
