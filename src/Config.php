<?php
if (empty(session_start())) {
  session_start();
}

#define("ROOT", isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $_SERVER['SERVER_NAME']);
define("ROOT", "http://localhost/sites/mesfit");
define("URL_VIEW_ADMIN", "../../templates/admin");
define("URL_VIEW_WEB", "../../templates/web");
define("URL_VIEW_CLIENT", "../../templates/client");

function url(string $uri = null): string
{
  if ($uri) {
    return ROOT . "/{$uri}";
  }
  return ROOT;
}
