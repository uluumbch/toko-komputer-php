<?php 
include 'config.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

<<<<<<< HEAD
$cek=mysql_query("select * from admin where pass='$lama' and uname='$user'");
if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysql_query("update admin set pass='$b' where uname='$user'");
=======
$cek=mysqli_query($conn, "select * from admin where pass='$lama' and uname='$user'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysqli_query($conn, "update admin set pass='$b' where uname='$user'");
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
		header("location:ganti_pass.php?pesan=oke");
	}else{
		header("location:ganti_pass.php?pesan=tdksama");
	}
}else{
	header("location:ganti_pass.php?pesan=gagal");
}
<<<<<<< HEAD

 ?>
=======
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
