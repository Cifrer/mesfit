<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Perfil</title>
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

  <main class="perfMain aboutPerfMain">
    <div>
      <span>Mesfit</span>
    </div>
    <div>
    <?php 
        foreach($data as $key => $value){
          ?>
      <figure>
        <img src="<?= url("templates/global/images/profile.png"); ?>">
      </figure>
      <div>
        <span>
          Nome do usuário
        </span>
        <span>
          Nenhuma Especialização
        </span>
        <a id="showEdit"><i class="fas fa-address-card"></i> Sobre</a>
        <div class="moreBox">
          <a id="showMore">X</a>
          <div>
            <a href="">Denunciar</a>
            <a href="">Bloquear</a>
          </div>
        </div>
        <div>
          <a href="">Enviar mensagem</a>
          <a id="showMore"><i class="fas fa-ellipsis-h"></i></a>
        </div>
      </div>
    </div>
    <input type="checkbox" name="editCheck" id="editCheck">
    <div class="editPerf aboutPerf">
      <a id="showEdit">X</a>
      <ul>
        <li>
          <span>Peso</span>
          <small><b>00,0</b> Kg</small>
        </li>

        <li>
          <span>Idade</span>
          <small><b>0</b> Anos</small>
        </li>

        <li>
          <span>IMC</span>
          <small><b>00,0</b> Kg/m²</small>
        </li>

        <li>
          <span>Altura</span>
          <small><b>0</b> M</small>
        </li>

        <li>
          <span>Observações</span>
          <small><b>---</b></small>
        </li>
      </ul>
    </div>

    <div class="tab-wrapper">
      <div class="tab">

        <input type="radio" name="tab" id="tab1" checked>
        <label for="tab1" style="padding: 25px;"><i class="far fa-bookmark"></i> Favoritos</label>
        <div class="tab-content">
          <ul class="publiBox">
            <li>
              <a href="">
                <figure>
                  <img src="<?= url("templates/global/images/profile.png"); ?>">
                </figure>
                <span><b>Titulo da postagem</b></span>
              </a>
            </li>

            <li>
              <a href="">
                <figure>
                  <img src="<?= url("templates/global/images/profile.png"); ?>">
                </figure>
                <span><b>Titulo da postagem</b></span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="tab">
        <input type="radio" name="tab" id="tab2">
        <label for="tab2" style="padding: 25px;"><i class="fas fa-users"></i> Seguindo</label>
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
            <?php 
              } 
            ?>
          </ul>
        </div>
      </div>

    </div>

  </main>
  <script src="<?= url("templates/global/scripts/index.js"); ?>"></script>
</body>

</html>