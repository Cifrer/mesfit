<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Mensagens</title>
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
  <main class="msgMain">
    <div>
      <span>Mensagens</span>
    </div>
    <div>

      <div class="tab-wrapper">
        <div class="tab">
          <input type="radio" name="tab" id="tab3" checked>
          <label for="tab3" style="padding: 25px"><i class="fas fa-bell"></i> Recentes</label>
          <div class="tab-content">
            <ul class="ntfBox">
              <li>
                <a href="">
                  <figure>
                    <img src="<?= url("templates/global/images/profile.png"); ?>">
                  </figure>
                  <div>
                    <span><b>Usuario</b></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus lobortis magna ac gravida.</p>
                  </div>
                  <span>11:00</span>
                </a>
              </li>

              <li>
                <a href="">
                  <figure>
                    <img src="<?= url("templates/global/images/profile.png"); ?>">
                  </figure>
                  <div>
                    <span><b>Usuario</b></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus lobortis magna ac gravida.</p>
                  </div>
                  <span>11:00</span>
                </a>
              </li>

            </ul>
          </div>
        </div>

        <div class="tab">
          <input type="radio" name="tab" id="tab2">
          <label for="tab2" style="padding: 25px"><i class="fas fa-users"></i> Todos</label>
          <div class="tab-content">
            <ul class="usrsBox">
              <li>
                <a href="">
                  <figure>
                    <img src="<?= url("templates/global/images/profile.png"); ?>">
                  </figure>
                  <span><b>Usuario</b></span>
                </a>
              </li>

              <li>
                <a href="">
                  <figure>
                    <img src="<?= url("templates/global/images/profile.png"); ?>">
                  </figure>
                  <span><b>Usuario</b></span>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>

  </main>
  <script src="<?= url("templates/global/scripts/index.js"); ?>"></script>
</body>

</html>