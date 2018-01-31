@extends('layouts.main')

@section('content')

    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad4.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad3.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad2.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad1.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad.png" alt="">


    @foreach($schedules as $item)
        <h2 class="text-center"> {{ $item->date }} </h2>
        <img class="img-responsive" src="storage/{{ $item->path_img }}" alt="">
    @endforeach

    {{ $schedules->links() }}

@endsection