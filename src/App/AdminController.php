<?php

namespace Src\App;

use Src\Models\Dao\UsuarioDao;
use Src\Models\Domain\Usuario;
use Src\Views\ToView;

class AdminController
{

  public function __construct()
  {
    $link = url();

    if (!$_SESSION) {
      session_destroy();
      echo "<script>";
      echo "location.href='{$link}'";
      echo "</script>";
    }

    if ($_SESSION['codTipoUsu'] != "ADM") {
      session_destroy();
      echo "<script>";
      echo "location.href='{$link}'";
      echo "</script>";
    }
  }

  public function home(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_ADMIN);
      $ToView->viewStandard('home');
    } catch (\Exception $exception) {
    }
  }

  public function users(): void
  {
    try {
      $usuarioDao = new UsuarioDao();
      $data = $usuarioDao->read();
      $ToView = new ToView(URL_VIEW_ADMIN);
      $ToView->viewStandard('usuarios', $data);
    } catch (\Exception $exception) {
    }
  }

  public function user($data): void
  {
    try {
      $usuario = new Usuario();
      $usuario->setIdUsu($data['idUsu']);
      $usuarioDao = new UsuarioDao();
      $data = $usuarioDao->readUserId($usuario);
      $ToView = new ToView(URL_VIEW_ADMIN);
      $ToView->viewStandard('usuario', $data);
    } catch (\Exception $exception) {
    }
  }

  public function saveUser($data): void
  {
    try {
      $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
      $usuario = new Usuario();
      $usuario->setIdUsu($data['idUsu']);
      $usuario->setEmailUsu($data['email']);
      $usuario->setCodStatusUsu($data['codStatusUsu']);
      $usuario->setSenhaUsu($data['password']);
      $usuarioDao = new UsuarioDao();
      $usuarioDao->updateUserId($usuario);
      $data = $usuarioDao->readUserId($usuario);
      $ToView = new ToView(URL_VIEW_ADMIN);
      $ToView->viewStandard('usuario', $data);
    } catch (\Exception $exception) {
    }
  }
}
