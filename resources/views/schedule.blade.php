@extends('layouts.main')

@section('content')


    <ul class="nav nav-tabs schedule-tabs">
        @foreach($dates as $key=>$items)
            <li class="{{ '' }}"><a data-toggle="tab" href="#tab{{$key}}">{{$key}}</a></li>
        @endforeach
    </ul>

    <div class="tab-content">
        @foreach($dates as $key=>$items)
            <div id="tab{{$key}}" class="tab-pane fade {{ '' }}">

                @foreach($items as $kye => $item)

                    <h3>{{ $item['type'] }}</h3>
                    <img class="img-responsive" src="{{ Storage::url($item['image']) }}" alt="">
                @endforeach
            </div>
        @endforeach
    </div>

    <div style="padding-bottom: 20px"></div>

@endsection