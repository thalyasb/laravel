@extends('layouts.main')

@section('title', 'Thalya')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="cold-md-12">
    <h2>Próximo Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach ($events as $events)
            <div class="card col-md-3">
                <img src="/img/events/{{ $events->image }}" alt="{{$events->title}}">
                <div class="card-body">
                    <p class="card-date">10/04/2023</p>
                    <h5 class="card-title">{{$events->title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="#" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
        
        
