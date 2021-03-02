<?php 
include 'func.php';
$SP 			= $_POST['SP'];
$colli 			= $_POST['colli'];
$berat 			= $_POST['berat'];
$kode 			= $_POST['kode'];
$dfranco 		= $_POST['berat'];
$confrankert 	= $_POST['confrankert'];
$penerima 		= $_POST['penerima'];
$ket 			= $_POST['ket'];

mysqli_query($conn, "INSERT INTO rekapan VALUES('','$SP','$colli','$berat','$kode','$dfranco','$confrankert','$penerima','$ket')");

header("location:index.php?pesan=input");
?>