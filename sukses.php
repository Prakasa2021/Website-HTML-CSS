<!DOCTYPE html>
<html>
	<head>
		<title>Hubungan Investasi</title>
		<link href="mycss.css" rel="stylesheet" type="text/css">
		<nav class="header">
			<div class="linkhead">
				<table align="center" class="table1">
					<tr>
						<td><a href="index.html">Home</a></td>
						<td><a href="produk.html">Produk Kami</a></td>
						<td><a href="kontak.html">Kontak Kami</a></td>
						<td><a href="tentang.html">Tentang Kami</a></td>
						<td><a href="hubungan.html">Hubungan Investasi</a></td>
					</tr>
				</table>
			</div>
		</nav>
	</head>
	<body>
	</br></br></br></br></br>
	<?php
	If (isset($_POST['krm'])){
		$nama=$_POST['nama'];

	echo nl2br ("<p style='font-family:verdana; text-align:center'>Hai $nama!\n\nPesan Anda akan segera kami baca dan respon kembali.\nTerima Kasih!</p>");}	
	?>
	
	</br></br></br></br></br>
	<script type="text/javascript">
	var timeleft = 10;
	var downloadTimer = setInterval(function(){
	if(timeleft <= 0){
		clearInterval(downloadTimer);		
	}
	else {
		var h1Element = document.getElementById("countdown");
		h1Element.innerHTML = "Anda akan otomatis kembali ke halaman kontak dalam " + timeleft + " detik";
		h1Element.style.textAlign="center";
	}
	timeleft -= 1;
	}, 1000);
	
    function Redirect() {  
        window.location="kontak.html"; 
    }
    setTimeout('Redirect()', 11000);	
	</script>
	
	<div id="countdown"></div>

	</br></br>
	<div class="footer">
		<table class="table2">
			<tr class="linkhead">
				<td width="50%">
					<a href="tentang.html">Tentang RotiKu</a></br></br>
					<a href="produk.html">Produk Kami</a></br></br>
					<a href="kontak.html">Hubungi Kami</a></br></br>
					<a href="hubungan.html">Hubungan Investasi</a>
				</td>
				<td width="50%" style="border-left-style:solid; border-left-color:#ffffff">
					<a href="https://facebook.com" target="__blank">Facebook</a></br></br>
					<a href="https://instagram.com" target="__blank">Instagram</a></br></br>
					<a href="https://twitter.com" target="__blank">Twitter</a>
				</td>
			</tr>
		</table>
		<table class="table3">
			<tr class="linkhead">
				<td>
					<p align="center" style="color:white; font-family:verdana">Copyright © 2021 <a href="index.html">RotiKu</a> all rights reversed. PT RotiKu Nusantara Tbk.</p>
				</td>
			</tr>
		</table>
	</div>
	</body>
</html>