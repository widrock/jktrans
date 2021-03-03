<?php 

session_start();
if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit();
}
$conn = mysqli_connect("localhost", "root", "", "unpas");

if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $pass = $_POST["pass"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row["password"])) {

      $_SESSION['login'] = true;
      echo "<script>
            alert('Login berhasil');
            document.location.href = 'index.php'
            </script>";
      exit;
    }
  }

  $error = true;
}
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JK Trans | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="assets/index2.html"><b>JK Trans</b></a>
  </div>

  <div class="register-box-body">

    <?php if (isset($error)): ?>
    <p class="login-box-msg" style="font-style: italic;">Username / password salah</p>
    <?php endif ?>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-md-12">
          <a href="registrasi.php">Belum memiliki akun ?</a>
          <button type="submit" class="btn btn-primary pull-right" name="login">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
</body>
</html>
