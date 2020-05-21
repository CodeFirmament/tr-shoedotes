<?php
require_once 'shop.php';

function session_shop(){
    return 
    '
    <p>Search your favourite shoes to buy them!</p>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
    </div>';
}

function view_shop(){
    return '<p>sup?</p>';
}

?>