<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/media.css') }}">
	<title>@yield('page.title', config('app.name'))</title>
</head>
<body>
	
	<div class="d-flex flex-column justify-content-between min-vh-100">
		@include('includes.header')
		@include('includes.alert')
		<main class="flex-grow-1">
			@yield('content')
		</main>
		@include('includes.footer')
	</div>	
	<script src="{{ asset('js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</body>
</html>