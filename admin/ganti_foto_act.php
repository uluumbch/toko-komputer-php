<?php 
include 'config.php';
$user=$_POST['user'];
$foto=$_FILES['foto']['name'];

// move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name'])or die();
// 	mysql_query("update admin set foto='$foto' where uname='$user'");


<<<<<<< HEAD
$u=mysql_query("select * from admin where uname='$user'");
$us=mysql_fetch_array($u);
if(file_exists("foto/".$us['foto'])){
	unlink("foto/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysql_query("update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysql_query("update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}
?>
=======
$u=mysqli_query($conn, "select * from admin where uname='$user'");
$us=mysqli_fetch_array($u);
if(file_exists("foto/".$us['foto'])){
	unlink("foto/".$us['foto']);
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysqli_query($conn, "update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}else{
	move_uploaded_file($_FILES['foto']['tmp_name'], "foto/".$_FILES['foto']['name']);
	mysqli_query($conn, "update admin set foto='$foto' where uname='$user'");
	header("location:ganti_foto.php?pesan=oke");
}
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
