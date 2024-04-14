@extends('direcao.base')
@section('content')
    @if (isset($msg))
        <h3 style="color: red">Diretor não encontrado!</h3>
    @else
        <h2>Mostrando dados do diretor</h2>
        <p><strong>Nome:</strong> {{ $direcao->Nome }} </p>
        <p><strong>CPF:</strong> {{ $direcao->CPF }} </p>
        <p><strong>Data de Nascimento:</strong> {{ $direcao->data_nascimento }} </p>
        <p><strong>email:</strong> {{ $direcao->email }} </p>
        <a href="{{ route('direcao.index') }}">Voltar</a>
    @endif
@endsection