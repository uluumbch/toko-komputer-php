<?php 
include 'config.php';
$id=$_GET['id'];
<<<<<<< HEAD
mysql_query("delete from barang where id='$id'");
header("location:barang.php");

?>
=======
mysqli_query($conn, "delete from barang where id='$id'");
header("location:barang.php");
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
