<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10119094</title>
</head>
<body>
    <center>
        <h1>Form Input Buku</h1>
        <hr>
        <form action="savebuku.php" method="POST">
            <table>
                <tr>
                    <td>Kode</td>
                    <td>:</td>
                    <td><input type="text" name="kode" placeholder="Masukan kode buku.."></td>
                </tr>
                <tr>
                    <td>Judul buku</td>
                    <td>:</td>
                    <td><input type="text" name="judul" placeholder="Masukan judul buku.."></td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis" placeholder="Masukan penulis buku.."></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><input type="text" name="tahun" placeholder="Masukan tahun buku.."></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga" placeholder="Masukan harga buku.."></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="penerbit" placeholder="Masukan penerbit buku.."></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Save"><input type="reset" value="Reset">
        </form>
    </center>
</body>
</html>