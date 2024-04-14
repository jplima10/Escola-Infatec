@extends('direcao.base')

@section('content')
    <h2>Direção</h2>

    <h3>Diretores:</h3>
    @if (isset($direcaos))
        @if ($direcaos->isEmpty())
            <h4 style="color: red">Nenhum Diretor Encontrado!</h4>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($direcaos as $direcao)
                        <tr>
                            <td>{{ $direcao->Nome }}</td>
                            <td>{{ $direcao->CPF }}</td>
                            <td>{{ $direcao->data_nascimento }}</td>
                            <td>{{ $direcao->email }}</td>
                            <td>
                                <a href="{{ route('direcao.show', $direcao->id) }}">Exibir</a>
                                <a href="{{ route('direcao.edit', $direcao->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">Diretores Cadastrados: {{ $direcaos->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        @endif
    @endif

    <div class="mt-5"> 
        <a href="{{ route('direcao.create') }}" class="btn-custom">Adicionar Diretor</a>
    </div>

@endsection
