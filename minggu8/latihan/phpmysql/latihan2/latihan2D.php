<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koneksi Database Mysqlt</title>
</head>
<body>
<h1>Koneksi database dengan mysql_fetch_array</h1>
    <?php
    $conn=mysql_connect ("localhost","root","")
    or die ("koneksi gagal");
    mysql_select_db("minggu8",$conn);
    $hasil = mysql_query("select *from liga", $conn);
    while ($row=mysql_fetch_row($hasil)){
        echo "Liga " .$row[1];
        echo " mempunyai " .$row[2];
        echo " wakil di liga champion <br>";
    }
    ?>
</body>
</html>