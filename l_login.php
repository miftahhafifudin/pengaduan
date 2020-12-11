<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = "select * from masyarakat where username='$username' and password='$password'";
$ee = mysqli_query($koneksi,$data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($ee);

if($cek > 0){
	$r = mysqli_fetch_assoc($ee);
	$_SESSION['username'] = $r['username'];
	$_SESSION['nik'] = $r['nik'];
	$_SESSION['nama'] = $r['nama'];
	$_SESSION['status'] = "login";
	header("location:masyarakat.php");
}else{
	?>
		<script type="text/javascript">
			alert('Username/Password gak ada');
			window.location = "index.php";
		</script>>
	<?php
}
?>