<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/loader.css')}}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
	@yield('style')

</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom">
        <div class="form-inline">
            <i class="mdi mdi-menu mdi-24px d-block d-lg-none pointer text-dark mr-2" id="menu"></i>
            <a class="navbar-brand d-none d-lg-block" href="{{url('dashboard')}}">
            	SALES APP
            </a>
        </div>
        <div class="dropdown ml-auto">
            <a id="dropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            	<img src="{{asset('assets/images/user.jpg')}}" class="avatar rounded-circle" width="25">
            </a>
            <div class="dropdown-menu dropdown-menu-right rounded border-0" aria-labelledby="dropdownMenu">
            	<div class="dropdown-item d-flex align-items-center">
	            	<img src="{{asset('assets/images/user.jpg')}}" class="avatar rounded-circle align-self-center" width="50">
	            	<div class="ml-3 text-truncate">
		            	<h6 class="name text-truncate mb-1">{{ Auth::user()->name }}</h6>
		            </div>
	            </div>
	            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-18px mdi-login-variant"></i><span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

	<div class="sidebar">
		<div class="py-2 pl-3 border-bottom">
			<span class="navbar-brand mb-0">SALES APP</span>
		</div>

		<a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : ''}}">
			<i class="mdi mdi-apps mdi-18px"></i><span>Dashboard</span>
		</a>

        <small class="text-secondary text-uppercase font-weight-bold">Master</small>
		<a href="{{ route('user.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>User</span>
		</a>

        <a href="{{ route('role.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>User Role</span>
		</a>

        <a href="{{ route('customer.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>Nasabah</span>
		</a>

        <a href="{{ route('product.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>Produk</span>
		</a>

        <small class="text-secondary text-uppercase font-weight-bold">Activity</small>
        <a href="{{ route('activity_sales.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>Activity Sales</span>
		</a>

        <a href="{{ route('transaction_customer.index') }}" class="">
			<i class="mdi mdi-apps mdi-18px"></i><span>Customer Journey</span>
		</a>
	</div>

    <div class="main">@yield('content')</div>

    <script src="{{asset('assets/vendors/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    @yield('script')
</body>
</html>
