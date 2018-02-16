@extends('layouts.main')

@section('content')

    <div class="content-panel">
        <a href="/pages/{{$page->slug}}"><h3>{{$page->title}}</h3></a>

        <div class="">
            {!! $page->body !!}
        </div>

    </div>
@endsection