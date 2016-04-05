<table class="table table-striped">
	<tr>
		<th>Pemohon</th>
		<th>Jabatan</th>
		<th>No Hp</th>
		<th>Tanggal</th>
	</tr>
	<tr>
		<td>{{ $tbl->nama_pemohon }}</td>
		<td>{{ $tbl->jabatan_pemohon }}</td>
		<td>{{ $tbl->no_hp }}</td>
		<td><?php echo date_format($tbl->created_at,"d M Y  H:i:s"); ?></td>
	</tr>
</table>
<div class="well">
	<p>permasalahan : </p>
	{{$tbl->tujuan}}</div>