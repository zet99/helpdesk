@extends('layout.app')

@section('penanganan')
class="active"
@endsection

@section('content')
<div class="col-md-10 col-md-offset-1">
	<h3>Pilih Nomor Tiket</h3>
	<div class="col-md-8 form-inline">
	<form method="get" action="">
		<label>Cari</label>
		<input class="form-control" name="q" size="50" placeholder="Cari Aduan" />
		<button class="btn btn-primary"> <i class="glyphicon glyphicon-search"></i> Cari</button>
	</form>
	</div>
	<br/>
	<br/>
	<br/>
	<div class="table-responsive">
	<table class="table table-striped table-hover table-responsive">
		<tr>
			<th>No Aduan</th>
			<th>SKPD</th>
			<th>Pemohon</th>
			<th>Jabatan</th>
			<th>No Hp</th>
			<th>Tujuan</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th colspan="2">Detail Pengerjaan</th>
		</tr>
		@foreach($aduans as $adu)
		<tr>
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
				<button class="btn btn-primary" onclick="tindak('{{$adu->id}}')">
				<i class="glyphicon glyphicon-share-alt"></i>
				Kerjakan</button>
				
			</td>
			<td>
				<a href="{{url('cetak_surat')}}/{{$adu->id}}" target="_blank" class="btn btn-info"><i class="glyphicon glyphicon-print"></i> Cetak SPK</a>
			</td>
		</tr>
			@endforeach
	</table>
	{!! $aduans->render() !!}
	</div>
	<div class="panel panel-primary isi" hidden="hidden">
		<div class="panel-heading">
			<h3 class="panel-title">Form Tindakan</h3>
		</div>
		<div class="panel-body">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if (session('success'))
			<div class="alert alert-success">
				Tindakan tersimpan
			</div>
			@endif

			<form class="form-horizontal" action="{{ url('penanganan') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="tujuan" class="col-md-2 control-label">Nomor Aduan</label>
					<div class="col-md-10">
						<input type="text" name="id_aduan" class="form-control id" readonly />
					</div>
				</div>
				<div class="form-group">
					<label for="jabatan" class="col-md-2 control-label">Ditindak lanjuti / dilayani</label>
					<div class="col-md-10">
						<div class="col-md-2">
							<label>Mulai Tanggal</label>
						</div>
						<div class="input-append date form_datetime col-md-5">
							<input type="text" name="mulai" class="form-control " value="{{old('mulai')}}" readonly>
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
					<br>
					<div class="col-md-10">
						<div class="col-md-2"><label>Selesai Tangal</label></div>
						<div class="input-append date form_datetime col-md-5">
							<input type="text" name="selesai" class="form-control " value="{{old('selesai')}}" readonly>
							<span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="tujuan" class="col-md-2 control-label">Root Cause</label>
					<div class="col-md-10">
						<textarea class="form-control" cols="22" rows="5" name="root_cause" placeholder="Root Cause">{{old('root_cause')}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="tujuan" class="col-md-2 control-label">Uraian Tindakan</label>
					<div class="col-md-10">
						<textarea class="form-control" cols="22" rows="5" name="tindakan" placeholder="Uraian Tindakan">{{old('tindakan')}}</textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="tujuan" class="col-md-2 control-label">Hasil</label>
					<div class="col-md-10">
						<label class="col-md-2">
							<input type="radio" name="hasil" id="optionsRadios1" value="2">
							Selesai
						</label>

						<label class="col-md-2">
							<input type="radio" name="hasil" id="optionsRadios1" value="1">
							Dilanjutkan
						</label>
						<label class="col-md-2">
							<input type="radio" name="hasil" id="optionsRadios1" value="0">
							Tidak Selesai
						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-offset-2">
						<button class="btn btn-primary" >
						<i class="glyphicon glyphicon-open-file"></i>
						Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function getAduan(){
		var id_aduan = $('.id_aduan').val();
		if (id_aduan == "") {
			$('.kontens').hide();
			$('.kontens').html("");
			$('.kontens').slideDown('medium');
			return false;
		};
		var alamat = '<?php echo url("help")."/" ?>'+id_aduan;
		$.ajax({
			url:alamat,
			success:function(data) {
				$('.kontens').hide();
				$('.kontens').html(data);
				$('.kontens').slideDown('medium');
			}
		});
	}

	function tindak(id) {
		$('.id').val(id);
		$('.isi').hide();
		$('.isi').slideDown('slow');
	}

</script>
@endsection