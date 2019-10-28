<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>koneksi database MYSQL</title>
</head>
<body>
    <h1>Demo koneksi database MySQL</h1>
    <?php
    $conn=mysqli_connect
    ("localhost","root","");
    if($conn){
        echo "OK";
    }else{
        echo "server not connected";
    }
    ?>
</body>
</html>