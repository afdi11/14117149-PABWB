<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <title>My Portfolio</title>
</head>

<body>

    <div class="container">

        <h1>Form Informasi</h1>

        <form class="form-horizontal" action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Nama Anda:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Alamat :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Jenis Kelamin :</label>
                <div class="form-group">
                    <label class="radio-inline">
                        <input type="radio" name="jk" value="pria">Pria
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="jk" value="wanita">Wanita
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="department">Department :</label>
                <div class="col-sm-10">
                    <select name="golongan" class="form-group">
                        <option value="A+">A Rhesus Positif</option>
                        <option value="A-">A Rhesus Negatif</option>
                        <option value="B+">B Rhesus Positif</option>
                        <option value="B-">B Rhesus Negatif</option>
                        <option value="AB+">AB Rhesus Positif</option>
                        <option value="AB-">AB Rhesus Negatif</option>
                        <option value="O+">O Rhesus Positif</option>
                        <option value="O-">O Rhesus Negatif</option>

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Hobi :</label>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" name="hoby[]" value="Memancing">Memancing <br>
                        <input type="checkbox" name="hoby[]" value="Berenang">Berenang <br>
                        <input type="checkbox" name="hoby[]" value="Bermain">Bermain <br>
                        <input type="checkbox" name="hoby[]" value="Rebahan">Rebahan <br>
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Keterangan</label>
                <textarea class="form-control col-sm-2" name="keterangan" rows="10"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>

</html>