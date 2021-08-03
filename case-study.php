<?php
/** first case */
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
    $totalEachItem = $product[$i]["qty"] * $product[$i]["price"];
    $total += $totalEachItem;
    // $total = $total + $totalEachItem;
}
<<<<<<< HEAD
=======
// echo "Total of all item is $total"
>>>>>>> 18223d387d9b28d3e58edaa91bd21ca95a0ff678
/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120 */
?>
