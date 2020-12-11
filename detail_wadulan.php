<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

  <div class="card shadow">
    <div class="card-header">
      Detail Pengaduan
    </div>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi,"select * from pengaduan where id_pengaduan = $id");
    // $ee = mysqli_query($koneksi,$sql);

    $data = mysqli_fetch_array($sql)

    ?>

    <div class="form-group cols-sm-6">
      <a href="masyarakat.php?url=lihat_wadulan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-arrow-left"></i>
        </span>
        <span>Kembali</span>
      </a>
    </div>
    <div class="card-body">
      <form action="simpan_wadulan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
          <label>Tanggal Pengaduan</label>
          <input type="text" name="tgl_pengaduan" value="<?php echo $data['tgl_pengaduan']; ?>" class="form-control" readonly>
        </div>

        <div class="form-group cols-sm-6">
          <label>Tulis Wadulan</label>
          <textarea class="form-control" rows="7" name="isi_laporan" readonly>
            <?= 
            $data['isi_laporan'];
            ?>
          </textarea>
        </div>

        <div class="form-group cols-sm-6">
          <label>Foto</label><br>
          <img src="foto/<?= $data['foto']; ?>" width="400">
        </div>
      </form>
    </div>
  
  </div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>