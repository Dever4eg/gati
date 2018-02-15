@extends('layouts.main')

@section('content')

    @forelse($news as $item)
        <div class="content-panel news">
            <a href="/news/{{$item->id}}"><h3>{{$item->title}}</h3></a>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="{{ \Illuminate\Support\Facades\Storage::url($item->image)  }}" alt="">
                </div>
            </div>
        </div>
    @empty
        <h3>Записи отсутствуют</h3>
    @endforelse

    <div class="text-center">
        {{$news->links()}}
    </div>
    
@endsection