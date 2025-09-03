@extends('site.layout')

@section('title', 'Essa é a página Home')

@section('conteudo')

    {{-- Estruturas de repetição --}}
    @forelse ($frutas as $fruta)
        {{ $fruta }}<br>
    @empty
        array está vazio
    @endforelse

@endsection
