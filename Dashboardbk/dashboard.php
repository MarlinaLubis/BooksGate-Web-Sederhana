
<?php include 'koneksi.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css1.css" />

    <title>BooksGate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>
  <body>
  </body>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
             <li class="nav-item">
                 <a href="http://localhost/booksgate/webb/" class="text-white">Home</a>

                  <a href="http://localhost/booksgate/about/about.php" class="text-white">About</a>
             </li>
           
             <li class="nav-item">
                <a class="nav-link active" href="#contack">Dashboard</a>
             </li>
             <li class="nav-item">
                 <a href="http://localhost/booksgate/hubungi.php" class="text-white">Hubungi</a>

              
             </li>
          </ul>
        </div>
      </div>
    </nav>
<section>
  
<div class="row mt-5">
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tahun Edaran</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php
                $urut = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM buku ");
                while ($nm = mysqli_fetch_array($query)) { ?>
                    <tr>
                        <td scope="row"><?php echo $urut++ ?></td>
                        <td scope="row"><?php echo $nm['nama_buku'] ?></td>
                        <td scope="row"><?php echo $nm['penerbit'] ?></td>
                        <td scope="row"><?php echo $nm['penulis'] ?></td>
                        <td scope="row"><?php echo $nm['tahun_edaran'] ?></td>
                        <td>
                          <a class="btn btn-warning" href="edit.php?id=<?php echo $nm['id'] ?>">edit</a>
                          <a class="btn btn-danger" href="hapus.php?id=<?php echo $nm['id']; ?>">hapus</a>
                        </td>
                          
                        
                    </tr>
                <?php
                }
                ?>
  </tbody>
</table>
    </div>
</div>
<br><br>
<h3 style="text-align:center";>INPUT DATA BUKU</h3>
<br><br>
<div class="container">
  <div class="card">
    <div class="card-body">
                <form action=" " method="POST" class="form-item">

                    <div class="form-group mb-3">
                        <label for="nama_buku">Nama Buku</label>
                        <input type="text" name="nama_buku" class="form-control col-md-9" placeholder="Masukan Nama Buku">
                    </div>

                    <div class="form-group mb-3">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control col-md-9" placeholder="Masukan Penerbit">
                    </div>

                    <div class="form-group mb-3">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" class="form-control col-md-9" placeholder="Masukan Nama Penulis">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tahun_edaran">Tahun Edaran</label>
                        <input type="text" name="tahun_edaran" class="form-control col-md-9" placeholder="Masukan Tahun Edaran">
                    </div>

                    <div class="col text-center">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    </div>

                </form>
    </div>
  </div>
</div>
  </body>
  <footer>
      <h3 class="text-center bg-warning">TERIMA KASIH SUDAH MENGUNJUNGI WEBSITE KAMI.</h3>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </footer>
</html>

<?php
if (isset($_POST['simpan'])) {
    //ambil data dari formulir
    $nama_buku          = $_POST['nama_buku'];
    $penerbit           = $_POST['penerbit'];
    $penulis            = $_POST['penulis'];
    $tahun_edaran       = $_POST['tahun_edaran'];

    //buat Query
    $sql = "INSERT INTO buku(nama_buku,penerbit,penulis,tahun_edaran) VALUE ('$nama_buku','$penerbit','$penulis','$tahun_edaran')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Data Ditambahkan')</script>";
    }
}
?>
