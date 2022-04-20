<<<<<<< HEAD
<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysql_real_escape_string($_GET['id']);


$det=mysql_query("select * from barang where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
=======
<?php
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Detail Barang</h3>
<a class="btn" href="barang.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

<?php
$id_brg = mysqli_real_escape_string($conn, $_GET['id']);


$det = mysqli_query($conn, "select * from barang where id='$id_brg'") or die(mysqli_error($conn));
while ($d = mysqli_fetch_array($det)) {
?>
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
	<table class="table">
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td><?php echo $d['jenis'] ?></td>
		</tr>
		<tr>
			<td>Suplier</td>
			<td><?php echo $d['suplier'] ?></td>
		</tr>
		<tr>
			<td>Modal</td>
			<td>Rp.<?php echo number_format($d['modal']); ?>,-</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>Rp.<?php echo number_format($d['harga']) ?>,-</td>
		</tr>
		<tr>
			<td>Jumlah</td>
			<td><?php echo $d['jumlah'] ?></td>
		</tr>
		<tr>
			<td>Sisa</td>
			<td><?php echo $d['sisa'] ?></td>
		</tr>
	</table>
<<<<<<< HEAD
	<?php 
=======
<?php
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
}
?>
<?php include 'footer.php'; ?>