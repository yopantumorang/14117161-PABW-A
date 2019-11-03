<html>
<head>
<title>Simpan Buku Tamu</title>
</head>
<body>
<h1>Simpan Buku Tamu MySQL</h1>
<?php
$nama = $_POST["nama"];
$email = $_POST["email"];
$komentar = $_POST["komentar"];
$conn=mysqli_connect ("localhost","root","")
or die ("koneksi gagal");
mysql_select_db("bukutamu",$conn);
echo "Nama : $nama <br>";
echo "Email : $email <br>";
echo "Komentar : $komentar <br>";
$sqlstr="insert into bukutamu (nama,email,komentar)
values ('$nama','$email','$komentar')";
$hasil = mysql_query($sqlstr,$conn);
echo "Simpan bukutamu berhasil dilakukan";
?>
</body>
</html>