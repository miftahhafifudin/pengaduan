<?php
include 'koneksi.php';
if(isset($_POST['submit'])){
$nik 		= $_POST['nik'];
$nama 		= $_POST['nama'];
$username 	= $_POST['username'];
$pass 		= $_POST['password'];
$telp 		= $_POST['telp'];

$sql = ("insert into masyarakat (nik,nama,username,password,telp) values('$nik','$nama','$username','$pass','$telp')");
$input = mysqli_query($koneksi, $sql);
if($sql)
	{
		?>
		<script type="text/javascript">
			alert('Data Berhasil Disimpan, Silahkan Login');
			window.location = "index.php";
		</script>>
	<?php
	}
}
?>