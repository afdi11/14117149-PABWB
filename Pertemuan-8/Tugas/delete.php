<HTML>
    <HEAD>
        <title>Hapus Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Hapus Data Mahasiswa</h1>
        <?php
            $del=$_POST['NRP'];
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"lomba");
            $sqlstr="Delete from mahasiswa where nrp='$del'";
            $hasil=mysqli_query($conn,$sqlstr) or die(mysqli_error());
            echo "<h3>Data dengan NRP : $del Sudah berhasil dihapus/tidak ada didalam daftar </h3>";
        ?>
        <a href="dataMahasiswa.html">Return to Home</a>
    </BODY>
</HTML>