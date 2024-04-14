@extends('direcao.base')

@section('content')
    <h2>Disciplinas</h2>

    <h3>Disciplinas (Matérias):</h3>
    @if (isset($disciplinas))
        @if ($disciplinas->isEmpty())
            <h4 style="color: red">Nenhuma Disciplina Encontrada!</h4>
        @else
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de Criação</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($disciplinas as $disciplina)
                        <tr>
                            <td>{{ $disciplina->nome }}</td>
                            <td>{{ $disciplina->data_criacao }}</td>
                            <td>
                                <a href="{{ route('disciplina.show', $disciplina->id) }}">Exibir</a>
                                <a href="{{ route('disciplina.edit', $disciplina->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Disciplinas Cadastradas: {{ $disciplinas->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        @endif
    @endif

    <div class="mt-5"> 
        <a href="{{ route('disciplina.create') }}" class="btn-custom">Adicionar Disciplina</a>
    </div>
@endsection
