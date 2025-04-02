<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar o usuário</title>
</head>
<body>
    <h1>Editar o usuário</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $user->nome }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        <br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
        <br>

        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('users.index') }}">Voltar para a listagem</a>
</body>
</html>