<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Helpdesk E-goverment</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap-datetimepicker.min.css') }}">

</head>

<body style="padding:0px;margin:0px;">
	<div class="row" style="margin:0px; padding-top:80px;">
		<nav class="navbar @if (!Auth::guest()) navbar-default @else navbar-inverse @endif navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">@if (Auth::guest()) dishubkominfo @else Administrator @endif</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if (!Auth::guest())
						<li @yield('penanganan') ><a href="{{ url('penanganan') }}">
							<i class="glyphicon glyphicon-warning-sign"></i>
							Beranda</a></li>
							@endif

							<li @yield('aduan') ><a href="{{ url('help') }}"> <i class="glyphicon glyphicon-pushpin"></i> Aduan</a></li>

							<!-- <li @yield('konfirmasi') ><a href="{{ url('konfirmasi') }}">Konfirmasi</a></li> -->

							@if (!Auth::guest())
							<li @yield('daftar') ><a href="{{url('daftar')}}">
								<i class="glyphicon glyphicon-info-sign"></i>
								History Aduan</a></li>
								<li @yield('laporan') ><a href="{{url('laporan')}}">
									<i class="glyphicon glyphicon-file"></i>
									Rekap</a></li>
									@endif
								</ul>
								<ul class="nav navbar-nav navbar-right">
									@if (Auth::guest())
									<li @yield('login') >
										<a href="{{url('auth/login')}}">
											<i class="glyphicon glyphicon-lock"></i>Login</a>
										</li>
										@else
									<li>
										<a href="{{url('auth/logout')}}">
											<i class="glyphicon glyphicon-off"></i> Logout
										</a>
									</li>
										@endif
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
						@yield('content')
					</div>	
					<script src="{{ elixir('js/all.js') }}"></script>
					<script src="{{ url('js/bootstrap-datetimepicker.min.js') }}"></script>
					<script type="text/javascript">
						$(".form_datetime").datetimepicker({
							format: "yyyy-mm-dd-hh-ii-ss",
							autoclose: true,
							todayBtn: true
						});
						$(".form_date").datetimepicker({
							format: "yyyy-mm-dd",
							autoclose: true,
							pickTime: false,
							todayBtn: true
						});
					</script> 
				</body>
				</html>