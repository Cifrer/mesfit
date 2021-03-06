<?php

namespace Src\App;

use Src\Views\ToView;
use Src\Models\Dao\PublicacaoDao;
use Src\Models\Dao\PratoDao;
use Src\Models\Dao\UsuarioDao;

class WebController
{

  public function home(): void
  {
    try {
      $PublicacaoDao = new PublicacaoDao();
      $PratoDao = new PratoDao();
      $data = array(
        "publicacaoDao" => $PublicacaoDao->read(),
        "pratoDao" => $PratoDao->read()
      );
      
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('home', $data);
    } catch (\Exception $exception) {
    }
  }

  public function formLogin(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('form-login');
    } catch (\Exception $exception) {
    }
  }

  public function formRegister(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('form-cadastro');
    } catch (\Exception $exception) {
    }
  }

  public function formRegisterNutri(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('form-cadastro-nutri');
    } catch (\Exception $exception) {
    }
  }

  public function alterarSenha1(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('alterar-senha-1');
    } catch (\Exception $exception) {
    }
  }

  public function alterarSenha2(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('alterar-senha-2');
    } catch (\Exception $exception) {
    }
  }

  public function alterarSenha3(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('alterar-senha-3');
    } catch (\Exception $exception) {
    }
  }

  public function noticias(): void
  {
    try {
      $PublicacaoDao = new PublicacaoDao();
      $data = $PublicacaoDao->read();
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('noticias', $data);
    } catch (\Exception $exception) {
    }
  }

  public function receita(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('receita');
    } catch (\Exception $exception) {
    }
  }

  public function receitas(): void
  {
    try {
      $PratoDao = new PratoDao();
      $data = $PratoDao->read();
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('receitas', $data);
    } catch (\Exception $exception) {
    }
  }

  public function usuario(): void
  {
    try {
      $UsuarioDao = new UsuarioDao();
      $data = $UsuarioDao->read();
      $ToView = new ToView(URL_VIEW_WEB);
      $ToView->viewStandard('usuario', $data);
    } catch (\Exception $exception) {
    }
  }
}
