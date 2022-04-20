<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$suplier=$_POST['suplier'];
$modal=$_POST['modal'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

<<<<<<< HEAD
mysql_query("update barang set nama='$nama', jenis='$jenis', suplier='$suplier', modal='$modal', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang.php");

?>
=======
mysqli_query($conn, "update barang set nama='$nama', jenis='$jenis', suplier='$suplier', modal='$modal', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang.php");
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
