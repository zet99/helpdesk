<table class="table">
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Root Cause</th>
		<th>Tindakan</th>
		<th>Hasil</th>
	</tr>
	<?php $n=1; ?>
	@foreach($tindakan as $t)
		<tr>
			<td><?php echo $n;$n++; ?></td>
			<td>{{$t->tanggal_penanganan}} sampai {{$t->tanggal_selesai}}</td>
			<td>{{$t->root_cause}}</td>
			<td>{{$t->tindakan}}</td>
			<td><?php 
				if ($t->hasil == 1) {
					?>Lanjut<?
				}elseif ($t->hasil == 0) {
					?>Tidak Selesai<?
				}else{
					?>Selesai<?
				}
			 ?></td>
		</tr>
	@endforeach
</table>