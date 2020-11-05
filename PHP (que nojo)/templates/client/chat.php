<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  <link rel="stylesheet" href="<?= url("templates/global/css/default.css"); ?>" />

  <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #e9e9e9;">
  <div class="viewTop">
    <a href="mensagens"><i class="fas fa-chevron-left"></i></a>
    <div>
      <figure>
        <img src="<?= url("templates/global/images/profile.png"); ?>">
      </figure>
      <div>
        <span><b>Usuario</b></span>
        <p>Descrição</p>
      </div>
    </div>
  </div>

  <section class="viewChat">
    <ul>
      <li>
        <div class="recMessage messageBox">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </li>
      <li>
        <div class="sendMessage messageBox">
          <p>Nulla euismod sodales neque, eget aliquam ex pellentesque vitae.</p>
        </div>
      </li>
      <li>
        <div class="sendMessage messageBox">
          <p>Nunc sagittis urna in leo finibus, quis mollis ante vulputate. Cras vel turpis euismod, ultrices enim a, dignissim massa.</p>
        </div>
      </li>
      <li>
        <div class="recMessage messageBox">
          <img src="<?= url("templates/global/images/profile.png"); ?>">
          <p>Nullam fermentum orci at elit finibus finibus. Donec a elit dapibus, molestie sem sit amet, elementum dui.</p>
        </div>
      </li>
      <li>
        <div class="recMessage messageBox">
          <img src="<?= url("templates/global/images/profile.png"); ?>">
          <p>AQUI VAI UMA MENSAGEM</p>
        </div>
      </li>
      <li>
        <div class="recMessage messageBox">
          <img src="<?= url("templates/global/images/profile.png"); ?>">
          <p>AQUI VAI UMA MENSAGEM</p>
        </div>
      </li>
    </ul>
  </section>

  <nav class="menuChat">
    <form>
      <textarea id="message" name="message" placeholder="Mensagem" maxlength="2000" type="text"></textarea>
      <label for="send"><i class="fas fa-angle-double-right"></i></label>
      <input type="submit" id="send" style="display: none;">
    </form>
  </nav>
  <script>
    var textarea = document.querySelector('#message')

    textarea.addEventListener('keydown', autosize);

    function autosize() {
      var el = this;
      setTimeout(function() {
        el.style.cssText = 'height:auto; padding:4px';
        el.style.cssText = 'height:' + el.scrollHeight + 'px';
      }, 0);
    }
  </script>
</body>

</html>