<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar um produto</title>
</head>
<body>
    <h1>Criar um produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" required>
        <br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required>
        <br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>