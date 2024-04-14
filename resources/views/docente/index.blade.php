@extends('direcao.base')

@section('content')
    <h2>Docentes</h2>

    <h3>Docentes:</h3>
    @if (isset($docentes))
        @if ($docentes->isEmpty())
            <h4 style="color: red">Nenhum Docente Encontrado!</h4>
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
                    @foreach ($docentes as $docente)
                        <tr>
                            <td>{{ $docente->nome }}</td>
                            <td>{{ $docente->CPF }}</td>
                            <td>{{ $docente->data_nascimento }}</td>
                            <td>
                                <a href="{{ route('docente.show', $docente->id) }}">Exibir</a>
                                <a href="{{ route('docente.edit', $docente->id) }}">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Docentes Cadastrados: {{ $docentes->count() }}</td>
                    </tr>
                </tfoot>
            </table>
        @endif
    @endif

    <div class="mt-5"> 
        <a href="{{ route('docente.create') }}" class="btn-custom">Adicionar Docente</a>
    </div>

@endsection
