<html>
<head>
    <tittle>Koneksi Database MySQL</tittle>
</head>
<body>
    <h1>Koneksi database dengan mysqli_fetch_row</h1>
    <?php
        $conn=mysqli_connect("localhost","root","") or die ("Koneksi gagal");
        mysqli_select_db($conn,"lomba");
        $hasil=mysqli_query($conn,"select * from liga");
        while($row=mysqli_fetch_row($hasil)){
            echo "Liga " .$row[1]; //Array asosiatif
            echo " Mempunyai " .$row[2];
            echo " Wakil di Liga champion <br>";
        }
    ?>
</body>
</html>
