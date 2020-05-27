<?php
include_once 'dev/login.php';

if(isset($_POST["itemId"])){

    $itemID = $_POST["itemId"];
    $email = $_SESSION["userId"];
    $itemValue = obtain_item_value($itemID);
    
    if(is_ok_to_buy($email,$itemValue)){
        modify_wallet($email,($itemValue*-1));
        echo "Thanks for your purchase!";
    }else{echo "You don't have enought money!";}
    
}

// buy it

?>