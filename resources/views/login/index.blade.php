<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/index.js') }}"></script>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form id="login-form" method="POST" action="{{ route('login.authenticate') }}">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="E-mail" required autofocus>
            <input type="password" name="password" class="form-control" placeholder="Senha" required>
            <div class="additional-options">
                <a href="#" id="create-account-link">Primeira vez aqui?</a>
                <a href="#" id="forgot-password-link">Esqueceu a senha?</a>
            </div>
            <button type="submit" class="btn">Entrar</button>
        </form>

        
        <form id="create-account-form" class="hidden">
            <input type="text" name="name" class="form-control" placeholder="Nome" required>
            <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
            <input type="date" name="dob" class="form-control" placeholder="Data de Nascimento" required>
            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            <input type="password" name="password" class="form-control" placeholder="Senha" required>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirmar Senha" required>
            <button type="submit" class="btn">Criar Conta</button>
            <div class="additional-options">
                <a href="#" id="login-link">Já tem uma Conta? Faça login</a>
            </div>
        </form>

        <form id="forgot-password-form" class="hidden">
            <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail" required>
            <button type="submit" class="btn">Enviar</button>
            <div class="additional-options">
                <a href="#" id="return-to-login-link">Voltar ao login</a>
            </div>
        </form>

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif
    </div>

</body>
</html>
