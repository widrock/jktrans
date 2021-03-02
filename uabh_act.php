<?php 

include 'func.php';
$id 			= $_POST['id'];
$sp 			= $_POST['sp'];
$colli 			= $_POST['colli'];
$berat 			= $_POST['berat'];
$kode 			= $_POST['kode'];
$franco 		= $_POST['franco'];
$confrankert 	= $_POST['confrankert'];
$penerima 		= $_POST['penerima'];
$ket 			= $_POST['ket'];


mysqli_query($conn, "UPDATE rekapan SET sp='$sp', colli='$colli', berat='$berat', kode='$kode', franco='$franco', confrankert='$confrankert', penerima='$penerima', ket='$ket' WHERE id='$id' ");

header("location:index.php?pesan=update");
?>