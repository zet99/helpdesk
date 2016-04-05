@extends('layout.app')

@section('aduan')
class="active"
@endsection

@section('content')
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> <i class="glyphicon glyphicon-bookmark"></i> Form Pengaduan Gangguan</h3>
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
				Pengaduan Gangguan telah terkirim, akan segera kami tindaklanjuti, terimakasih...
			</div>
			@endif
			<form class="form-horizontal" action="{{ url('help') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="nama" class="col-sm-2 control-label">Nama Pemohon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="{{old('nama_pemohon')}}" name="nama_pemohon" id="nama" placeholder="Nama Pemohon">
					</div>
				</div>
				<div class="form-group">
					<label for="jabatan" class="col-sm-2 control-label">Jabatan Pemohon</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="{{old('jabatan_pemohon')}}" name="jabatan_pemohon" id="jabatan" placeholder="Jabatan Pemohon">
					</div>
				</div>
				<div class="form-group">
					<label for="nohp" class="col-sm-2 control-label">No Hp</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" value="{{old('no_hp')}}" name="no_hp" id="nohp" placeholder="No Hp">
					</div>
				</div>
				<div class="form-group">
					<label for="skpd" class="col-sm-2 control-label">SKPD / Unit Kerja</label>
					<div class="col-sm-10">
						<select class="form-control" name="id_skpd">
							<option value="">-- Pilih SKPD --</option>
							@foreach($skpd as $sk)
							<option value="{{ $sk->id }}" >{{ $sk->nama_skpd }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="tujuan" class="col-sm-2 control-label">Tujuan / Keperluan</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="tujuan" cols="22" rows="5" id="tujuan" placeholder="Tujuan / Keperluan">{{old('tujuan')}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">
						<i class="glyphicon glyphicon-open-file"></i>
						Kirim</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection