<?php include "cabecalho.php" ?>
<?php

$jogo8 = [
    "titulo" => "Call of Dutty Black Ops Cold War",
    "Descrição" => " Nada é o que parece numa emocionante campanha para um jogador da Raven Software, onde os intervenientes se defrontam com figuras históricas e verdades duras, ao lutarem em todo o mundo, passando por locais icónicos como Berlim Oriental, o Vietname, a Turquia, a sede do KGB soviético e muito mais",
    "Poster" => "https://programadoresbrasil.com.br/wp-content/uploads/2020/08/callofduty.2.jpeg",
];

?>

<div class="row">


  
  <div class="col s3">
    <div class="card hoverable">
      <div class="card-image">
        <img src="<?= $jogo8["Poster"] ?>">
        <a class="btn-floating halfway-fab waves-effect waves-light red">
          <i class="material-icons">favorite</i></a>
        </div>
        <div class="card-content">
          <span class="card-title center"><?= $jogo8["titulo"] ?></span>
          <p> <?= $jogo8["Descrição"] ?></p>
        </div>
      </div>
    </div>
    
  </>
  
  </html>
<?php 