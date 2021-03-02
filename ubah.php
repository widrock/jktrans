<!DOCTYPE html>
<html>
<head>
	<title>ubah</title>
</head>
<body>
	<h3>Ubah Data</h3>
	<?php
	require 'func.php'; 
	$id = $_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM rekapan WHERE id = '$id'");
	while ($data = mysqli_fetch_array($result)) { ?>
		
	
	<form action="uabh_act.php" method="post">		
		<table>
			<tr>
				<td>S. P.</td>
				<td>
					<input type="hidden" name="id" value="<?=$data['id']?>">
					<input type="text" name="sp" value="<?=$data['sp']?>">
				</td>					
			</tr>	
			<tr>
				<td>Colli</td>
				<td><input type="text" name="colli" value="<?=$data['colli']?>"></td>					
			</tr>	
			<tr>
				<td>Berat</td>
				<td><input type="text" name="berat" value="<?=$data['berat']?>"</td>					
			</tr>
			<tr>
				<td>Kode</td>
				<td><input type="text" name="kode" value="<?=$data['kode']?>"></td>					
			</tr>
			<tr>
				<td>Franco</td>
				<td><input type="text" name="franco" value="<?=$data['franco']?>"></td>					
			</tr>
			<tr>
				<td>Confrankert</td>
				<td><input type="text" name="confrankert" value="<?=$data['confrankert']?>"></td>					
			</tr>
			<tr>
				<td>Penerima</td>
				<td><input type="text" name="penerima" value="<?=$data['penerima']?>"></td>					
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="ket"><?=$data['ket']?></textarea> </td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Edit"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>
