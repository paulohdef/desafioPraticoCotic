<?php 
require ("../backend_php/classes/Personagem.php");   
$personagens = Personagem::obterTodos();     
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>The Boys 3 - Lista</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
  </head>
  <body class="main-bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
            <a class="nav-link" href="index.html">
              Início <span class="sr-only">(página atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="formulario.php">
              Sugerir Personagem <span class="sr-only">(página atual)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="lista.php">
              Lista <span class="sr-only">(página atual)</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div  >
      <table id="wrapTabela" class="container" >
        <thead>
          <tr id="head">
            <th>Nome</th>
            <th>Idade</th>
            <th>Intérprete</th>
            <th>Alinhamento</th>
            <th>Biografia</th>
          </tr>
        </thead>
        <tbody>
          <!-- Informações serão geradas aqui. -->
          <?php foreach ($personagens as $personagem) : ?>
          <tr>
            <?php if($personagem['alinhamento'] === 'The boys') :?>
              <td style="color:blue"><?php echo $personagem['nome']; ?></td>  
            <?php endif; ?> 
            <?php if($personagem['alinhamento'] === 'Supes') :?>
              <td style="color:red"><?php echo $personagem['nome']; ?></td>  
            <?php endif; ?> 
            <?php if($personagem['alinhamento'] !== 'The boys' && $personagem['alinhamento'] !== 'Supes' ) :?>
              <td><?php echo $personagem['nome']; ?></td>  
            <?php endif; ?>           
            <td><?php echo $personagem['idade']; ?></td>  
            <td><?php echo $personagem['interprete']; ?></td>  
            <td><?php echo $personagem['alinhamento']; ?></td>  
            <td><?php echo $personagem['biografia']; ?></td>   
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <script src="../js/tabela.js"></script>
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
