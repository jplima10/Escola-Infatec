@extends('direcao.base')

@section('content')
    <h2>Atualizar dados do Diretor</h2>
    <form class="form" id="update-form" method="POST" action="{{ route('direcao.update', $direcao->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input type="text" name="Nome" id="Nome" class="form-control" required value="{{ $direcao->Nome }}">
        </div>

        <div class="form-group">
            <label for="CPF">CPF:</label>
            <input type="text" name="CPF" id="CPF" class="form-control @error('CPF') is-invalid @enderror" required value="{{ old('CPF', $direcao->CPF) }}">
            @error('CPF')
                <div class="invalid-feedback error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required value="{{ $direcao->data_nascimento }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ $direcao->email }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary mr-2">Salvar</button>
            <button type="button" class="btn btn-danger" onclick="confirmDelete()">Excluir</button>
        </div>
    </form>

    <script>
        function confirmDelete() {
            if (confirm('Tem certeza que deseja excluir este registro?')) {
                document.getElementById('delete-form').submit();
            }
        }
    </script>

    <form id="delete-form" method="POST" action="{{ route('direcao.destroy', $direcao->id) }}" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection
