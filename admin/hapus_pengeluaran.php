<?php 
include 'config.php';
$id=$_GET['id'];
<<<<<<< HEAD
mysql_query("delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");

 ?>
=======
mysqli_query($conn, "delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
