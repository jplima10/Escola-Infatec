@extends('direcao.base')

@section('content')
    <h2>Atualizar dados da Disciplina</h2>
    <form class="form" id="update-form" method="POST" action="{{ route('disciplina.update', $disciplina->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required value="{{ $disciplina->nome }}">
        </div>


        <div class="form-group">
            <label for="data_criacao">Data de Criação:</label>
            <input type="date" name="data_criacao" id="data_criacao" class="form-control" required value="{{ $disciplina->data_criacao }}">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Excluir</button>
        </div>
    </form>

    <form id="delete-form" method="POST" action="{{ route('docente.destroy', $disciplina->id) }}" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection
