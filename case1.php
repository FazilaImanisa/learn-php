<?php
$product = [
    ["name"=> "Lenava", "qty" => 4, "price" => 1000000],
    ["name"=> "Aser", "qty" => 2, "price" => 1500000],
    ["name"=> "Toyiba", "qty" => 6, "price" => 2000000],
    ["name"=> "Doll", "qty" => 1, "price" => 1200000],
    ["name"=> "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yg dibeli */

$total = 0;
for ($i=0; $i < count($product); $i++) {
    $TotalEachItem = $product[$i]["qty"] * $product[$i]["price"];
    $total += $TotalEachItem;
}
echo "Total of all item is : $total";

?>