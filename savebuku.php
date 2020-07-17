<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Latihan 14 - 10119116</title>

  <!-- Bootstrap core CSS --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
    <br>
    <br>
    <br>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php
    require('db.php');
    $Kode       = $_POST['kode'];
    $Judul      = $_POST['judul'];
    $Penulis    = $_POST['penulis'];
    $Tahun      = $_POST['tahun'];
    $Harga      = $_POST['harga'];
    $Penerbit   = $_POST['penerbit'];

    $query = "INSERT INTO buku(
        kode,
        judul,
        penulis,
        tahun,
        harga,
        penerbit
        ) Values(
        '$Kode',
        '$Judul',
        '$Penulis',
        '$Tahun',
        '$Harga',
        '$Penerbit'
        )";
    
    $sql = mysqli_query($conn,$query);

        if($sql){
        ?>

        <?php
            echo "<div class='alert alert-success'>Data berhasil di masukkan</div>";
        }else{
            echo "Data gagal dimasukkan";
        }
        ?>
        
            <a href="index.php" class="btn btn-primary">
                Kembali Ke Halaman Awal
            </a>
      </div>
    </div>
  </div>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>