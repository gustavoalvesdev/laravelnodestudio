@extends('site.layout')

@section('title', 'Essa é a página Home')

@section('conteudo')

    {{-- Estruturas de Controle --}}
    @guest
        Olá, visitante.
    @endguest

@endsection
