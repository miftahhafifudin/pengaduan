<?php
include '../koneksi.php';
$id = $_GET['id'];
$sql="update pengaduan set status='proses' where id_pengaduan='$id'";
$ee = mysqli_query($koneksi,$sql);

if($ee){
	header('location:petugas.php?url=verifikasi_wadulan');
}
?>