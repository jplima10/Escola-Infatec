<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Adicionando Font Awesome -->
</head>
<body>
    <div class="container">
        <header class="header">
            <h1 style="cursor: pointer;" onclick="window.location.href='/inicio'">Escola Infatec</h1>
            <div class="avatar-container">
                <div class="avatar" onclick="toggleOptions()"><i class="fas fa-user fa-2x"></i></div> <!-- Adiciona um evento de clique para mostrar/ocultar as opções -->
                <div class="options" id="options"> <!-- Container das opções -->
                    <a href="">Alterar</a> <!-- Opção de alterar -->
                    <a href="#" onclick="window.location.href='/';">Sair</a> <!-- Opção de sair -->
                </div>
            </div>
        </header>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script>
        function toggleOptions() {
            var options = document.getElementById("options");
            if (options.style.display === "block") {
                options.style.display = "none"; // Se as opções estão visíveis, oculta
            } else {
                options.style.display = "block"; // Se as opções estão ocultas, exibe
            }
        }
    </script>
</body>
</html>
