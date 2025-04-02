<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar um jogo</title>
</head>
<body>
    <h1>Criar um jogo</h1>
    <form action="{{ route('games.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required>
        <br>

        <label for="plataforma">Plataforma:</label>
        <input type="text" id="plataforma" name="plataforma" required>
        <br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>