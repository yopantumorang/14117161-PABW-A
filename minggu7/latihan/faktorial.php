<?php
    function faktorial($angka){
        if($angka<=1){
                 $hasil=1;
                    return $hasil; 
        }else{
                         $hasil=$angka * faktorial($angka-1);
                    
                    return $hasil;
        }
}
echo faktorial(6);