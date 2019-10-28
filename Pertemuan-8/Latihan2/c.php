<html>
<head>
    <tittle>Koneksi Database MySQL</tittle>
</head>
<body>
    <h1>Koneksi database MySQLi_fetch_array</h1>
    <?php
        $conn=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
        mysqli_select_db($conn,"lomba");
        $hasil=mysqli_query($conn,"select * from liga");
        while($row=mysqli_fetch_array($hasil)){
            echo "Liga " .$row["negara"]; //Array asosiatif
            echo " Mempunyai " .$row[2];
            echo " Wakil di Liga champion <br>";
        }
    ?>
</body>
</html>
