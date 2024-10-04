<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Produtos</h2>
        <form method="post" action="">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" id="nome_produto" name="nome_produto" required>

            <label for="preco_compra">Preço de Compra:</label>
            <input type="number" step="0.01" id="preco_compra" name="preco_compra" required>

            <label for="preco_venda">Preço de Venda:</label>
            <input type="number" step="0.01" id="preco_venda" name="preco_venda" required>

            <label for="codigo_produto">Código do Produto:</label>
            <input type="text" id="codigo_produto" name="codigo_produto" required>

            <label for="nome_fornecedor">Nome do Fornecedor:</label>
            <input type="text" id="nome_fornecedor" name="nome_fornecedor" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>