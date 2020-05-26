<?php
require_once 'shop.php';

function session_shop(){
    return 
    '<p>Buy your shoes by clicking on them!</p> '.get_items();
}

function view_shop(){
    return '<p>Are you interested on buying? Log in!</p>'.get_items();
}

?>