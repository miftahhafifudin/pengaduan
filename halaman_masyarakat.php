<?php
if(isset($_GET['url'])){
	$url = $_GET['url'];

	switch ($url) {
		case 'tulis_wadulan';
			include 'tulis_wadulan.php';
			break;
		
		case 'lihat_wadulan';
			include 'lihat_wadulan.php';
			break;

		case 'detail_wadulan':
			include'detail_wadulan.php';
			break;

		case 'lihat_tanggapan':
			include'lihat_tanggapan.php';
			break;
	}
}else{
	?>

	SELAMAT DATANG 
	<?= strtoupper($_SESSION['nama']) ; ?>
	DI APLIKASI WADULAN
	<?php
}

?>