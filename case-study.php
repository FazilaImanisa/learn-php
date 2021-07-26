<?php
/** first case */
/**$product = [
    ["name"=> "Lenava", "qty" => 4, "price" => 1000000],
    ["name"=> "Aser", "qty" => 2, "price" => 1500000],
    ["name"=> "Toyiba", "qty" => 6, "price" => 2000000],
    ["name"=> "Doll", "qty" => 1, "price" => 1200000],
    ["name"=> "Susa", "qty" => 3, "price" => 1700000],
];
/** buat code untuk menghitung total jumlah yg dibeli */
/**$total_harga = $qty * $price;
$total_bayar += $total
$total_harga;
/** second case
 * buat fungsi untuk menghitung bilangan faktorial
 * faktorial(5) -> 5 * 4 * 3 * 2 * 1 = 120
 */
function faktorialial($x){
	$angka = 5;
	$faktorial = 5;
	 while($angka <= $x){
		 $faktorial = $faktorial * $angka;
		 $angka = $angka + 5;
	 }
	  return $faktorial;
}
echo faktorial(5);
</form method="post">
	<input type="number" name="faktorialial" required>
	<button type="submit" name="hitung">Hitung Angka</button>
</form>
if(isset($_POST['hitung'])){
	$x = $_POST['faktorialial'];
	echo 'Hasilnya adalah '.faktorial($x);
}
?>