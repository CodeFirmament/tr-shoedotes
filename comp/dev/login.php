<?php
include_once 'databaseFactory.php';
include_once 'sessions.php';

function create_user($email, $password){
  $redirect= "/signup/?msg=fail";
  $conn = databaseFactory::get_connection();
  if($conn->success){
    if($conn->execute_query("INSERT INTO usuario VALUES (?,?,?)",[$email, $password,0])){

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
    if($conn->execute_query("SELECT * FROM usuario WHERE correo = ? AND contrasenia = ?",[$email, $password],"ro")){
      $redirect = "/";
      if(!is_session_active()){
        start_session( $email );
      }
    }
  }
  redirect($redirect);
}

function obtain_wallet_value($email){
  $conn = databaseFactory::get_connection();
  $answer = $conn->obtain_query("SELECT banco FROM usuario WHERE correo = '".$email."'");
  if($answer && $conn->success){
    return $answer;  
  }else{return '0';}
}

function add_to_wallet($email,$value = 5){
  $conn = databaseFactory::get_connection();
  if($conn->success){
    if($conn->execute_query("UPDATE usuario SET banco = banco + ? WHERE correo = ?",[$value,$email],"i")){
      return  obtain_wallet_value($email);
    }
  }else{return "ex404";}
}

function obtain_items_array(){
  $conn = databaseFactory::get_connection();
  $answer = $conn->obtain_query("SELECT * FROM producto",'rmany');
  if($answer && $conn->success){
    return $answer;  
  }else{return false;}
}


 ?>
