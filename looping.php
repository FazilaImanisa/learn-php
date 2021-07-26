<?php
/**
 * looping (perulangan)->mengulang baris kode perintah
 * 
 * type of looping -> for, while, do while
 * 
 * Konsep looping :
 * 1. ada titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisi nya benar, looping akan berlanjut
 * saat kondisi salah, looping akan berhenti
 */

//case : menampilkan bilangan kelipatan 7
//$start = -70;
//for ($i=$start; $i < 100 ; $i+=7){
//    echo"$i";
//}

//case 2 
$person = [
    ["name"=> "Gopal", "address"=> "Madrid", "age"=>40],
    ["name"=> "Kaizo", "address"=>"Saturnus", "age"=>80],
    ["name"=> "Kokochi", "address"=> "Pluoto", "age"=>20],
];
//string nama = "Zilla";
//system.out.println ("Nama saya: " + nama)
// tanda titik digunakan utk menggabungkan antara string 1 dengan string yg lain
// echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | "; 
// echo $person[1]['name']." ".$person[1]['address']." ".$person[1]['age']." | ";
// echo $person[2]['name']." ".$person[2]['address']." ".$person[1]['age']." | ";  
// // menampilkan isi dalam array person
# count digunakan untuk mengetahui jumlah array (java -> .lenght())
for ($i=0; $i < count($person); $i++) { 
    echo $person[$i]['name']." ".$person[$i]['address']." ".$person[$i]['age']." | ";
}

?>