<?php 

$conn = mysqli_connect("localhost", "root", "", "jktrans");

function registrasi($data)
{
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$username = strtolower($data["username"]);
	$password = mysqli_real_escape_string($conn, $data['pass']);
	$password2 = mysqli_real_escape_string($conn, $data['pass2']);
	$jabatan = "Admin";

	//cek username sudah ada
	$cek = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if (mysqli_fetch_assoc($cek)) {
		echo "<script>
			alert('username sudah digunakan');
		</script>";
		return false;
	}


	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert('Konfirmasi password tidak sama');
		</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($conn, "INSERT INTO user VALUES ('', '$nama','$jabatan', '$username', '$password' )");

	return mysqli_affected_rows($conn);
}


 ?>