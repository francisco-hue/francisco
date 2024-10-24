document.getElementById('transacaoForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);
    fetch('transactions.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            loadTransacoes();
            this.reset();
        }
    });
});

function loadTransacoes() {
    fetch('transactions.php')
    .then(response => response.json())
    .then(transacoes => {
        const list = document.getElementById('transacaoList');
        list.innerHTML = '';
        transacoes.forEach(transacao => {
            const item = document.createElement('li');
            item.textContent = `${transacao.descricao} - R$ ${transacao.valor} (${transacao.tipo_nome})`;
            list.appendChild(item);
        });
    });
}

window.onload = loadTransacoes;
