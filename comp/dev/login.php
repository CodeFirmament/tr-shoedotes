<?php
include_once 'databaseFactory.php';

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function create_user($email, $password){
  $redirect= "/signup/";
  $login = databaseFactory::get_connection();
  if($login->success){
    if($login->execute_query("insert into usuario values (?,?)",[$email, $password])){
      $redirect = "/";
    }
  }
  redirect($redirect);

}
 ?>
