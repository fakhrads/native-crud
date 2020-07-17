<center>
<font size=7>
MENAMPILKAN DATA BARANG
<hr>
<table border=1>
<tr><td>NO<td>KODEBARANG<td>NAMA BARANG<td>HARGA <td>STOK <td
colspan=2><center>ACTION
<?php
require ("db.php");
$sql="select * from barang";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
$no=1;
do
{
list($kode,$nama,$harga,$stok)=$row;
echo"<tr><td>$no<td>$kode<td>$nama<td>$harga<td>$stok";
echo "<td><a href='editbarang.php?kodebrg=$kode'>Edit";
echo "<td><ahref='deletebarang.php?kodebrg=$kode'>Delete";
$no++;
}
while($row=mysqli_fetch_row($hasil));
?>
</table>
<hr>