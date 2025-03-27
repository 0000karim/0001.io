<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token para proteção de segurança no Laravel -->
    <title>Agendar Doação</title>
    <!-- Link para o CSS personalizado, se necessário -->
    <link rel="stylesheet" href="{{ asset('css/agendamento.css') }}">
</head>
<body>

    <!-- Formulário de agendamento -->
    <form id="form-agendamento">
        <label for="bi">Número do BI:</label>
        <input type="text" id="bi" name="bi" required>
        <button type="submit">Agendar</button>
    </form>

    <!-- Onde vamos exibir mensagens de sucesso ou erro -->
    <div id="mensagem"></div>

    <!-- Script para enviar a requisição AJAX -->
    <script src="{{ asset('js/agendamento.js') }}"></script> <!-- Certifique-se de que o JS está na pasta public/js -->

</body>
</html>
