@extends('layouts.main')

@section('content')
    <a href="/news/{{$news->id}}"><h1>{{$news->title}}</h1></a>
    <div>{!! $news->body !!}</div>
@endsection