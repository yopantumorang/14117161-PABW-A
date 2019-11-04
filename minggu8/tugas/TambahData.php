<?php 
$nrp = $_POST["nrp"];
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$jurusan=$_POST["jurusan"];
$conn=mysqli_connect("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"itera");
echo "NRP 			: $nrp <br>";
echo "NAMA		 	: $nama <br>";
echo "ALAMAT 		: $alamat <br>";
echo "JURUSAN		: $jurusan";
$simpan="insert into mahasiswa values('$nrp','$nama','$alamat','$jurusan')";
$hasil=mysqli_query($conn,$simpan);
echo "<br> <br>";

echo "DATA MAHASISWA BERHASIL DISIMPAN";

 ?>