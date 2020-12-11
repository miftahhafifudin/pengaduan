<?php
include '../koneksi.php';
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = ("insert into petugas (nama_petugas, username, password, telp, level) value('$nama','$user','$pass','$telp','$level')");
$input = mysqli_query($koneksi,$sql);

if($input){
	?>
	<script type="text/javascript">
		alert('Data Berhasil Disimpan');
		window.location='admin.php?url=lihat_petugas';
	</script>
	<?php
}
?>