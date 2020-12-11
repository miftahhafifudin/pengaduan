<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = "select * from petugas where username='$username' and password='$password'";
$ee = mysqli_query($koneksi,$data);

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($ee);

if($cek > 0){
	$r = mysqli_fetch_assoc($ee);

	if($r['level']=="admin"){
	session_start();
	$_SESSION['username'] = $r['username'];
	$_SESSION['id_petugas'] = $r['id_petugas'];
	$_SESSION['nama'] = $r['nama_petugas'];
	$_SESSION['level']= $r['level'];
	$_SESSION['status'] = "login";
	header("location:admin/admin.php");
	}elseif ($r['level']=="petugas")
	{
	session_start();
	$_SESSION['username'] = $r['username'];
	$_SESSION['id_petugas'] = $r['id_petugas'];
	$_SESSION['nama'] = $r['nama_petugas'];
	$_SESSION['level']= $r['level'];
	$_SESSION['status'] = "login";
	header("location:petugas/petugas.php");
	}else{
	?>
		<script type="text/javascript">
			alert('Username/Password gak ada');
			window.location = "index2.php";
		</script>>
	<?php
	}
}
?>