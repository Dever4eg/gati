@extends('layouts.main')

@section('content')



    <ul class="nav nav-tabs schedule-tabs">
        @foreach($schedules as $key=>$item)
            <li class="{{ $key==0?'active':'' }}"><a data-toggle="tab" href="#tab{{$key}}">{{$item->date}}</a></li>
        @endforeach
    </ul>

    <div class="tab-content">
        @foreach($schedules as $key=>$item)
            <div id="tab{{$key}}" class="tab-pane fade {{ $key==0?'in active':'' }}">
                <h3>{{ $item->type->type_name }}</h3>
                <img class="img-responsive" src="{{ Storage::url($item->path_img) }}" alt="">
            </div>
        @endforeach
    </div>

    <div style="padding-bottom: 20px"></div>

@endsection