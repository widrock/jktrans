<?php 
include 'func.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM rekapan WHERE id='$id'")or die(mysqli_error());

header("location:index.php?pesan=hapus");
?>