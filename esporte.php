<?php include "cabecalho.php" ?>
<?php
$jogo5 = [
    "titulo" => "NFL 2021",
    "Descrição" => "Madden NFL 21 chega repleto de novos recursos e aprimoramentos de jogabilidade inovadores, proporcionando novos níveis de engenhosidade e controle, desenvolvidos para inspirar criatividade dentro e fora do campo.",
    "Poster" => "https://cnet4.cbsistatic.com/img/pEt0wy5pEzSGvZmK3_4e6wZa8d8=/940x0/2020/07/17/beae8852-b7e1-468a-b32d-8b33b2abedd4/madden-21-box-art.jpg",

];
$jogo6 = [
    "titulo" => "Fifa 2021",
    "Descrição" => "Experimente uma autenticidade incomparável que proporciona a experiência mais realista do Maior Jogo do Mundo, incluindo a UEFA Champions League e a CONMEBOL Libertadores",
    "Poster" => "https://s2.glbimg.com/nAVL0kqLEaZZ3egS7-SccqmgKbk=/w300/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/k/K/xNm8yJR1aCOf8xWpBo4g/fifa-21-capa-mbappe.jpeg",

];
$jogo7 = [
    "titulo" => "NBA 2021",
    "Descrição" => "Experimente uma autenticidade incomparável que proporciona a experiência mais realista do Maior Jogo do Mundo, incluindo a UEFA Champions League e a CONMEBOL Libertadores",
    "Poster" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHzJ0D4d69Sples6e5XbREgGsQlJ-UQ-fruQ&usqp=CAU ",
];

$jogos =[$jogo5, $jogo6,$jogo7];
?>

<div class="row">
<?php foreach ($jogos as $jogos) : ?>

    <div class="col s3">
        <div class="card hoverable">
            <div class="card-image">
                <img src="<?= $jogos["Poster"] ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red">
                    <i class="material-icons">favorite</i></a>
            </div>
            <div class="card-content">
                <span class="card-title center"> <?= $jogos["titulo"] ?> </span>
                <p> <?= $jogos["Descrição"] ?></p>
            </div>
        </div>
    </div>
<?php endforeach ?>