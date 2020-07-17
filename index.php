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
        <h1> Pertemuan 14 - Delete Buku</h1>
        <h3> Fakhri Adi Saputra</h4>
        <h4>10119116</h4>

        <div class="text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                Tambah Buku
            </button>
        </div>
        <br>
        <?
            if(!empty($_GET['message'])) {
                $message = $_GET['message'];
                print($message)
            }
        ?>
        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="center">Kode</th>
                    <th class="center">Judul Buku</th>
                    <th class="center">Penulis</th>
                    <th class="center">Tahun</th>
                    <th class="center">Harga</th>
                    <th class="center">Penerbit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require ("db.php");
                $sql="select * from buku";
                $hasil=mysqli_query($conn,$sql);
                $row=mysqli_fetch_row($hasil);
                $no=1;
                do  { list($kode,$judul,$penulis,$tahun,$harga,$penerbit)=$row;
                    echo"<tr>
                            <td>$kode</td>
                            <td>$judul</td>
                            <td>$penulis</td>
                            <td>$tahun</td>
                            <td>$harga</td>
                            <td>$penerbit</td>
                            <td>
                                <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#add-$no'>
                                    Hapus Buku
                                </button>
                            </td>
                        </tr>";
                    echo"<div class='modal fade' id='add-$no' tabindex='-1' role='dialog'>
                    <div class='modal-dialog' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title'>Hapus Buku - $kode</h5>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                          <p>Kode Buku : $kode</p>
                          <p>Judul Buku : $judul</p>
                          <p>Penulis : $penulis</p>
                          <p>Apakah anda yakin ingin menghapus buku ini ?</p>
                        </div>
                        <div class='modal-footer'>
                          <a href='deletebuku.php?kode=$kode' class='btn btn-success'>Iya</a>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'>Tidak</button>
                        </div>
                      </div>
                    </div>
                  </div>";
                    $no++;
                }   while($row=mysqli_fetch_row($hasil));
            ?>
            </tbody>
            </table>
      </div>
    </div>
  </div>

<div class="modal fade" id="add" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="savebuku.php" method="POST">
      <div class="modal-body">
            <div class="form-group">
              <label for="kode">Kode Buku</label>
              <input type="text" name="kode" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
            <div class="form-group">
              <label for="kode">Judul Buku</label>
              <input type="text" name="judul" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
            <div class="form-group">
              <label for="kode">Penulis</label>
              <input type="text" name="penulis" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
            <div class="form-group">
              <label for="kode">Tahun Terbit</label>
              <input type="number" name="tahun" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
            <div class="form-group">
              <label for="kode">Harga Buku</label>
              <input type="number" name="harga" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
            <div class="form-group">
              <label for="kode">Penerbit Buku</label>
              <input type="text" name="penerbit" class="form-control" id="kode" placeholder="Masukkan Kode Buku">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" value="Save" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"> </script>
</body>

</html>