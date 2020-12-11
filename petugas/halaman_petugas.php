<?php
if(isset($_GET['url'])){
	$url = $_GET['url'];

	switch ($url) {

		case'verifikasi_wadulan';
		include 'verifikasi_wadulan.php';
		break;

		case'detail_wadulan';
		include 'detail_wadulan.php';
		break;
		
		case'tanggapi';
		include 'tanggapi.php';
		break;

		case'tanggapi_wadulan';
		include 'tanggapi_wadulan.php';
		break;

	}
}else{
	include '../koneksi.php';
	$sql = "select * from pengaduan where status='0'";
	$sql2 = "select * from pengaduan where status='proses'";
	$ee =  mysqli_query($koneksi,$sql);
	$ee2 = mysqli_query($koneksi,$sql2);
	$cek=mysqli_num_rows($ee);
	$cek2=mysqli_num_rows($ee2);

	?>
	SELAMAT DATANG, <?= strtoupper($_SESSION['nama']); ?><br>
	DI HALAMAN PETUGAS APLIKASI WADULAN
	<br>
  <br>
    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cek2; ?> Pengaduan Yang Harus Ditanggapi</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek2; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
	 <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cek; ?> Laporan Dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
	<?php
 }

?>