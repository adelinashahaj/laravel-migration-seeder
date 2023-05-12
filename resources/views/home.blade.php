@extends('layouts.app')

@section('page-title', 'Lara House')


@section('content')

   @foreach ($trains as $train)
<div class="col-3">
    <div class="card m-3">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> {{ $train->orario_di_partenza }}</li>
        </ul>
    </div>
</div>


@endforeach
@endsection
