<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title> @yield('title') </title>

    <meta Name="description" content="Офіційний сайт Глухівського інституту імені С.А. Ковпака СНАУ">
    <meta Name="keywords" content="Глухівський інститут СНАУ, Глухів, СНАУ , коледж СНАУ , ГДПУ , ГНДПУ, Глухівський технікум, техникум, професійне училище, Терещенко">

	<link rel="stylesheet" href="/assets/css/app.css"/>
</head>
<body>


	<div class=" container">

        <div class="title row">
            <div class="col-md-12">
                <a href="/"> <h1 class="text-center">Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ </h1> </a>
            </div>
        </div>

        <div class="row">
            @include('partials.slider')
        </div>
        <div class="row">
            @include('partials.nav')
        </div>
	
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