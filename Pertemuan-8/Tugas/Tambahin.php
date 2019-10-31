<HTML>
    <HEAD>
        <title>Tambah Data Mahasiswa</title>
    </HEAD>
    <BODY>
        <h1>Tambah Data Mahasiswa</h1>
        <?php
            $NRP = $_POST["NRP"];
            $nama = $_POST["nama"];
            $alamat = $_POST["file_foto"];
            $jurusan = $_POST["id_jur"];
            $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
            mysqli_select_db($conn,"lomba");
            echo "NRP : $NRP <br>";
            echo "Nama : $nama <br>";
            echo "Alamat : $alamat <br>";
            echo "Jurusan : $jurusan <br>";
            $sqlstr="insert into mahasiswa (NRP,nama,alamat,id_jur)
            values ('$NRP','$nama','$alamat','$jurusan')";
            $hasil = mysqli_query($conn,$sqlstr);
            if($hasil) echo "Simpan data mahasiswa berhasil dilakukan<br>";
            else echo "Gagal";
        ?>
        <a href="dataMahasiswa.html">Return to Home</a>
    </BODY>
</HTML>