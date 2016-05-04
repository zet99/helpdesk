@extends('layout.app')

@section('penanganan')
	class="active"
@endsection

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Ganti Password {{ Auth::user()->name }}</h3>
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
				Password Berhasil Diubah
			</div>
			@endif

		<form class="form-horizontal" action="{{ url('user') }}/{{ Auth::user()->id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label for="tujuan" class="col-md-3 control-label">Password</label>
			<div class="col-md-8">
				<input type="password" name="password" class="form-control " required />
			</div>
		</div>
		<div class="form-group">
			<label for="tujuan" class="col-md-3 control-label">Ulangi Password</label>
			<div class="col-md-8">
				<input type="password" name="confirm" class="form-control " required />
			</div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary col-md-offset-3 ">
				Ubah
			</button>
		</div>
	</form>
	</div>
	</div>
	</div>
@endsection