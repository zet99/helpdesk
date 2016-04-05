@extends('layout.app')

@section('konfirmasi')
class="active"
@endsection

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<h3>Konfirmasi Aduan</h3>
		<table class="table">
			<tr>
				<td>SKPD</td>
				<td>Nama Pemohon</td>
				<td>Jabatan</td>
				<td>Aduan</td>
				<td>Konfirmasi</td>
			</tr>
			@foreach($aduan as $ad)
				<tr>
					<td>{{$ad->skpd->nama_skpd}}</td>
					<td>{{$ad->nama_pemohon}}</td>
					<td>{{$ad->jabatan_pemohon}}</td>
					<td>{{$ad->tujuan}}</td>
					<td><button class="btn btn-warning" onclick="konfirm()">Konfirmasi</button></td>
				</tr>
			@endforeach
		</table>
	</div>
	<script type="text/javascript">
		function konfirm () {
			if (confirm("Yakin ingin konfirmasi")) {

			};
		}
	</script>
@endsection