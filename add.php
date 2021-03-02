<!DOCTYPE html>
<html>
<head>
	<title>add</title>
</head>
<body>
	<h3>Input data baru</h3>
	<form action="add_act.php" method="post">		
		<table>
			<tr>
				<td>S. P.</td>
				<td><input type="text" name="SP"></td>					
			</tr>	
			<tr>
				<td>Colli</td>
				<td><input type="text" name="colli"></td>					
			</tr>	
			<tr>
				<td>Berat</td>
				<td><input type="text" name="berat"></td>					
			</tr>
			<tr>
				<td>Kode</td>
				<td><input type="text" name="kode"></td>					
			</tr>
			<tr>
				<td>Franco</td>
				<td><input type="text" name="franco"></td>					
			</tr>
			<tr>
				<td>Confrankert</td>
				<td><input type="text" name="confrankert"></td>					
			</tr>
			<tr>
				<td>Penerima</td>
				<td><input type="text" name="penerima"></td>					
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>
					<select name="ket">
						<option value="lunas">Lunas</option>
						<option value="tidak_lunas">Tidak Lunas</option>
					</select>
				</td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
