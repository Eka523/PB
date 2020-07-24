<?php 
session_start();
session_destroy();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Mirai-Pedia">
    <meta property="og:image" content="./assets/images/og-img.png" />
	<link rel="stylesheet" href="./assets/css/miraipedia.css"/>
	<link rel="shorcut icon" href="./assets/images/favicon.png" />
	<title>PB Indonesia</title>
</head>
<body>
	<div class="miraipedia">
		<div class="header">
			<div class="txt-header">
				<img class="atas-txt" src="./assets/images/logo.png" src="mirai-pedia"><br>
				SELAMAT <br>SILAHKAN CEK INVENTORY PADA AKUN PB ANDA.
			</div>
		</div>
		<hr class="mirai-garis">
		<div class="txt-garis">POINT BLANK INDONESIA</div>
		&nbsp;
		<div class="mirai-content">
			<div class="mirai-reward">
				<div class="txt-content-grid">BERHASIL LOGIN</div>
				<div id="tampil_modal">
    <div id="modal">
      <div class="txt-content-grid" id="modal_atas">"TERIMA KASIH" SUDAH AMBIL HADIAH HARI INI...!!!</div>
      <p>DATANG KEMBALI SETELAH 1x60mnt.</p>
      <p>Silahkan CEK INVENTORY ANDA.</p>
      
	<a href="../index.php" rel="noopener noreferrer"> <button class="btn-mirai">LOGOUT</button></a>
    </div></div>			</div>
		</div>
	</div>
	<script type="text/javascript" src="./assets/js/miraipedia.js"></script>
</body>