<?php
include_once 'dev/login.php';

$email = $_SESSION["userId"];

$conn = databaseFactory::get_connection();

  if($conn->success){
    if($answer = $conn-> obtain_query("select banco from usuario where correo = '"+$email+"'")){
      echo $answer;
    }
  }else{
      echo "0";
  }

?>