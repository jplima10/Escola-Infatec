@extends('direcao.base')
@section('content')
    <h2>Cadastrar Nova Disciplina</h2>
<form action="{{ route('disciplina.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome da Disciplina:</label>
        <div>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div> 
    </div>

    <div class="form-group">
        <label for="data_criacao">Data de Criação:</label>
        <div>
            <input type="date" name="data_criacao" id="data_criacao" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>

@endsection