<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Receita</title>
</head>

<body>
  <nav class="menu">
    <input type="checkbox" id="toggle" />
    <label id="show-menu" for="toggle">
      <div class="btn">
        <i class="material-icons md-36 toggleBtn menuBtn">menu</i>
        <i class="material-icons md-36 toggleBtn closeBtn">close</i>
      </div>
    </label>
    <div class="menuBtns">
      <ul>
        <?php if (isset($_SESSION['nomeUsu'])) { ?>
          <li><a href="/">Home</a></li>
          <li><a href="perfil">Perfil</a></li>
          <li><a href="receitas">Receitas</a></li>
          <li><a href="noticias">Noticias</a></li>
          <li><a href="mensagens">Mensagens</a></li>
        <?php } else { ?>
          <li><a href="/">Home</a></li>
          <li><a href="receitas">Receitas</a></li>
          <li><a href="noticias">Noticias</a></li>
          <li><a href="login">Login</a></li>
          <li><a href="registrar">Registrar-se</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>

  <main class="rectMain">
    <div>
      <figure>
        <img src="<?= url("templates/global/images/profile.png"); ?>">
      </figure>
      <div>
        <span>Usuário</span>
        <small>2 Horas atrás</small>
      </div>
    </div>

    <div>
      <input type="checkbox" name="favorite" id="favorite" style="display:none;">
      <label for="favorite" class="favRect"><i class="far fa-bookmark"></i></label>
      <figure>
        <img src="<?= url("templates/global/images/receita.jpg"); ?>">
      </figure>
      <div>
        <h2>Titulo da receita</h2>
        <p>
          INGREDIENTES:<br><br>
          1 xíc. de aveia em flocos finos (ou farinha de aveia)<br><br>

          1 xíc. de água<br><br>

          2 colheres de sopa de melado<br><br>

          1 colher de sopa de farinha de linhaça<br><br>

          1 colher de chá de fermento químico em pó<br><br>


          COMO FAZER:<br><br>

          1- Coloque todos os ingredientes no liquidificador, com exceção do fermento, e bata até ficar homogêneo. Se você estiver usando farinha de aveia, pode misturar todos os ingredientes manualmente, sem o uso do liquidificador.<br><br>

          2- Acrescente o fermento por último e misture delicadamente.<br><br>

          3- Aqueça um frigideira antiaderente em fogo baixo. Espalhe um pouco da massa e tampe para abafar e já ir assando o outro lado.<br><br>

          4- Verifique se está bem assada e vire para assar o outro lado até dourar. Tampe novamente para abafar.<br><br>

          5- Repita o processo até terminar a massa. Sirva acompanhada do que preferir.<br><br>

          NOTA: Essa receita rendeu 5 panquecas de 10 cm de diâmetro cada.
        </p>
      </div>
    </div>

  </main>
  <script src="<?= url("templates/global/scripts/index.js"); ?>"></script>
</body>

</html>