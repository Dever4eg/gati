<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'gati') }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/assets/css/app.css"/>
</head>
<body>

	<div class=" container">

		<header>
			<a href="/"><h2 class="text-center">Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ</h2></a>
			@include('partials.nav')
		</header>	
	
		<div class="row">
			@yield('content')
		</div>

		<footer>
    		<p class="text-center">© Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ 2017</p>
    	</footer>

	</div>
	
	<script src="/assets/js/app.js"></script>

</body>
</html>