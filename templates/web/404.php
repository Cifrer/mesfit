<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>404</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet" />

  <style>
    * {
      box-sizing: border-box;
      font-family: "Nunito", sans-serif;
    }

    body {
      padding: 0;
      margin: 0;
    }

    #erro {
      position: relative;
      height: 100vh;
    }

    #erro .erro {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .erro {
      max-width: 560px;
      width: 100%;
      padding-left: 160px;
      line-height: 1.1;
    }

    .erro .erro-404 {
      position: absolute;
      left: 3vw;
      top: 18px;
      display: inline-block;
      width: 200px;
      height: 180px;
      background-image: url("https://cdn.glitch.com/c6ee24bf-dc23-4598-af7f-144cb166f810%2F404.svg?v=1589752932437");
      background-size: cover;
      z-index: -1;
    }

    .erro h1 {
      font-size: 65px;
      font-weight: 700;
      margin-top: 0px;
      margin-bottom: 10px;
      color: #151723;
      text-transform: uppercase;
    }

    .erro h2 {
      font-size: 21px;
      font-weight: 400;
      margin: 0;
      text-transform: uppercase;
      color: #151723;
    }

    .erro p {
      color: #999fa5;
      font-weight: 400;
    }

    .erro a {
      display: inline-block;
      font-weight: 700;
      border-radius: 40px;
      text-decoration: none;
      color: #388dbc;
    }

    @media only screen and (max-width: 767px) {
      .erro .erro-404 {
        width: 170px;
        height: 140px;
        z-index: 1;
        left: 0;
      }

      .erro {
        padding-left: 15px;
        padding-right: 15px;
        padding-top: 110px;
      }
    }
  </style>
</head>

<body>
  <div id="erro">
    <div class="erro">
      <div class="erro-404"></div>
      <h1>404</h1>
      <h2>Oops! Pagina não encontrada</h2>
      <p>
        Desculpe, mas a página que você está procurando não existe, foi
        removida, teve o nome alterado ou está temporariamente indisponível.
      </p>
      <a href="/">Voltar para a home</a>
    </div>
  </div>
</body>

</html>