<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Detail</title>
  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}

  </script>
</head>

<body id="page-top">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan</h6>
            </div>
            <div class="card-body">
              <a href="admin.php?url=cetak" class="btn btn-primary btn-icon-split" onclick="printDiv('printableArea')">
                  <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                  </span>
                  <span class="text">Cetak</span>
              </a><p></p>
              <div id="printableArea">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <!-- <input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="Cetak"><p> -->
                  <thead>
                    <tr align="center">
                      <th>ID Pengaduan</th>
                      <th>Tanggal</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <?php
                  include '../koneksi.php';
                  $sql = ("select * from pengaduan where status='selesai'");
                  $ee = mysqli_query($koneksi,$sql);

                  while($data = mysqli_fetch_array($ee)){

                  ?>
                  <tbody>
                    <tr align="center">
                      <td><?= $data['id_pengaduan']; ?></td>
                      <td><?= $data['tgl_pengaduan']; ?></td>
                      <td width="200" height="100"><?= substr($data['isi_laporan'], -40); ?></td>
                      <td><?= $data['foto']; ?></td>
                      <td><?= $data['status']; ?></td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
            </div>
          </div>
        </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
