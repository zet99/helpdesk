@extends('layout.app')

@section('login')
class="active"
@endsection

@section('content')
        <div class="col-md-4 col-md-offset-4" style="margin-top:2%;">
            <h3 class='text-center'>Selamat datang di Aplikasi pengaduan</h3>
            <div class="panel panel-primary" >
              <div class="panel-heading">
                <h3 class="panel-title"> <i class="glyphicon glyphicon-user"></i> Form Login Administrator</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="/auth/login" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit"> <i class="glyphicon glyphicon-play"></i> Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    </div>
@endsection