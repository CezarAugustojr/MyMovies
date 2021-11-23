<?php include "cabecalho.php" ?>

<?php 

$filme1 = [
          "titulo"=>"Vingadores Ultimato",
           "nota" => 8.6,
           "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. 
           Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de 
           Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
           "poster" => "https://www.themoviedb.org/t/p/original/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg",

];

$filme2 = [
  "titulo"=>"Guardiões da Galaxia 2",
   "nota" => 9.0,
   "sinopse" => "Os Guardiões precisam lutar para manter sua recém descoberta família unida, enquanto descobrem os mistérios sobre o 
   verdadeiro pai de Peter Quill.",
   "poster" => "https://www.themoviedb.org/t/p/w500/jGtBLu0JAKf5JxhWgmF68HROzCA.jpg",

];

$filme3 = [
  "titulo"=>"Batman O Cavaleiro Das Trevas",
   "nota" => 10,
   "sinopse" => "Após dois anos desde o surgimento do Batman, os criminosos de Gotham City têm muito o que temer. 
   Com a ajuda do tenente James Gordon e do promotor público Harvey Dent, Batman luta contra o crime organizado. 
   Acuados com o combate, os chefes do crime aceitam a proposta feita pelo Coringa e o contratam para combater o Homem-Morcego.",
   "poster" => "https://www.themoviedb.org/t/p/original/iGZX91hIqM9Uu0KGhd4MUaJ0Rtm.jpg",

];

$filme4 = [
  "titulo"=>"A origem",
   "nota" => 8.5,
   "sinopse" => "Um ladrão que rouba segredos corporativos por meio do uso da tecnologia de compartilhamento de sonhos,
    recebe a tarefa inversa de plantar uma ideia na mente de um Diretor Executivo.",
   "poster" => "https://www.themoviedb.org/t/p/original/lFrnL8dxEOp6qVj54vyFLi0Qyw.jpg",

];

$filmes = [$filme1, $filme2, $filme3, $filme4]

?>

<body>
  <!-- Botões galeria e cadastar -->
  <nav class="nav-extended  deep-purple lighten-2 ">
      <div class="nav-wrapper">
          <ul id="nav-mobile" class="right">
          <li class="active"><a href="/">Galeria</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
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
  <!-- CARD 1-->  
    <div class="row">

      <?php foreach($filmes as $filme) : ?>
        <div class="col s3">
        <div class="card hoverable">
          <div class="card-image">
            <img src=<?= $filme["poster"] ?>>
            <a class="btn-floating halfway-fab waves-effect waves-light red">
              <i class="material-icons #9575cd deep-purple darken-1">favorite_border</i></a>
          </div>
          <div class="card-content">
            <p class="valign-wrapper">
              <i class="material-icons amber-text">star</i><?= $filme["nota"] ?>
              <p><span class="card-title"><?= $filme["titulo"] ?></span></p>
            </p>
            <p><?= $filme["sinopse"] ?>
            </p>
          </div>
        </div>
    </div>
      <?php endforeach ?>

      
</body>
</html>