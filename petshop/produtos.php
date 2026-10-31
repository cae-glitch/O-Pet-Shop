<?php
$conexao = new mysqli("localhost", "root", "", "petshop");
$metodo = $_SERVER["REQUEST_METHOD"];


if ($metodo === "GET") {
    
}

if ($metodo === "POST") {
$conexao->query("INSERT INTO produtos (nome, preco, estoque) VALUES ('Caminha para Cachorro', 79.90 , 6)");
}


if ($metodo === "PUT") {
$conexao->query("UPDATE produtos SET nome = 'Guia retrátil', preco = 45.00, estoque = 8 WHERE id = 2");
}


if ($metodo === "PATCH") {
$conexao->query("UPDATE produtos SET estoque = 9 WHERE id = 14");
}

if ($metodo === "DELETE") {
$conexao->query("DELETE FROM produtos WHERE id = 6");
}

if ($metodo === "OPTIONS") {
echo "Aceito: GET, POST, PUT, PATCH, DELETE, OPTIONS\n";
}

$r = $conexao->query("SELECT * FROM produtos");
while ($linha = $r->fetch_assoc()) {
    echo $linha["id"] . " - " . $linha["nome"] . " - " . $linha["preco"] . " - " . $linha["estoque"]. "\n";
}