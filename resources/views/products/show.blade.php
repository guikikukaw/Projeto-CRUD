<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do produto</title>
</head>
<body>
    <h1>Detalhes do produto</h1>
    <p><strong>Nome:</strong> {{ $product->nome }}</p>
    <p><strong>Categoria:</strong> {{ $product->categoria }}</p>
    <p><strong>Marca:</strong> {{ $product->marca }}</p>
    <a href="{{ route('products.index') }}">Voltar para a listagem</a>
</body>
</html>