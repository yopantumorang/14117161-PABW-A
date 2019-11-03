<?php
function tekscolor($color="red",&$harga,$namaa){
    echo '<font color="'.$color.'"> <br>';
    $harga=strlen($namaa)*$harga;
}
$harga1=300;
$harga2=500;
$harga3=700;
$nama = 'YopanEkoSitumorang';
if(strlen($nama)>1 && strlen($nama)<=10){
    tekscolor('blue',$harga1,$nama);
    echo $nama ."<br>";
    echo "Harga bet = Rp." .$harga1 ."<br>";
}
else if(strlen($nama)>=11 && strlen($nama)<=20){
    tekscolor('green',$harga2,$nama);
    echo $nama ."<br>";
    echo "Harga bet = Rp." .$harga2 . "<br>";
}
else if (strlen($nama)>20){
    tekscolor('orange',$harga3,$nama);
    echo $nama ."<br>";
    echo "Harga bet = Rp." .$harga3 . "<br>";
}
