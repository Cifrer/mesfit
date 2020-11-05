<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Alterar senha</title>
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
  <main class="loginSec altMain">
    <div>
      <figure>
        <img src="<?= url("templates/global/images/icon-usu.png"); ?>">
      </figure>
      <span>Alterar senha</span>
      <p>
        Um código de verificação será enviado para seu e-mail
      </p>
    </div>
    <form action="alterarsenha2" class="loginBox" method="GET">
      <div>
        <label for="email">E-mail</label>
        <input type="email" id="email" required>
        <hr class="line">
      </div>
      <div>
        <input type="submit" value="Próximo">
        <span>Já tem uma conta?</span><br>
        <a href="login">Login</a>
      </div>
    </form>
  </main>
  <script src="<?= url("templates/global/scripts/index.js"); ?>"></script>
</body>

</html>