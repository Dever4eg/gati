<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta name="theme-color" content="#9CC2CE">


	<title> @yield('title') </title>

    <meta Name="description" content="Офіційний сайт Глухівського інституту імені С.А. Ковпака СНАУ">
    <meta Name="keywords" content="Глухівський інститут СНАУ, Глухів, СНАУ , коледж СНАУ , ГДПУ , ГНДПУ, Глухівський технікум, техникум, професійне училище, Терещенко">

	<link rel="stylesheet" href="/assets/css/app.css"/>
</head>
<body>


	<div class="container">

        <header>
			<div class="row">
				<div class="col-md-12 nopadding-xs">
					<div class="title">
						<a href="/"> <h1 class="text-center ">Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ </h1> </a>
					</div>
				</div>
			</div>

			<div class="row hidden-xs">
				<div class="col-md-12 nopadding-xs">
					@include('partials.slider')
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 nopadding-xs">
					@include('partials.nav')
				</div>
			</div>

		</header>

		<div class="row">

			<div class="col-md-9">
				<div class="content">
					@yield('content')
				</div>
			</div>

			<div class="visible-xs" style="padding-bottom: 20px"></div>

			<div class="col-md-3 nopadding-xs">
				<div class="sidebar">

					<ul class="nav">
						<li>
							<a href="/schedule">Розклад занять</a>
						</li>
						<li>
							<a href="http://old.gatisnau.sumy.ua/" title="" target="_blank">Старий сайт</a>
						</li>
						<li>
							<a href="/zno" title="">ЗНО-2018</a>
						</li>

						<div class="side-padding hidden-xs hidden-sm">
							<iframe width="100%" src="//www.youtube.com/embed/9rCvrmG-viE?rel=0" frameborder="0" allowfullscreen=""></iframe>
							<iframe width="100%" src="//www.youtube.com/embed/cAa7tKYsvck?rel=0" frameborder="0" allowfullscreen=""></iframe>
						</div>

						<div class="text-center side-social">
							<h4>Ми в соціальних мережах</h4>
							<!--    <a href="https://vk.com/gk_snau" target="_blank">-->
							<!--        -->    <!--    </a>-->
							<a href="https://www.youtube.com/channel/UC0Ccnd5F7fTyQ60C3LeyhFw" target="_blank">
								<img src="http://gatisnau.sumy.ua/web/images/social/youtube.png" alt="">    </a>
							<a href="https://www.instagram.com/gati_snau.official/" target="_blank">
								<img src="http://gatisnau.sumy.ua/web/images/social/instagram.png" alt="">    </a>
							<a href="//facebook.com/official.gatisnau/" target="_blank">
								<img src="http://gatisnau.sumy.ua/web/images/social/facebook.png" alt="">    </a>
							<!--</div>-->
						</div>

						<li>
							<a href="">
								<h4 class="text-center">Слово директора</h4>
							</a>
						</li>

						<li>
							<a href="#">test</a>
						</li>
						<li>
							<a href="#">test</a>
						</li>
						<li>
							<a href="#">test</a>
						</li>
						<li>
							<a href="#">test</a>
						</li>
						<li>
							<a href="#">test</a>
						</li>


					</ul>
				</div>

			</div>
		</div>

		<footer>
			<div class="row kor-posil text-center">

                <a href="http://www.president.gov.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/1.png" alt="">
                </a>

                <a href="http://www.rada.gov.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/2.png" alt="">
                </a>

                <a href="http://www.mon.gov.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/3.png" alt="">
                </a>

                <a href="http://www.minagro.gov.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/4.png" alt="">
                </a>

                <a href="http://sm.gov.ua/uk/oda" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/5.png" alt="">
                </a>

                <a href="http:/http://gatisnau.sumy.ua//www.agroosvita.com/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/7.png" alt="">
                </a>

                <a href="http://www.sau.sumy.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/6.png" alt="">
                </a>

                <a href="http://ukc.gov.ua/" target="_blank" title="">
                    <img src="http://gatisnau.sumy.ua/web/images/kor_posil/8.png" alt="">
                </a>
			</div>
			<p class="text-center">© Глухівський агротехнічний інститут імені С.А. Ковпака Сумського НАУ 2017</p>
		</footer>
		</div>

	</div>
	
	<script src="/assets/js/app.js"></script>

</body>
</html>