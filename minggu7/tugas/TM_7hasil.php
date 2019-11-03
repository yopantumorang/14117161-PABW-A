<?php
    if(isset($_POST['submit'])){
   /*     $nama = trim($_POST['nama']);

        if(isset($_POST['NAMA'])){
            if(!empty($nama)){
                $nama = $_POST['nama'];
                echo "Nama = $nama"; 
            }
            if(empty($nama)
            
                $namaErr = "Nama tidak Boleh Kosong";
            }
        }
    */
        if(isset($_POST['nama'])){
            $nama= $_POST['nama'];
            echo "Nama = $nama";
        }echo "<br><br>";
        
        if(isset($_POST['alamat'])){
            $alamat= $_POST['alamat'];
            if($alamat!=""){
                echo "Alamat = $alamat";
            }
        }echo "<br><br>";
        //menampilkan alamat
        if(isset($_POST['jenis_kelamin'])){
            $jenis_kelamin= $_POST['jenis_kelamin'];
            echo "Jenis Kelamin = $jenis_kelamin";
        }echo "<br><br>";
        //menampilkan jenis kelamin dari inputan file TM_7form.php

        if(isset($_POST['golongan_darah'])){
            $golongan_darah= $_POST['golongan_darah'];
            echo "Golongan Darah = $golongan_darah";
        } echo "<br><br>";
        //menampilkan golongan darah dari inputan file TM_7form.php

        if(isset($_POST['hobi'])){
            $hobi= $_POST['hobi'];
            echo "Hobi = $hobi";
        }echo "<br><br>";
        //menampilkan Hobi dari inputan file TM_7form.php

        if(isset($_POST['Keterangan'])){
            $Keterangan= $_POST['Keterangan'];
            echo "Keterangan = $Keterangan";
        } 
        //menampilkan keterangan dari inputan file TM_7form.php
    }
?>