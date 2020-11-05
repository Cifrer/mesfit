<?php

namespace Src\App;

use Src\Views\ToView;

class ClientController
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
	}

	public function chat(): void
  {
    try {
      $ToView = new ToView(URL_VIEW_CLIENT);
      $ToView->viewStandard('chat');
    } catch (\Exception $exception){

    }
  }
  
  public function mensagens(): void
  {
    try {
      $ToView = new Toview(URL_VIEW_CLIENT);
      $ToView->viewStandard('mensagens');
    } catch (\Exception $exception){

    }
  }

  public function perfil(): void
  {
    try {
      $ToView = new Toview(URL_VIEW_CLIENT);
      $ToView->viewStandard('perfil');
    } catch (\Exception $exception){

    }
  }
}
