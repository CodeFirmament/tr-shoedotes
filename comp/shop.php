<?php
declare(strict_types=1);
require_once "dev/login.php";


function group_item_format(array $items): string{
  $group = "";

  foreach ($items as $item) {
    $group.=$item;
  }

  return '<div class="d-flex flex-wrap">'.$group.'</div>';
}

function item_format(string $name, int $price, string $src, string $id = ""): string{
  $src = "/res/img/shoes/".$src;
  $item = '
  <div class="card" style="width:355px">
   <img src="'.$src.'"alt="image" class="img-thumbnail">
   <div class="card-body">
     <h4 class="card-title">'.$name.'</h4>
     <input type="hidden" id="shoeId" name="shoeId" value="'.$id.'">
     <p class="card-text">Price:'.$price.'€</p>
     <button class="btn btn-success" >BUY</button>
   </div>
 </div>
  ';
  return $item;
}

function item_format_no_button(string $name, int $price, string $src): string{
  $src = "/res/img/shoes/".$src;
  $item = '
  <div class="card" style="width:355px">
   <img src="'.$src.'"alt="image" class="img-thumbnail">
   <div class="card-body">
     <h4 class="card-title">'.$name.'</h4>
     <p class="card-text">Price:'.$price.'€</p>
   </div>
 </div>
  ';
  return $item;
}


function get_items($button): string{
  $items = [];
  $item_list = [];
  $items_HTML = "";

if($button){
    if($items_query = obtain_items_array()){

    foreach ($items_query as $I) {
      array_push($items,$I);
    }

    $items_temp = [];
    foreach ($items as $item) {
      $item = item_format($item[0],$item[1],$item[2],$item[3]);
      array_push($items_temp, $item);
    }
  
    $items = $items_temp;
  
    array_push($item_list,group_item_format($items));
  
    foreach ($item_list as $list) {
      $items_HTML.=$list;
    }
  
    return $items_HTML;
  }else{
    return "<p>something happened :/ </p>";
  }
}else{
  if($items_query = obtain_items_array()){
    foreach ($items_query as $I) {
      array_push($items,$I);
    }

    $items_temp = [];
    foreach ($items as $item) {
      $item = item_format_no_button($item[0],$item[1],$item[2]);
      array_push($items_temp, $item);
    }
  
    $items = $items_temp;
  
    array_push($item_list,group_item_format($items));
  
    foreach ($item_list as $list) {
      $items_HTML.=$list;
    }
  
    return $items_HTML;
  }else{
    return "<p>something happened :/ </p>";
  }
}
  
  
}
 ?>
