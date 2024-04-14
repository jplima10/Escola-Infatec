@extends('direcao.base')

@section('content')
    @if (isset($msg))
        <h3 style="color: red">{{ $msg }}</h3>
        <a href="{{ route('direcao.index') }}">Voltar</a>
    @else
        <h2>Mostrando dados da Disciplina</h2>
        <p><strong>Nome:</strong> {{ $disciplina->nome }} </p>
        <p><strong>Data de Criação:</strong> {{ $disciplina->data_criacao }} </p>
        <a href="{{ route('direcao.index') }}">Voltar</a>
    @endif
@endsection
