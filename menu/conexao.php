<?php
// Conexão com o banco de dados
$servername = "localhost"; // Substitua pelo seu servidor
$username = "root"; // Substitua pelo seu usuário do banco
$password = ""; // Substitua pela sua senha do banco
$dbname = "mercado_doido"; // Substitua pelo seu banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST['nome_produto'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];
    $codigo_produto = $_POST['codigo_produto'];
    $nome_fornecedor = $_POST['nome_fornecedor'];

    $sql = "INSERT INTO produtos (nome_produto, preco_compra, preco_venda, codigo_produto, nome_fornecedor) 
            VALUES ('$nome_produto', '$preco_compra', '$preco_venda', '$codigo_produto', '$nome_fornecedor')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>