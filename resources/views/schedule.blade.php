@extends('layouts.main')

@section('content')


    <ul class="nav nav-tabs schedule-tabs">
        @foreach($dates as $key=>$items)
            <li class="{{ $key == $default_date ? 'active' : '' }}">
                <a data-toggle="tab" href="#tab{{$key}}">
                    @switch(strftime('%w', strtotime(current($items)->date)))
                        @case(1)
                            Пн
                            @break
                        @case(2)
                            Вт
                            @break
                        @case(3)
                            Ср
                            @break
                        @case(4)
                            Чт
                            @break
                        @case(5)
                            Пт
                            @break
                        @case(6)
                            Сб
                            @break
                        @case(7)
                            Нед
                            @break
                    @endswitch
                    {{ strftime('%e.%m', strtotime(current($items)->date)) }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content">
        @foreach($dates as $key=>$items)
            <div id="tab{{$key}}" class="tab-pane fade {{ $key == $default_date ? 'in active' : '' }}">
                @foreach($items as $key => $item)
                    <h3>{{ $item->type->type_name }}</h3>
                    <img class="img-responsive" src="{{ Storage::url($item->path_img) }}" alt="">
                @endforeach
            </div>
        @endforeach
    </div>

    <div style="padding-bottom: 20px"></div>

@endsection