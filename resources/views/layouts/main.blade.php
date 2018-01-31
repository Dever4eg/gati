<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="/assets/css/app.css"/>

</head>
<body>




	<div class=" container">
		<a href="/"><h2 class="text-center">Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ</h2></a>



		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0"></li>
		    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item">
		      <img src="http://gatisnau.sumy.ua/images/slider/slide/1.jpg" alt="Los Angeles">
		    </div>

		    <div class="item active">
		      <img src="http://gatisnau.sumy.ua/images/slider/slide/2.jpg" alt="Chicago">
		    </div>

		    <div class="item">
		      <img src="http://gatisnau.sumy.ua/images/slider/slide/3.jpg" alt="New York">
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">GATI</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="/schedule">Розклад</a></li>
		        <li><a href="/news">Новости</a></li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>


		<div class="row ">

				
				<div class="col-md-3 col-md-push-9">
				<div class="sidebar">

					<a class="btn btn-default" href="/schedule">Розклад</a>
					<a class="btn btn-default" href="#">Старый сайт</a>

					
					{{--<div class="hidden-sm hidden-xs">--}}
						{{--<div class="video">--}}
						    {{--<iframe width="100%" height="auto" src="//www.youtube.com/embed/9rCvrmG-viE?rel=0" frameborder="0" allowfullscreen=""></iframe>--}}
						{{--</div>--}}

						{{--<div class="video">--}}
						    {{--<iframe width="100%" height="auto" src="//www.youtube.com/embed/cAa7tKYsvck?rel=0" frameborder="0" allowfullscreen=""></iframe>--}}
						{{--</div>--}}
					{{--</div> --}}
					

					<a class="btn btn-default" href="#">Старый сайт</a>
					<a class="btn btn-default" href="#">Старый сайт</a>

					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum voluptatum inventore odio quibusdam, eaque. Error expedita, obcaecati repudiandae amet ad, deleniti quod laudantium quasi enim nemo! Adipisci temporibus, repellendus quos.-

					<a class="btn btn-default" href="#">Старый сайт</a>
					<a class="btn btn-default" href="#">Старый сайт</a>


				</div>
			</div>

 
			<div class="col-md-9 col-md-pull-3">

				 @yield('content')

			</div> 

		</div>

		<div class="kor_posil text-center">
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		    <a href="http://www.president.gov.ua/" target="_blank" title="">
		        <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt=""></a>
		</div>

		<footer>
            <p class="text-center">© Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ 2017</p>
        </footer>

	</div>


	<script src="/assets/js/app.js"></script>


	
</body>
</html>