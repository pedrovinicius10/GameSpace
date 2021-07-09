<?php

class JogoRepositoryPDO{
    public function ListarTodos () :array {
        $bd = Conexao::criar();
        $jogosLista =  array;

        $sql = "SELECT * FROM jogos";
        $jogos = $bd -> query($sql);
        while($jogo = $jogos -> fetchArray()){
            array_push ($jogoLista, $jogosLista);
        }
    return $jogoLista;
    
}

    public function salvar (Jogo $jogo):bool{
        return false;
    
    }
}

?>