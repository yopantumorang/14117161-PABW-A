<?php
function swap(&$angka1,&$angka2){
    $temp=$angka1;
    $angka1=$angka2;
    $angka2=$temp;
}
$nilai1=5;
$nilai2=7;
echo "sebelum di swap <br> ";
echo "nilai 1 = $nilai1";
echo "<br>";
echo "nilai 2 = $nilai2";
echo "<br><br>";

echo "Swap Nilai : <br>";
swap($nilai1,$nilai2);
echo "nilai 1 =  $nilai1 " .'<br>';
echo "nilai 2 =  $nilai2 ";