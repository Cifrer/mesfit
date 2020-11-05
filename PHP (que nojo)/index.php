<?php

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Src\App");

// WEB

$router->group(null);
$router->get("/", "WebController:home");

$router->group("login");
$router->get("/", "WebController:formLogin");

$router->group("registrar");
$router->get("/", "WebController:formRegister");

$router->group("registrarnutri");
$router->get("/", "WebController:formRegisterNutri");

$router->group("alterarsenha1");
$router->get("/", "WebController:alterarSenha1");

$router->group("alterarsenha2");
$router->get("/", "WebController:alterarSenha2");

$router->group("alterarsenha3");
$router->get("/", "WebController:alterarSenha3");

$router->group("noticias");
$router->get("/", "WebController:noticias");

$router->group("receitas");
$router->get("/", "WebController:receitas");

$router->group("receita");
$router->get("/", "WebController:receita");

$router->group("usuario");
$router->get("/", "WebController:usuario");

//Client

$router->group("chat");
$router->get("/", "ClientController:chat");

$router->group("mensagens");
$router->get("/", "ClientController:mensagens");

$router->group("perfil");
$router->get("/", "ClientController:perfil");

// Admin
$router->group("admin");
$router->get("/", "AdminController:home");

$router->get("/usuarios", "AdminController:users");
$router->get("/usuario/{codUsuario}", "AdminController:user");
$router->post("/usuario/salvar/{codUsuario}", "AdminController:saveUser");

// Auth 
$router->group("authentication");
$router->post("/logon", "Auth:logon");
$router->get("/logoff", "Auth:logoff");
$router->post("/register", "Auth:register");
$router->post("/registerNutri", "Auth:registerNutri");

// Erros

$router->group("erro");
$router->get("/{errcode}", "WebController:error");

$router->dispatch();

if ($router->error()) {
	$router->redirect("/erro/{$router->error()}");
}
