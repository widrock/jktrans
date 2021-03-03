
<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
} ?>
<?php 
include 'header.php';
 ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-home"></i>
        Home
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="jumbotron"><h1><center><i class="fa fa-home"></i>HOME</h1></center></div>
    </section>
  </div>

<?php include 'footer.php'; ?>




