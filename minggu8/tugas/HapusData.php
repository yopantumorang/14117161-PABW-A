<?php 
$cari=$_POST['hapusnama'];
$conn=mysql_connect("localhost","root","");
mysql_selectdb("itera",$conn);
$hasil=mysql_query("delete from mahasiswa where nama like '%$cari%'",$conn);
echo "<br> <br>";;
	echo "DATA MAHASISWA BERHASIL DIHAPUS";

 ?>