<?php
// A resposta sera enviada em formt JSON
header("Content-Type: application/json; charset=utf-8");

// Verfica se a requisição do tipo POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); //Metodo não permitido

    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Metodo não permitido, esperava GET"
    ]);

    exit;
}
// Recebe os dadso
$nome = trim($_POST['nome']);
$categoria = trim($_POST['categoria']);
$preco = trim($_POST['preco']);
$quantidade = trim($_POST['quantidade']);

// Valida os campos obrigatorios

if ($nome === "" || $categoria === "" || $preco === "" || $quantidade === "") {
    http_response_code(400);
    echo json_encode([
        "sucesso" => false,
        "mensagem" => "Preencha todos os campos"
    ]);

    exit;
}

// Retornar sucesso 
http_response_code(200);

echo json_encode([
    "sucesso" => true,
    "mensagem" => "Produto cadastrados com sucesso!",
    "produto" => [
        "nome" => $nome,
        "categoria" => $categoria,
        "preco" => $preco,
        "quantidade" => $quantidade,
    ]
])
?>