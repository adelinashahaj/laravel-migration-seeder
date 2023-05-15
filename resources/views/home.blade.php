@extends('layouts.app')

@section('page-title', 'Lara House')


@section('content')


   @foreach ($trains as $train)
<div class="col-3">
    <div class="card m-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Orario di partenza: {{ $train->departure_time }}<br/>
                Stazione di partenza: {{$train->arrival_station}}<br/>
                Stazione di arrivo: {{$train->stazione_di_arrivo}}<br/>
                Codice Treno:  {{$train->train_code}}<br/>
                Numero Carrozze:  {{$train->wagons_number}}<br/>
                In orario:  {{$train->on_time}}<br/>
                Cancellato: {{$train->cancelled}}<br/>
            </li>
        </ul>
    </div>
</div>


@endforeach
@endsection
