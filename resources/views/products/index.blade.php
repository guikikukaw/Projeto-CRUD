<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
</head>
<body>
    <h1>Listagem de produtos</h1>
    <a href="{{ route('products.create') }}">Adicionar um novo produto</a>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->nome }} - {{ $product->categoria }} - {{ $product->marca }}
                <a href="{{ route('products.show', $product->id) }}">Visualizar</a>
                <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>