@extends('layout.app')

@section('laporan')
class="active"
@endsection

@section('content')
<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"> <i class="glyphicon glyphicon-file"></i> Rekap Aduan dan penanganan</h3>
		</div>
		<div class="panel-body">
			<div class="panel-body form-horizontal">
				<form action="{{url('laporan')}}" method="POST" target="_blank">
					{!! csrf_field() !!}
				<div class="form-group">
					<div class="col-md-6">
					<label for="jabatan" class="col-md-4 control-label">Dari Tanggal</label>
						<div class="input-append date form_date col-md-8">
						    <input type="text" name="awal" class="awal form-control" readonly>
						    <span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-4"><label>Sampai Tangal</label></div>
						<div class="input-append date form_date col-md-8">
						    <input type="text" name="akhir" class="akhir form-control" readonly>
						    <span class="add-on"><i class="icon-th"></i></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-2">
						<button type="submit" hidden class="sbmt"></button>
						<button type="button" onclick="validasi()" class="btn btn-primary" >
						<i class="glyphicon glyphicon-eye-open"></i> 
						Lihat</button>
					</div>
				</div>
				</form>
		</div>
	</div>
</div>
<div id="blank"></div>

<script type="text/javascript">
	function validasi(){
		var awal = $('.awal').val();
		var akhir = $('.akhir').val();
		if (awal=="") {
			alert("tanggal Mulai harus di isi");
		}else if (akhir=="") {
			alert("tanggal Akhir harus di isi");
		}else if (awal > akhir) {
			alert("tanggal awal harus lebih kecil dari tanggal akhir");
		}else{
			$('.sbmt').trigger('click');
		}
	}
</script>
{!! $cart !!}
@endsection