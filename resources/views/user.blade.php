@extends('layout.app')

@section('penanganan')
	class="active"
@endsection

@section('content')
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah User</h3>
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
				User tersimpan
			</div>
			@endif

		<form class="form-horizontal" action="{{ url('user') }}" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="tujuan" class="col-md-3 control-label">Nama Lengkap Pengguna</label>
			<div class="col-md-8">
				<input type="text" name="name" class="form-control " value="{{old('name')}}" required/>
			</div>
		</div>
		<div class="form-group">
			<label for="tujuan" class="col-md-3 control-label">Email</label>
			<div class="col-md-8">
				<input type="email" name="email" class="form-control " value="{{old('email')}}" required />
			</div>
		</div>
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
				Tambah
			</button>
		</div>
	</form>
	</div>
	</div>
	<br>
	<h3>Daftar User Admin</h3>
	<table class="table table-striped">
		<tr>
			<th>Email</th>
			<th>Nama</th>
		</tr>
		<?php foreach ($user as $u) {
			?>
		<tr>
			<td>{{$u->email}}</td>
			<td>{{$u->name}}</td>
		</tr>
			<?
		} ?>
	</table>
	</div>
@endsection