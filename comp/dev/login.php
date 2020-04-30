<?php
include_once 'databaseFactory.php';

function create_user($email, $password){
  $redirect= "/signup/?msg=fail";
  $login = databaseFactory::get_connection();
  if($login->success){
    if($login->execute_query("insert into usuario values (?,?)",[$email, $password])){
      $redirect = "/";
    }
  }
  redirect($redirect);

}
 ?>
