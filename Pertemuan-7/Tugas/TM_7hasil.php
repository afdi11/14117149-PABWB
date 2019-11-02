<!doctype html>
<html lang="en" id="home">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">

        <title>Hasil Data</title>
    </head>

    <body>
    <?php 
        if (isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $gender = $_POST["jk"];
            $goldar = $_POST["golongan"];
            $hobi = $_POST["hoby"];
            $keterangan = $_POST["keterangan"];
    ?>
    <table class="table">
        <tr>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>	
            <th>GOLONGAN DARAH</th>
            <th>HOBI</th>
            <th>KETERANGAN</th>

        </tr>

        <tr>
        
            <td><?php echo $nama; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $goldar; ?></td>
            
            <td><?php 
                foreach($hobi as $value){
                    echo "$value <br>";
                }
            ?></td>
            
            <td><?php echo $keterangan; ?></td>
            
        </tr>

        <?php } 
        
        ?> 
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/script.js"></script>
    </body>
</html>