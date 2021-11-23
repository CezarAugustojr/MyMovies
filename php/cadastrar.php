<?php include "cabecalho.php" ?>

<body>
  <!-- Botões galeria e cadastar -->
  <nav class="nav-extended #9575cd deep-purple lighten-2 ">
      <div class="nav-wrapper">
          <ul id="nav-mobile" class="right">
            <li><a href="galeria.php">Galeria</a></li>
            <li class="active"><a href="/novo">Cadastrar</a></li>
          </ul>
      </div>
      <!--Titulo do Site -->
      <div class="nav-header center">
          <h1>MEUS FILMES</h1>
      </div>
      <!--Titulo do Site -->
      <div class="nav-content">
        <ul class="tabs tabs-transparent #5e35b1 deep-purple darken-1 ">
          <li class="tab"><a class="active" href="#test1">Todos</a></li>
          <li class="tab"><a href="#test2">Assistidos</a></li>
          <li class="tab"><a href="#test3">Favoritos</a></li>
        </ul>
      </div>
      
    </nav>
    <!-- Começo do formulario -->
    <div class="row">
      <div class="col s6 offset-s3">
        <div class="card ">
          <div class="card-content">
            <span class="card-title">Cadastar Filme</span>

                <!-- input do titulo -->
            <div class="row">
                <div class="input-field col s10">
                  <input  id="titulo" type="text" class="validate" required>
                  <label for="Titulo">Titulo do Filme</label>
               </div>
            </div>
    <!-- Caixa de texto para sinopse -->
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s10">
                            <textarea id="sinopse" class="materialize-textarea"></textarea>
                            <label for="sinopse">Sinopse</label>
                        </div>
                    </div>
                  </form>
            </div>
      <!-- input Notas -->
              <div class="row">
                        <div class="input-field col s3">
                          <input  id="nota" type="number" step=".1" min=0 max=10 class="validate" required>
                          <label for="Nota">Nota</label>
                        </div>
              </div>
      <!-- Botão Files -->
                <div class="file-field input-field">
                  <div class="btn purple lighten-2 black-text">
                    <span>Capa</span>
                    <input type="file">
                  </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>

    <!-- Botoes -->
          <div class="card-action">
            <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
            <a href="#" class="waves-effect waves-light btn #9575cd deep-purple darken-1">Confirmar</a>
          </div>
    <!-- -->
        </div>
      </div>
    </div>
