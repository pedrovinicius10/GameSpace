<?php include "cabecalho.php" ?>


<body>

    <div class="row">
        <form action="inserirJogo.php" method="POST">
            <div class="col s6 offset-s3 ">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Jogo</span>


                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Titulo do Jogo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                                    <label for="descricao">Descrição</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s4">
                                <input name="nota" id="nota" type="number" step=".1" min=0 max=10 class="validate" required>

                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn red lighten-2 black-text">
                                <span>Capa</span>
                                <input type="file" >
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>

                        <div class="card-action center ">
                            <a class="btn waves-effect waves-ligth btn grey darken-3" href="galeria.php">Cancelar</a>
                            <a class="btn waves-effect waves-ligth btn red darken-3" href="galeria.php">Cadastrar</a>
                            
                        </div>

                    </div>
                </div>
        </form>
    </div>

</body>