<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<style type="text/css">
		body{
			width: 100%;	
			font-family: times;
		}
		.h{
			text-align: center;
			width: 100%;
		}
		.m{
			margin: 3px;
		}
		.grs{
			border: 1px solid black;
			margin: 0px;
		}
		.img-header{
			position: fixed;
			top: 0px;
			left: 20px;
			height: 75px;
			width: 60px;
		}
		.tb{
			margin-top: 15px;
			width: 99%;
			font-size: 10pt;
		}
		.tb tr th  {
			border: 1px solid black;
		}
		.tb tr td  {
			border: 1px solid black;
		}
		.tb table tr th  {
			border:none;
			border-bottom: 1px solid black;
		}
		.tb table tr td  {
			border: none;
		}

		table tr td {
			text-align: left;
			padding: 8px;
		}

	</style>
	<title>Surat perintah kerja</title>
</head>
<body>
	<?php 
		$path = 'gambar/LogoBatang1.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$no = 1;
	 ?>
<div class="h">
	<h2 class="m">Surat Perintah Kerja</h2>
	<h3 class="m">Koordinasi, Konsultasi dan Bantuan (Helpdesk) E-Government</h3>
	<h4 class="m">No Tiket : {{$data}}</h4>
</div>
<div class="h">
<br>
<table border="1" cellspacing="0" width="99%" cellpadding="2">
	<tr>
		<td width="20%">Kepada Yth.</td>
		<td width="79%">
			Kepala Dinas Perhubungan, Komunikasi dan Informatika Kabupaten Batang, C/q Kepala Bidang Kominfo
		</td>
	</tr>
	<tr>
		<td>Nama Pemohon</td>
		<td></td>
	</tr>
	<tr>
		<td>Jabatan Pemohon</td>
		<td></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td></td>
	</tr>
	<tr>
		<td>SKPD</td>
		<td></td>
	</tr>
	<tr>
		<td>Tujuan/ Keperluan</td>
		<td></td>
	</tr>
	<tr>
		<td>Diterima Oleh</td>
		<td></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td></td>
	</tr>
	<tr>
		<td>Sarana</td>
		<td></td>
	</tr>
</table>

<b><h4 align="left" style="margin-bottom: 3px;">TIM Teknis</h4></b>
<table border="1" cellspacing="0" width="99%">
	<tr>
		<td width="20%">Ditindak Lanjuti / Dilayani</td>
		<td width="79%" align="left">
			Mulai Tanggal <br>
			Selesai Tanggal
		</td>
	</tr>
	<tr>
		<td>Uraian Tindakan</td>
		<td></td>
	</tr>
	<tr>
		<td>Hasil</td>
		<td></td>
	</tr>
</table>
<table width="99%" border="1" cellspacing="0" style="border-top:0px;">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Tanda Tangan</td>
		<td>No</td>
		<td>Nama</td>
		<td>Tanda Tangan</td>
	</tr>
	<tr>
		<td>1</td>
		<td></td>
		<td></td>
		<td>4</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>2</td>
		<td></td>
		<td></td>
		<td>5</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>3</td>
		<td></td>
		<td></td>
		<td>6</td>
		<td></td>
		<td></td>
	</tr>
</table>
</div>

</body>
</html>

