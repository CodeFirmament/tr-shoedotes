<?php
include_once 'dev/login.php';
include_once 'dev/redirection.php';

function control_login($email, $password){
  create_user($email, $password);
}


if($_POST["email"] && $_POST["password"]){

  $email = $_POST["email"];
  $password = $_POST["password"];
  $captcha=$_POST['g-recaptcha-response'];

  $secretKey = "6LdKo_AUAAAAAN3ykmfYp0hdHkMWdK9g_qVYVzxr";
  $ip = $_SERVER['REMOTE_ADDR'];

  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
  $response = file_get_contents($url);
  $responseKeys = json_decode($response,true);

  // should return JSON with success as true
  if($responseKeys["success"]) {
    if($email && $password && $captcha){
        control_login($email, $password);
    }else{redirect("/signup/?msg=wfail");}
  }else{redirect("/signup/?msg=capfail");}

}


?>
