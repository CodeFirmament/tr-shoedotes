<?php
declare(strict_types=1);
include_once("database.php");
/*
Database factory fork modified, taken from the php forums.
**Please if somebody found out who commented this on the forums please let me know**
*/

class databaseFactory{

  private static $connection;

  public static function get_connection( ){
    if(self::$connection == null){
      $url = "localhost";
      $user = "root";
      $password = "";
      $databaseName = "prueba_shodotes";
      $port = 3306;
      self::$connection = new database($url, $user, $password, $databaseName, $port);
    }
    return self::$connection;
  }

}

?>
