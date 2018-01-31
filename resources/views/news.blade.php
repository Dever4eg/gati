@extends('layouts.main')

@section('content')

    @forelse($news as $item)
        <a href="/news/{{$item->id}}"><h2>{{$item->title}}</h2></a>
    @empty
        <h3>Записи отсутствуют</h3>
    @endforelse

    <div class="text-center">
        {{$news->links()}}
    </div>
@endsection