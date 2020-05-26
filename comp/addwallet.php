<?php
include_once 'dev/login.php';

$email = $_SESSION["userId"];


echo add_to_wallet($email);



?>