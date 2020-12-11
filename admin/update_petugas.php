<?php
include '../koneksi.php';
$id = $_POST['id_petugas'];
$nama = $_POST['nama_petugas'];
$user = $_POST['username'];
$pass = $_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];

$sql = ("update petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp', level='$level' where 
		id_petugas='$id' ");
$input = mysqli_query($koneksi,$sql);

if($input){
	?>
	<script type="text/javascript">
		alert('Data Berhasil Diubah');
		window.location='admin.php?url=lihat_petugas';
	</script>
	<?php
}
?>