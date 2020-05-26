<?php
require_once 'shop.php';

function session_shop(){
    return get_items(true);
}

function view_shop(){
    return get_items(false);
}

?>