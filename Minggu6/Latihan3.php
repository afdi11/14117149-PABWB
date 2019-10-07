<?php
$nama=array("lanirne","aduh","qifuat","toda","anevi","samid","kifuat");
echo "Nama sebelum diurutkan : <br>";
for($i=0;$i<7;$i++){
    echo "$nama[$i]<br>";
}
sort($nama);
echo "<br> Nama setelah diurutkan : <br>";
for($i=0;$i<7;$i++){
    echo "$nama[$i]<br>";
}
?>