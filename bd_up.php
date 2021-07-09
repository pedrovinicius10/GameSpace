<?php

$bd = new SQLite3("jogos.db");

$sql = "DROP TABLE IF EXISTS jogos";

if ($bd->exec($sql))
  echo "\ntabela jogos apagada\n";
else
  echo "\ntabela de jogos não apagada\n";


$sql = "CREATE TABLE jogos (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR (200) NOT NULL,
    poster VARCHAR (200),
    descricao TEXT,
    nota NUMBER
)";

if ($bd->exec($sql))
  echo "\ntabela jogos criada\n";
else
  echo "\nerro ao criar tabela jogos\n";

$sql = "INSERT INTO jogos (id, titulo, poster, descricao, nota) VALUES (

0,
'Fifa 2021',
'https://s2.glbimg.com/nAVL0kqLEaZZ3egS7-SccqmgKbk=/w300/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_bc8228b6673f488aa253bbcb03c80ec5/internal_photos/bs/2020/k/K/xNm8yJR1aCOf8xWpBo4g/fifa-21-capa-mbappe.jpeg',
'Experimente uma autenticidade incomparável que proporciona a experiência mais realista do Maior Jogo do Mundo, incluindo a UEFA Champions League e a CONMEBOL Libertadores',
10
)";

if ($bd->exec($sql))
  echo "\n jogos inseridos com sucesso \n";
else
  echo "\nerro ao inserir jogos\n";

$sql = "INSERT INTO jogos (id, titulo, poster, descricao, nota) VALUES (
 1,
'Farcry 6',
'https://encrypted-tbn0.gstatic.com/w300/images?q=tbn:ANd9GcSn1gXLP1TQa76BBY4miLnx7Xl16LY7bt1Zow&usqp=CAU',
'FARCRY 6 leva os jogadores para um mundo cheio de adrenalina, onde uma guerrilha começou uma revolução. Anton Castillo é o ditador de Yara, e tudo fará para restaurar a antiga glória da sua nação. O seu filho Diego segue as suas pegadas manchadas de sangue. Torna-te um guerrilheiro e arrasa com este regime.',
7
)";

if ($bd->exec($sql))
  echo "\n jogos inseridos com sucesso \n";
else
  echo "\nerro ao inserir jogos\n";

  $sql = "INSERT INTO jogos (id, titulo, poster, descricao, nota) VALUES (
    2,
   'Dragon Ball Z kakarot',
   'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7YGaepzVL4jX2LWh61mvYvjpU_ArAUVRcjw&usqp=CAU',
   'luta',
   7
   )";
   
   if ($bd->exec($sql))
     echo "\n jogos inseridos com sucesso \n";
   else
     echo "\nerro ao inserir jogos\n";
 