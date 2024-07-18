
@extends('layouts.app')

@section('page-title' , 'Lista Treni')

@section('main-content')

    <main>
         <h1>LISTA TRENI</h1>
        @foreach ($trainList as $train)
        <div>
            <h1>{{$train->Azienda}}</h1>
            <p>Stazione di Partenza : {{$train->Stazione_di_partenza}}</p>
            <p>Stazione di Arrivo : {{$train->Stazione_di_arrivo}}</p>
            <p> Orario : {{$train->Orario_di_partenza}} ---- {{$train->Orario_di_arrivo}}</p>
            <h2>CODICE TRENO : {{$train->Codice_Treno}}</h2>
            @if ($train->In_orario)
                <p>IL TRENO ARRIVERA' IN ORARIO</p>
            @else
                <p>IL TRENO FARA' RITARDO CI SCUSIAMO PER L'INCONVENIENTE</p>
            @endif

            @if ($train->Cancellato)
                <p>LA TRATTA E' STATA CANCELLATA </p>

            @endif
        </div>
        @endforeach
    </main>

@endsection
