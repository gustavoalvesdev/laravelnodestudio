@extends('site.layout')

@section('title', 'Essa é a página Home')

@section('conteudo')

    {{-- Isso é um comentário --}}

    {{-- isset9($nome) ? 'existe' : 'não existe' --}}

    {{ $teste ?? 'padrão' }}
@endsection
