<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar o produto</title>
</head>
<body>
    <h1>Editar o produto</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $product->nome }}" required>
        <br>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria" value="{{ $product->categoria }}" required>
        <br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="{{ $product->marca }}" required>
        <br>

        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('products.index') }}">Voltar para a listagem</a>
</body>
</html>