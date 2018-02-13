@extends('layouts.main')

@section('content')

    <!-- <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad4.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad3.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad2.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad1.png" alt="">
    <img class="img-responsive" src="http://gatisnau.sumy.ua/images/rozklad/rozklad.png" alt="">
 -->


    @forelse($schedules as $item)
     <h2 class="text-center"> {{ $item->type->type_name }} : {{ $item->date }} </h2>
        <img class="img-responsive" src="{{ Storage::url($item->path_img) }}" alt="">
    @empty
        <h3>Записи отсутствуют</h3>
    @endforelse

    {{ $schedules->links() }}

@endsection