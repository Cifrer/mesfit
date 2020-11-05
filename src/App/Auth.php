<?php

namespace Src\App;

use Src\Models\Domain\Usuario;
use Src\Models\Dao\UsuarioDao;

class Auth
{
	public function logon($data): void
	{
		try {
			$data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
			$usuario = new Usuario();
			$usuario->setEmailUsu($data['email']);
			$usuario->setSenhaUsu($data['password']);

			$usuarioDao = new UsuarioDao();
			$result = $usuarioDao->login($usuario);

			if (count($result) > 0) {
				if ($result[0]['codStatusUsu'] == 'A') {
					$_SESSION['celUsu'] = $result[0]['celUsu'];
					$_SESSION['codStatusUsu'] = $result[0]['codStatusUsu'];
					$_SESSION['cpfUsu'] = $result[0]['cpfUsu'];
					$_SESSION['emailUsu'] = $result[0]['emailUsu'];
					$_SESSION['idTipo'] = $result[0]['idTipo'];
					$_SESSION['nomeUsu'] = $result[0]['nomeUsu'];
					$_SESSION['senhaUsu'] = $result[0]['senhaUsu'];

					switch ($result[0]['idTipo']) {
						case 'ADM':
							$url = 'admin';
							break;

						case 'CLI':
							$url = '';
							break;

						default:
							$url = 'authentication/logoff';
							break;
					}

					echo "<script>";
					echo "location.href='" . url($url) . "'";
					echo "</script>";
				} else {
					echo "Usuário inativo, contate o administrador";
				}
			} else {
				echo var_dump($result);
			}
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	public function logoff($data): void
	{
		try {
			session_destroy();
			echo "<script>";
			echo "location.href='" . url() . "'";
			echo "</script>";
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	public function register($data): void
	{
		try {
			$data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
			$Usuario = new Usuario();
			$Usuario->setNomeUsu($data['name']);
			$Usuario->setEmailUsu($data['email']);
			$Usuario->setSenhaUsu($data['password']);
			$Usuario->setIdTipo('CLI');
			$Usuario->setCodStatusUsu('A');
			$UsuarioDao = new UsuarioDao();

			if ($UsuarioDao->create($Usuario)) {
				echo "<script>";
				echo "location.href='" . url("login") . "'";
				echo "</script>";
			} else {
				echo "não foi possível realizar o cadastro!";
				var_dump($data);
			}
		} catch (\Exception $exception) {
			throw $exception;
		}
	}

	public function registerNutri($data): void
	{
		try {
			$data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
			$Usuario = new Usuario();
			$Usuario->setNomeUsu($data['name']);
			$Usuario->setEmailUsu($data['email']);
			$Usuario->setSenhaUsu($data['password']);
			$Usuario->setCpfUsu($data['cpf']);
			$Usuario->setIdTipo('NUTRI');
			$Usuario->setCodStatusUsu('A');
			$UsuarioDao = new UsuarioDao();

			if ($UsuarioDao->create($Usuario)) {
				echo "<script>";
				echo "location.href='" . url("login") . "'";
				echo "</script>";
			} else {
				echo "não foi possível realizar o cadastro!";
			}
		} catch (\Exception $exception) {
			throw $exception;
		}
	}
}
