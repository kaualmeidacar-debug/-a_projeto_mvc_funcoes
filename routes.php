<?php
// definir url do projeto
// http://localhost/projetos-kaua/mvc/a_projeto_mvc_funcoes/index.php?page=produtos

// Definir paginas validas no projeto

$paginasValidas = [
    "produtos" => __DIR__ . "/views/produto.php",
    "clientes" => __DIR__ . "/views/clientes.php",
    "funcionarios" => __DIR__ . "/views/funcionarios.php",

];

// Captura a pagina informada na url       
$page = $_GET["page"] ?? "produtos"; // prod. client. func.

// Verifica se a pagina existe
if (array_key_exists($page, $paginasValidas)) {
    require $paginasValidas[$page];
} else {
    http_response_code(404);
    require __DIR__ . "/views/404.php";
}
?>