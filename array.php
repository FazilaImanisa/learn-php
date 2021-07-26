<?php
/**
 * array adalah kumpulan data yang kumpulan nilai jenis sama
 * setiap data punya posisi yg disebut index (start from 0)
 * variabel -> individu
 * array -> populasi
 */

//array numeric -> array yg index nya berupa numerik
//$student = "Bill Gates";
//$siswa = ["John Cena", "The Rock", "Batista", "Rey Mysterio"];
//echo $siswa[3];

//array assosiative -> array yg indexnya berupa string
$person = [
    ["name"=> "Gopal", "address"=> "Madrid", "age"=>40],
    ["name"=> "Kaizo", "address"=>"Saturnus", "age"=>80],
    ["name"=> "Kokochi", "address"=> "Pluoto", "age"=>20],
];
echo $person[2]["address"];
?>