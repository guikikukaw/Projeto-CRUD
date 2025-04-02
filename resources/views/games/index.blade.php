<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de jogos</title>
</head>
<body>
    <h1>Listagem de Jogos</h1>
    <a href="{{ route('games.create') }}">Adicionar um novo jogo</a>
    <ul>
        @foreach ($games as $game)
            <li>
                {{ $game->nome }} - {{ $game->genero }} - {{ $game->plataforma }}
                <a href="{{ route('games.show', $game->id) }}">Visualizar</a>
                <a href="{{ route('games.edit', $game->id) }}">Editar</a>
                <form action="{{ route('games.destroy', $game->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>