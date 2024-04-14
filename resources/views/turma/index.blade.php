@extends('direcao.base')

@section('content')
    <h2>Turmas Cadastrados</h2>

    <h3>Turmas:</h3>
    @if (isset($turmas))
        @if ($turmas->isEmpty())
            <h4 style="color: red">Nenhuma Turma Encontrada!</h4>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ano</th>
                        <th>Data de Criação</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($turmas as $turma)
                        <tr>
                            <td>{{ $turma->nome }}</td>
                            <td>{{ $turma->ano }}</td>
                            <td>{{ $turma->data_criacao }}</td>
                            <td>
                                <a href="{{ route('turma.show', $turma->id) }}">Exibir</a>
                                <a href="{{ route('turma.edit', $turma->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Turmas Cadastradas: {{ $turmas->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        @endif
    @endif

    <div class="mt-5"> 
        <a href="{{ route('turma.create') }}" class="btn-custom">Adicionar Turma</a>
    </div>

@endsection
