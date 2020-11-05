<?php

namespace Src\Models\Dao;

class Conexao
{
  private static $instance;

  public static function getConn()
  {
    if (!isset(self::$instance)) :
      self::$instance = new \PDO('mysql:host=localhost;dbname=bdmesfit;charset=utf8mb4', 'root', 'root');
    endif;
    return self::$instance;
  }
}
