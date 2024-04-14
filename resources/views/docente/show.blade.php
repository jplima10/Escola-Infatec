@extends('direcao.base')

@section('content')
    @if (isset($msg))
        <h3 style="color: red">{{ $msg }}</h3>
        <a href="{{ route('direcao.index') }}">Voltar</a>
    @else
        <h2>Mostrando dados do docente</h2>
        <p><strong>Nome:</strong> {{ $docente->nome }} </p>
        <p><strong>CPF:</strong> {{ $docente->CPF }} </p>
        <p><strong>Data de Nascimento:</strong> {{ $docente->data_nascimento }} </p>
        <a href="{{ route('direcao.index') }}">Voltar</a>
    @endif
@endsection
