<?php
include 'db.php';

// Função para cadastrar transação
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $valor = floatval($_POST['valor']);
    $tipo_id = intval($_POST['tipo_id']);

    // Se for despesa, transforma o valor em negativo
    if ($tipo_id === 2) { // considerando que 2 é despesa
        $valor = -abs($valor);
    }

    $stmt = $pdo->prepare("INSERT INTO transacao (descricao, valor, tipo_id) VALUES (?, ?, ?)");
    $stmt->execute([$descricao, $valor, $tipo_id]);
}

// Função para listar transações
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("SELECT t.*, tt.nome as tipo_nome FROM transacao t JOIN tipo_transacao tt ON t.tipo_id = tt.id ORDER BY t.data DESC");
    $transacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($transacoes);
}

// Adicione funções para editar e excluir transações conforme necessário
?>
