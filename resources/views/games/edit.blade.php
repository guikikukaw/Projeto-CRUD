<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
</head>
<body>
    <h1>Editar Jogo</h1>
    <form action="{{ route('games.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $game->nome }}" required>
        <br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" value="{{ $game->genero }}" required>
        <br>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma" value="{{ $game->plataforma }}" required>
        <br>

        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('games.index') }}">Voltar para a Listagem</a>
</body>
</html>