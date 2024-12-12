<?php
include 'koneksi.php';
$id = $_GET['id'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$data = mysqli_fetch_array($ambilData);

echo '<script type ="text/JavaScript">';
echo 'alert("Lanjutkan")';
echo '</script>';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }

        h3 {
            text-align: center;
        }

        s body {
            background-color: #fff;
        }
    </style>
</head>

<body>
    <h3>Edit Data</h3>
    <div class="mx-auto">
        <div class="card-body ">
            <form method="POST" <div class="mb-3 row">
                <label for="nama_buku" class="col-sm-2 col-form-label">Nama Buku</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_buku" value=" <?php echo $data['nama_buku'] ?> " class="form-control">
                </div>
        </div>
        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
            <div class="col-sm-10">
                <input type="text" name="penerbit" value=" <?php echo $data['penerbit'] ?> " class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
            <div class="col-sm-10">
                <input type="text" name="penulis" value=" <?php echo $data['penulis'] ?> " class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tahun_edaran" class="col-sm-2 col-form-label">Tahun Edaran</label>
            <div class="col-sm-10">
                <input type="text" name="tahun_edaran" value=" <?php echo $data['tahun_edaran'] ?> " class="form-control">
            </div>
        </div>
        <div class="col text-center">
            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            <a href="dashboard.php" class="btn btn-danger">Kembali</a>
        </div>
    </div>
    </form>
    </div>
    </div>
</body>

</html>
<?php

if (isset($_POST['simpan'])) {

    $nama_buku      = $_POST['nama_buku'];
    $penerbit         = $_POST['penerbit'];
    $penulis          = $_POST['penulis'];
    $tahun_edaran       = $_POST['tahun_edaran'];
    mysqli_query($koneksi, "UPDATE buku 
    
    SET nama_buku = '$nama_buku', penerbit = '$penerbit', penulis = '$penulis', tahun_edaran = '$tahun_edaran'
    WHERE id='$id'") or die(mysqli_error($koneksi));
    header("location:dashboard.php");
}

?>