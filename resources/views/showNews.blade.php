@extends('layouts.main')

@section('content')


    <div class="content-panel news">
        <a href="/news/{{$news->id}}"><h3>{{$news->title}}</h3></a>

        <p>
            <img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url($news->image)  }}" alt="">
        </p>

        <div class="page-body">
            {!! $news->body  !!}
        </div>

        <div>
            <span class="pull-left">{{ date('d-m-Y', strtotime($news->created_at)) }}</span>
            <span class="pull-right">Переглядів: {{ $news->featured }}</span>
        </div>
        <div class="clearfix"></div>

    </div>
@endsection