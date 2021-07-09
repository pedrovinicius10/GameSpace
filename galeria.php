<?php include "cabecalho.php" ?>


<?php

$bd = new SQLite3("jogos.db");
$sql = "SELECT * FROM jogos";
$jogos = $bd->query($sql);

?>

<body>

  <div class="container">
    <div class="row">

      <?php while ($jogo = $jogos->fetchArray()) : ?>

        <div class="col s12 m6 l3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?= $jogo["poster"] ?>">
              <a class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">favorite</i></a>
            </div>
            <div class="card-content">
              <span class="card-title center"><?= $jogo["titulo"] ?></span>
              <p> <?= $jogo["descricao"] ?></p>
            </div>
          </div>
        </div>
      <?php endwhile ?>

    </div>

  </div>
</body>

<?php if (isset($_GET["msg"])) : ?>
  <script>
    M.toats({
      html: '<?= $_GET["msg"] ?>'
      });
  </script>
<?php endif ?>

</html>