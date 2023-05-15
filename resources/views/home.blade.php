@extends('layouts.app')

@section('page-title', 'Lara House')


@section('content')

   @foreach ($trains as $train)
<div class="col-3">
    <div class="card m-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Orario di partenza: {{ $train->orario_di_partenza }}<br/>
                Stazione di partenza: {{$train['stazione_di_partenza']}}<br/>
                Stazione di arrivo: {{$train['stazione_di_arrivo']}}<br/>
                Codice Treno:  {{$train['codice_treno']}}<br/>
                Numero Carrozze:  {{$train['numero_carrozze']}}<br/>
                In orario:  {{$train['in_orario']}}<br/>
                Cancellato: {{$train['cancellato']}}<br/>
            </li>
        </ul>
    </div>
</div>


@endforeach
@endsection
