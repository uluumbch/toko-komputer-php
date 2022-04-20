<?php 
include 'config.php';
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$suplier=$_POST['suplier'];
$modal=$_POST['modal'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$sisa=$_POST['jumlah'];

<<<<<<< HEAD
mysql_query("insert into barang values('','$nama','$jenis','$suplier','$modal','$harga','$jumlah','$sisa')");
header("location:barang.php");

 ?>
=======
mysqli_query($conn, "insert into barang values('','$nama','$jenis','$suplier','$modal','$harga','$jumlah','$sisa')");
header("location:barang.php");
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
