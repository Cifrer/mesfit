<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
  <title>Home</title>
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
      <span>Home</span>
    </div>

    <div class="homeTitles">
      <figure>
        <img src="<?= url("templates/global/images/fire.svg"); ?>">
      </figure>
      <span>HOT</span>
    </div>

    <div>
      <ul class="homeLists">
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
          <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite2" id="favorite2" class="favCheck" style="display:none;">
          <label for="favorite2" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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
            <h2>Titulo da receita</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>
      </ul>
      <div class="homeDivis">
        <span><a href="receitas">RECEITAS</a></span>
      </div>

      <div class="homeTitles">
        <i class="fas fa-mug-hot"></i>
        <span>Café da manhã</span>
      </div>
      <ul class="homeLists">
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
          <input type="checkbox" name="favorite01" id="favorite01" class="favCheck" style="display:none;">
          <label for="favorite01" class="favRect"><i class="far fa-bookmark"></i></label>
          <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite02" id="favorite02" class="favCheck" style="display:none;">
          <label for="favorite02" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite03" id="favorite03" class="favCheck" style="display:none;">
          <label for="favorite03" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>
      </ul>

      <div class="homeTitles">
        <i class="fas fa-utensils"></i>
        <span>Almoço</span>
      </div>
      <ul class="homeLists">
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
          <input type="checkbox" name="favorite001" id="favorite001" class="favCheck" style="display:none;">
          <label for="favorite001" class="favRect"><i class="far fa-bookmark"></i></label>
          <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite002" id="favorite002" class="favCheck" style="display:none;">
          <label for="favorite002" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite003" id="favorite003" class="favCheck" style="display:none;">
          <label for="favorite003" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>
      </ul>

      <div class="homeTitles">
        <i class="fas fa-utensils"></i>
        <span>Jantar</span>
      </div>
      <ul class="homeLists">
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
          <input type="checkbox" name="favorite00001" id="favorite00001" class="favCheck" style="display:none;">
          <label for="favorite00001" class="favRect"><i class="far fa-bookmark"></i></label>
          <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite00002" id="favorite00002" class="favCheck" style="display:none;">
          <label for="favorite00002" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite00003" id="favorite00003" class="favCheck" style="display:none;">
          <label for="favorite00003" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
            <p>
              Ótima opção pra fazer rapidinho no café da manhã antes de desmaiar de fome hahaha. Eu vou fazendo e comendo ao mesmo tempo. Só são necessários cinco ingredientes simples pra fazer essa maravilha: aveia (em flocos ou farinha), farinha de linhaça, água, melado e fermento. Não leva açúcar e nem gordura, ponto positivo!
            </p>
          </div>
        </li>
      </ul>

      <div class="homeTitles">
        <i class="fas fa-ice-cream"></i>
        <span>Sobremesa</span>
      </div>
      <ul class="homeLists">
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
          <input type="checkbox" name="favorite000001" id="favorite000001" class="favCheck" style="display:none;">
          <label for="favorite000001" class="favRect"><i class="far fa-bookmark"></i></label>
          <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite000002" id="favorite000002" class="favCheck" style="display:none;">
          <label for="favorite000002" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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
          <input type="checkbox" name="favorite000003" id="favorite000003" class="favCheck" style="display:none;">
          <label for="favorite000003" class="favRect"><i class="far fa-bookmark"></i></label>
          <figure>
            <img src="<?= url("templates/global/images/receita.jpg"); ?>">
          </figure>
          <div>
            <h2>Titulo da receita</h2>
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