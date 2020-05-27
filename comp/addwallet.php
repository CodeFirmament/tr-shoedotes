<?php
include_once 'dev/login.php';

$email = $_SESSION["userId"];


echo modify_wallet($email);



?>