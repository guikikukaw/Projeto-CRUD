<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
</head>
<body>
    <h1>Listagem de usuários</h1>
    <a href="{{ route('users.create') }}">Adicionar um novo usuário</a>
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->nome }} - {{ $user->email }}
                <a href="{{ route('users.show', $user->id) }}">Visualizar</a>
                <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>