
<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}
	include 'func.php';
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script>
		          alert('Data ditambahkan...');
		        </script>";
		}else if ($pesan == "update"){
			echo "<script>
		          alert('Data diubah...');
		        </script>";
		}else if ($pesan == "hapus"){
			echo "<script>
		          alert('Data dihapus..');
		        </script>";


		    }
	}
?>

<?php include 'header.php'; ?>
  <!-- Content Wrapper. Contains page content -->
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
        <li class="active">Daftar Rekapan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Rekapan</h3>
              <a href="add.php" class="pull-right btn btn-default"><i class="fa fa-plus"></i>&nbsp; Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th class="text-center">No.</th>
					<th class="text-center">S. P.</th>
					<th class="text-center">Colli</th>
					<th class="text-center">Berat</th>
					<th class="text-center">Code</th>
					<th class="text-center">Franco</th>
					<th class="text-center">Confrankert</th>
					<th class="text-center">Penerima Barang</th>
					<th class="text-center">Keterangan</th>
					<th class="text-center">Act</th>
                </tr>
                </thead>
                <tbody>
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
							<td>
								<?php if ($data['ket'] == 1) {
									echo "Lunas";
								}else{
									echo "Belum Lunas";
								}?>
							<td class="text-center">
								<a href="ubah.php?id=<?=$data['id']?>"><i class="fa fa-edit btn btn-info"></i></a> 
								<a href="delete.php?id=<?=$data['id']?>" onclick="return confirm('Hapus <?=$data['penerima']?>..?')"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
					<?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include 'footer.php'; ?>