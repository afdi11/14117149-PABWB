<?php
    $angka=20;
    function faktorial($angka){
        if($angka==1) return 1;
        return $angka*faktorial($angka-1);
    }
    echo $angka."!=".faktorial($angka);
?>