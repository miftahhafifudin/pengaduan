<?php
include '../koneksi.php';

$id_pengaduan = $_POST['id_pengaduan'];
$tgl = $_POST['tgl_tanggapan'];
$tanggapan = $_POST['tanggapan'];
$id_petugas = $_POST['id_petugas'];
$st ='selesai';

$sql = ("insert into tanggapan (id_pengaduan, tgl_tanggapan, tanggapan, id_petugas) value ('$id_pengaduan', '$tgl', '$tanggapan', '$id_petugas')");
$ee = mysqli_query($koneksi,$sql);

$upst = mysqli_query($koneksi, "update pengaduan set status = '$st' where id_pengaduan='$id_pengaduan'");

if($sql){
	?>
	<script type="text/javascript">
		alert('Data Sudah Ditanggapi');
		window.location='admin.php?url=tanggapi';
	</script>
	<?php
}
?>