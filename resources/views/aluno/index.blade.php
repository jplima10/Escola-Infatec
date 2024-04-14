@extends('direcao.base')

@section('content')
    <h2>Alunos</h2>

    <h3>Alunos:</h3>
    @if (isset($alunos))
        @if ($alunos->isEmpty())
            <h4 style="color: red">Nenhum Aluno Encontrado!</h4>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->CPF }}</td>
                            <td>{{ $aluno->data_nascimento }}</td>
                            <td>
                                <a href="{{ route('aluno.show', $aluno->id) }}" class="btn btn-info">Exibir</a>
                                <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Alunos Cadastrados: {{ $alunos->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        @endif
    @endif

    <div class="mt-5 space-below"> 
        <a href="{{ route('aluno.create') }}" class="btn-custom">Adicionar Aluno</a>
    </div>

@endsection
