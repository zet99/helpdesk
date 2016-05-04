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
	</style>
</head>
<body>
	<?php 
		$path = 'gambar/LogoBatang1.png';
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		$no = 1;
	 ?>
	 <img src="{{$base64}}" class="img-header">
<div class="h">
	<h3 class="m">PEMERINTAH KABUPATEN BATANG</h3>
	<h2 class="m">DINAS PERHUBUNGAN, KOMUNIKASI DAN INFORMATIKA</h2>
	<h5 class="m">Alamat : Jl. Raya Kandeman KM. 05 Batang 51261 Jawa Tengah Telp/Fax (0285) 391387</h5>
	<hr style="margin-bottom: 1px">
	<hr class="grs">
</div>
<div class="h">
<br>
	<h3> <u> Rekap Koordinasi, Konsultasi dan bantuan (Helpdesk)</u></h3>
	<p>Dari Tanggal <?php echo $tglAwal ?> sampai <?php echo $tglAkhir ?> </p>
<table class="tb" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nama Pemohon</th>
		<th>Jabatan Pemohon</th>
		<th>No Hp</th>
		<th>SKPD</th>
		<th>Tanggal</th>
		<th>Aduan</th>
		<th>Tindakan</th>
	</tr>
	@foreach($aduan as $a)
	<tr>
		<td><?php echo $no;$no++; ?></td>
		<td>{{$a->nama_pemohon}}</td>
		<td>{{$a->jabatan_pemohon}}</td>
		<td>{{$a->no_hp}}</td>
		<td>{{$a->skpd->nama_skpd}}</td>
		<td><?php echo date_format($a->created_at,'d M Y') ?></td>
		<td>{{$a->tujuan}}</td>
		<td style="width: 50%">
			<?php 
				if (count($a->penanganan) > 0) {
					?>
					<table cellspacing="0" style="margin: 0px; width: 100%">
						<tr>
							<th>Tanggal</th>
							<th>Root Cause</th>
							<th>Tindakan</th>
							<th>Hasil</th>
						</tr>
						@foreach($a->penanganan as $b)
						<tr>
							<td><?php echo $b->tanggal_penanganan ?></td>
							<td>{{$b->root_cause}}</td>
							<td>{{$b->tindakan}}</td>
							<td><?php 
								if ($b->hasil == 1) {
									?>Lanjut<?
								}elseif ($b->hasil == 0) {
									?>Tidak Selesai<?
								}else{
									?>Selesai<?
								}
							 ?></td>
						</tr>
						@endforeach
					</table>
					<?
				}else{
					?>
					Belum ada pengerjaan
					<?
				}
			 ?>
		</td>
	</tr>
	@endforeach
</table>

</div>

</body>
</html>

