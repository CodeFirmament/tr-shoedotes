<?php
include_once 'databaseFactory.php';
include_once 'sessions.php';

function create_user($email, $password){
  $redirect= "/signup/?msg=fail";
  $conn = databaseFactory::get_connection();
  if($conn->success){
    if($conn->execute_query("insert into usuario values (?,?)",[$email, $password])){

      $redirect = "/";
      if(!is_session_active()){
        start_session( $email );
      }
    }
  }
  redirect($redirect);
}

function login($email, $password){
  $redirect= "/login/?msg=fail";
  $conn = databaseFactory::get_connection();
  if($conn->success){
    if($conn->execute_query("select * from usuario where correo = ? and contrasenia = ?",[$email, $password],"ro")){
      $redirect = "/";
      if(!is_session_active()){
        start_session( $email );
      }
    }
  }
  redirect($redirect);
}


 ?>
