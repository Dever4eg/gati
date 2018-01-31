@extends('layouts.main')

@section('content')
	<div class="news-cont">


		<h2 class="text-center">Останні новини</h2>


		@forelse(TCG\Voyager\Models\Post::orderBy('created_at', 'desc')->paginate(10) as $item)
			<div class="news-item clearfix">

				<a class="title" href="/news/{{$item->id}}" title="Натиснути для перегляду!">
					<h3 class="news_title_index">{{$item->title}}</h3>
				</a>

				<img class="img-responsive" src="http://gatisnau.sumy.ua/web/images/news/new_50/1.jpg" alt="">

				<p class="news_text_index">{!! $item->body !!}</p>


				<div class="info">
					<span>27.09.2017</span>
					<span>Переглядів :80</span>
				</div>
			</div>
		@empty
			<h3>Записи отсутствуют</h3>
		@endforelse
	</div>
@endsection