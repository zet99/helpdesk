@extends('layout.app')

@section('daftar')
class="active"
@endsection

@section('content')	
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> <i class="glyphicon glyphicon-list"></i> Daftar Aduan</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>No Aduan</th>
					<th>SKPD</th>
					<th>Pemohon</th>
					<th>Jabatan</th>
					<th>No Hp</th>
					<th>Tujuan</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Detail Pengerjaan</th>
					@foreach($aduan as $adu)
				</tr>
				<td>{{$adu->id}}</td>
				<td>{{$adu->skpd->nama_skpd}}</td>
				<td>{{$adu->nama_pemohon}}</td>
				<td>{{$adu->jabatan_pemohon}}</td>
				<td>{{$adu->no_hp}}</td>
				<td>{{$adu->tujuan}}</td>
				<td><?php echo date_format($adu->created_at,'d M Y H:i:s') ?></td>
				<td><?php if ($adu->status == 2) {
					?><span class="badge alert-success" ><h5>Closed</h5></span><?
				}elseif ($adu->status == 1) {
					?><span class="badge alert-warning" ><h5>Lanjut</h5></span><?
				}else{
					?><span class="badge alert-danger" ><h5>Belum Dikerjakan</h5></span><?
				} ?></td>
				<td>
					<button class="btn btn-primary" onclick="detail('{{$adu->id}}',{{$adu->status}})">
					<i class="glyphicon glyphicon-eye-open"></i> Detail</button>
				</td>
				<tr>
					@endforeach
				</tr>
			</table>
			{!! $aduan->render() !!}
			</div>
		</div>
	</div>
</div>

<!-- Large modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog modal-lg"> 	
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Detail Pengerjaan</h4>
			</div>
			<div class="modal-body konten">
				<p>One fine body&hellip;</p>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
function detail (argument,stat) {
	if (stat == 0) {
		alert("Belum Ada Pengerjaan");
		return false;
	}
	$.ajax({
		url : "<?php echo url('lihatDetail'); ?>/"+argument,
		success:function (data) {
			$('.konten').html(data);
			$('#myModal').modal('show');
		}
	});
}
</script>
@endsection