<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/auth.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/loader.css')}}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="auth">
		<div class="card rounded shadow">
			<div class="card-head text-center px-4 pt-4">
				<!-- <img src="{{asset('assets/images/eoffice.png')}}" width="120"> -->
				<h2 class="pt-4">SALES APP</h2>
			</div>
			<div class="card-body">
				<form method="get" action="{{ route('password.reset') }}">
                    @csrf
                    
					<div class="form-group">
						<label for="username">Username</label>
                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="form-group mt-5">
						<button type="submit" class="btn btn-primary btn-block mb-4"> Cek Username </button>
					</div>
				</form>
			</div>
		</div>
	</div>

    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>