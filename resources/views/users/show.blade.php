<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do usuário</title>
</head>
<body>
    <h1>Detalhes do usuário</h1>
    <p><strong>Nome:</strong> {{ $user->nome }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}">Voltar para a listagem</a>
</body>
</html>