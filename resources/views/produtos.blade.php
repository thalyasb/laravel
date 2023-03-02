@extends('layouts.main')

@section('title', 'Thalya')

@section('content')

    <h1>Algum título</h1>
    
    @if($busca != '')
    <p>O usuário esta buscando por: {{ $busca }}</p>
    @endif
@endsection