<?php
include_once 'dev/login.php';

if($_POST["email"] && $_POST["password"]){
  $email = $_POST["email"];
  $password = $_POST["password"];
  create_user($email, $password);
}
?>
