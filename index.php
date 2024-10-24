<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Transações Financeiras</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Gerenciador de Transações</h1>
    <form id="transacaoForm">
        <input type="text" name="descricao" placeholder="Descrição" required>
        <input type="number" name="valor" placeholder="Valor" required>
        <select name="tipo_id" required>
            <option value="">Selecione o Tipo</option>
            <option value="1">Receita</option>
            <option value="2">Despesa</option>
        </select>
        <button type="submit">Registrar Transação</button>
    </form>
    
    <h2>Transações</h2>
    <ul id="transacaoList"></ul>
</body>
</html>
