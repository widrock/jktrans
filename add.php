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
      <h1>
        Tabel
        <small>Rekapan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-file"></i> Home</a></li>
        <li><a href="#">Table</a></li>
        <li class="active">Tambah Rekapan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Rekapan</h3>
              <a href="index.php" class="pull-right btn btn-default"><i class="fa fa-mail-reply-all (alias)"></i>   &nbsp;Lihat Data</a>
            </div>
            <form method="post" action="add_act.php" enctype="multipart/form-data">
            	<div class="box-body">
		            <div class="row">
                      <div class="col-md-6">
                        <div class="form-group has-feedback">
                          <label>S. P.</label>
                          <input type="text" class="form-control" required name="SP">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Colli</label>
                          <input type="text" class="form-control" required name="colli">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Berat</label>
                          <input type="text" class="form-control" name="berat">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Kode</label>
                          <input type="text" class="form-control" name="kode">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group has-feedback">
                          <label>Franco</label>
                          <input type="text" class="form-control" name="franco">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Confrankert</label>
                          <input type="text" class="form-control" name="confrankert">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Penerima</label>
                          <input type="text" class="form-control" name="penerima">
                        </div>
                        <div class="form-group has-feedback">
                          <label>Keterangan</label>
                          <select class="form-control" name="ket">
                            <option value="1">Lunas</option>
                            <option value="0">Tidak Lunas</option>
                          </select>
                        </div>
                      </div>
                  </div>
                  <hr />
                <div class="form-group pull-right">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> &nbsp;&nbsp; Simpan</button>
                        <button type="reset" class="btn btn-default btn-sm"> Reset</button>
                    </div>
                </div>
	             </div>
            </form>
	       </div>
          </div>
        </div>
    </section>
  </div>

<?php include 'footer.php'; ?>




