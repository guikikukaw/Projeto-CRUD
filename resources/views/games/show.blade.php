<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Jogo</title>
</head>
<body>
    <h1>Detalhes do Jogo</h1>
    <p><strong>Nome:</strong> {{ $game->nome }}</p>
    <p><strong>Gênero:</strong> {{ $game->genero }}</p>
    <p><strong>Plataforma:</strong> {{ $game->plataforma }}</p>
    <a href="{{ route('games.index') }}">Voltar para a Listagem</a>
</body>
</html>