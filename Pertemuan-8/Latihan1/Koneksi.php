<html>
<head>
    <tittle>Koneksi Database MySQL</tittle>
</head>
<body>
    <h1>Demo Koneksi database MySQL</h1>
    <?php
        $conn=mysqli_connect("localhost","root","");
        if($conn) echo "OK";
        else echo "Server not connected";
    ?>
</body>
</html>
