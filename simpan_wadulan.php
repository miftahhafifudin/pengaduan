<?php
include 'koneksi.php';
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$ft = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$st = 0 ;

$sql = ("insert into pengaduan (tgl_pengaduan,nik,isi_laporan,foto,status) value ('$tgl','$nik','$isi','$ft','$st')");
$input = mysqli_query($koneksi,$sql);
move_uploaded_file($file, "foto/".$ft);

if($sql){
	?>
	<script type="text/javascript">
		alert('Data Berhasil Disimpan, Terimakasih Sudah Wadul');
		window.location="masyarakat.php";
	</script>>
	<?php
}
?>