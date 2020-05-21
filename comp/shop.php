<?php
declare(strict_types=1);

function group_item_format(array $items): string{
$group = "";

foreach ($items as $item) {
  $group.=$item;
}

return '<div class="d-flex">'.$group.'</div>';
}

function item_format(string $name, int $price, string $src): string{
  $src = "/res/img/shoes/".$src;
  $item = '
  <div class="card" style="width:355px">
   <img src="'.$src.'"alt="image" class="img-thumbnail">
   <div class="card-body">
     <h4 class="card-title">'.$name.'</h4>
     <input type="hidden" id="shoeId" name="shoeId" value="01">
     <p class="card-text">Price:'.$price.'€</p>
   </div>
 </div>
  ';
  return $item;
}

function query_items(): array{
  
  return [];
}

function get_items(): string{
$items = [];
$item_list = [];
$items_HTML = "";

array_push($items,["sandalias",45,"sandals1.jpg"],["zapatos",32,"shoes1.jpg"],["tennis",46,"sneakers1.jpg"]);

$items_temp = [];
foreach ($items as $item) {
  $item = item_format($item[0],$item[1],$item[2]);
  array_push($items_temp, $item);
}

$items = $items_temp;

array_push($item_list,group_item_format($items));

foreach ($item_list as $list) {
  $items_HTML.=$list;
}

return $items_HTML;
}
 ?>
