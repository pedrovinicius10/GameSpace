<?php
$bd = new SQLite3("jogos.db");

$titulo = $bd->escapeString( $_POST ["titulo"]);
$descricao = $bd ->escapeString( $_POST ["descricao"]);
$nota =$bd-> escapeString ( $_POST ["nota"]);
$poster= $bd -> escapeString ( $_POST ["poster"]);


$sql = "INSERT INTO jogos (titulo, poster, descricao, nota) 
        VALUES (:titulo, :poster, :descricao, :nota)";
$stmt = $bd ->prepare($sql);
$stmt ->bindValue (':titulo', $titulo, SQLITE3_TEXT);
$stmt ->bindValue (':descricao', $descricao, SQLITE3_TEXT);
$stmt ->bindValue (':nota', $nota, SQLITE3_FLOAT);
$stmt ->bindValue (':poster', $poster, SQLITE3_TEXT);
   
    
    if ($stmt-> execute())
    echo "\n jogos inseridos com sucesso \n";
    else
    echo "\nerro ao inserir jogos.". $bd->lastErrorMsg();

    header("Location: galeria.php?msg=Jogo+cadastrado+com+sucesso" );
    
?>