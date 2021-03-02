<?php 
include 'func.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>JK Trans</title>
 </head>
 <body>
 	<h1>JK Trans</h1>
 	<p>HP : </p>
 	<br/>
 	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>

	<br/>
	<a class="tombol" href="add.php">+ Tambah Data Baru</a>

	<table border="1">
		<tr>
			<th>No.</th>
			<th>S. P.</th>
			<th>Colli</th>
			<th>Berat</th>
			<th>Code</th>
			<th>Franco</th>
			<th>Confrankert</th>
			<th>Penerima Barang</th>
			<th>Keterangan</th>
			<th>Act</th>
		</tr>
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM rekapan");
		$no=1; 
		while($data = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data['sp']?></td>
				<td><?=$data['colli']?></td>
				<td><?=$data['berat']?></td>
				<td><?=$data['kode']?></td>
				<td><?=$data['franco']?></td>
				<td><?=$data['confrankert']?></td>
				<td><?=$data['penerima']?></td>
				<td><?=$data['ket']?></td>
				<td>
					<a href="ubah.php?id=<?=$data['id']?>">Ubah</a> |
					<a href="delete.php?id=<?=$data['id']?>" onclick="return confirm('Hapus <?=$data['penerima']?>')">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table> 
 </body>
 </html>