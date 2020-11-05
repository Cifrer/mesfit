<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Noticia</title>
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

  <main class="rectMain rectsMain">
    <div>
      <span>Notícias</span>
    </div>

    <div>
      <ul>
        <li>
          <div>
            <figure>
              <img src="<?= url("templates/global/images/profile.png"); ?>">
            </figure>
            <div>
              <span>Usuário</span>
              <small>1 Hora atrás</small>
            </div>
          </div>
          <input type="checkbox" name="favorite1" id="favorite1" class="favCheck" style="display:none;">
          <label for="favorite1" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da noticia</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>

        <li>
          <div>
            <figure>
              <img src="<?= url("templates/global/images/profile.png"); ?>">
            </figure>
            <div>
              <span>Usuário</span>
              <small>1 Hora atrás</small>
            </div>
          </div>
          <input type="checkbox" name="favorite1" id="favorite2" class="favCheck" style="display:none;">
          <label for="favorite2" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da noticia</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>

        <li>
          <div>
            <figure>
              <img src="<?= url("templates/global/images/profile.png"); ?>">
            </figure>
            <div>
              <span>Usuário</span>
              <small>1 Hora atrás</small>
            </div>
          </div>
          <input type="checkbox" name="favorite3" id="favorite3" class="favCheck" style="display:none;">
          <label for="favorite3" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da noticia</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>
      </ul>
    </div>

  </main>
  <script src="<?= url("templates/global/scripts/index.js"); ?>"></script>
</body>

</html>