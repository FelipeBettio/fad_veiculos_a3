
<?php
include_once './conexao.php';
// Consulta SQL
$sql = "SELECT tipo, modelo, descricao, ano, cor, preco, imagem1, imagem2, imagem3 FROM carros";
$result = $conn->query($sql);

// Criar um array para armazenar os resultados
$carros = array();

// Loop através dos resultados e adicionar ao array
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $carros[] = $row;
}


// Fechar conexão ao banco de dados
$conn = null;

// Definir o cabeçalho como JSON
header('Content-Type: application/json');

// Converter o array em JSON e imprimir
echo json_encode($carros, JSON_PRETTY_PRINT);

?>