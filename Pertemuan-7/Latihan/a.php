<?php
    function swap(&$a,&$b){
        $temp=$a;
        $a=$b;
        $b=$temp;
    }

    function prinin($a,$b){
        echo "<br>angka 1: $a<br>";
        echo "angka 2: $b<br>";
    }

    $a=10;
    $b=3;
    echo "Data awal: ";
    prinin($a,$b);
    swap($a,$b);
    echo "<br>Setelah ditukar: ";
    prinin($a,$b);
?>