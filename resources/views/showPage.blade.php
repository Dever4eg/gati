@extends('layouts.main')

@section('content')
    <h1>{{$page->title}}</h1></a>
    <div>{!! $page->body !!}</div>
@endsection