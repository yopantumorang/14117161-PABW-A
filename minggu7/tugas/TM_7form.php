<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
        <form method="POST" action="TM_7Hasil.php" >
            <label>Nama :</label>
            <input type="textfield" name="nama">
            <br><br>
            <label>Alamat : </label>
            <input cols="30" rows="5" type="textfield" name="alamat"  >
            <br><br>
            <label>Jenis Kelamin : </label>
            <br>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" > Laki-laki
            <br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
            <br><br>
            <label>Golongan Darah : </label>
            <select name="golongan_darah">
                <option value="O" >O</option>
		        <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
            </select>
            <br><br>
            <label>Hobi : </label>
            <br>
            <input type="checkbox" name="hobi" value="Olahraga">Olahraga
            <br>
            <input type="checkbox" name="hobi" value="Bernanyi">Bernyanyi
            <br>
            <input type="checkbox" name="hobi" value="Belajar">Belajar
            <br>
            <input type="checkbox" name="hobi" value="Memasak">Memasak
            <br><br>
            <label>Keterangan : </label>
            <br>
            <textarea name="Keterangan" rows="6” cols="10"></textarea>
            <br>
            <input type="submit" value="submit" name="submit">
        </form>
</body>
</html>