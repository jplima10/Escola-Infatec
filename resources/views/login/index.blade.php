<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .form-control {
            width: calc(100% - 20px);
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }

        .additional-options {
            text-align: right;
        }

        .additional-options a {
            text-decoration: none;
            color: #007bff;
            display: block;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
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

    <script>
        const createAccountLink = document.getElementById('create-account-link');
        const loginForm = document.getElementById('login-form');
        const createAccountForm = document.getElementById('create-account-form');
        const forgotPasswordLink = document.getElementById('forgot-password-link');
        const forgotPasswordForm = document.getElementById('forgot-password-form');
        const returnToLoginLink = document.getElementById('return-to-login-link');
        const loginLink = document.getElementById('login-link');

        createAccountLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginForm.classList.add('hidden');
            createAccountForm.classList.remove('hidden');
        });

        forgotPasswordLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginForm.classList.add('hidden');
            forgotPasswordForm.classList.remove('hidden');
        });

        returnToLoginLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginForm.classList.remove('hidden');
            forgotPasswordForm.classList.add('hidden');
        });

        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            loginForm.classList.remove('hidden');
            createAccountForm.classList.add('hidden');
        });
    </script>
</body>
</html>
