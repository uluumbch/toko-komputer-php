<<<<<<< HEAD
<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Barang</h3>
<a class="btn" href="barang_laku.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysql_real_escape_string($_GET['id']);

$det=mysql_query("select * from barang_laku where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
=======
<?php
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span> Edit Barang</h3>
<a class="btn" href="barang_laku.php"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>

<?php
$id_brg = mysqli_real_escape_string($conn, $_GET['id']);

$det = mysqli_query($conn, "select * from barang_laku where id='$id_brg'") or die(mysqli_error($conn));
while ($d = mysqli_fetch_array($det)) {
?>
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
	<form action="update_laku.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>

			<tr>
				<td>Tanggal</td>
				<td><input name="tgl" type="text" class="form-control" id="tgl" autocomplete="off" value="<?php echo $d['tanggal'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<select class="form-control" name="nama">
<<<<<<< HEAD
						<?php 
						$brg=mysql_query("select * from barang");
						while($b=mysql_fetch_array($brg)){
							?>	
							<option <?php if($d['nama']==$b['nama']){echo "selected"; } ?> value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
							<?php 
=======
						<?php
						$brg = mysqli_query($conn, "select * from barang");
						while ($b = mysqli_fetch_array($brg)) {
						?>
							<option <?php if ($d['nama'] == $b['nama']) {
										echo "selected";
									} ?> value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
						<?php
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
						}
						?>
					</select>
				</td>
<<<<<<< HEAD
			</tr>		
=======
			</tr>
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634

			<tr>
				<td>Harga</td>
				<td><input type="text" class="form-control" name="harga" value="<?php echo $d['harga'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
<<<<<<< HEAD
	<?php 
}
?>
 <script type="text/javascript">
        $(document).ready(function(){

            $('#tgl').datepicker({dateFormat: 'yy/mm/dd'});

        });
    </script>
<?php 
=======
<?php
}
?>
<script type="text/javascript">
	$(document).ready(function() {

		$('#tgl').datepicker({
			dateFormat: 'yy/mm/dd'
		});

	});
</script>
<?php
>>>>>>> 5d351b0fbd5cbf696368bbe11b18fc04aef15634
include 'footer.php';

?>