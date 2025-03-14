// src/js/rainbowSix.js

document.getElementById('rainbow-six').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('rainbow-options').classList.remove('hidden');
});

document.getElementById('atacante').addEventListener('click', function () {
    sortearOperador('atacante');
});

document.getElementById('defensor').addEventListener('click', function () {
    sortearOperador('defensor');
});

async function sortearOperador(tipo) {
    try {
        // Faz a requisição para a API
        const response = await fetch(`/sorteadordepersonagens/api/operadores.php?tipo=${tipo}`);
        const operadores = await response.json();

        // Verifica se a resposta contém um erro
        if (operadores.erro) {
            alert(operadores.erro);
            return;
        }

        // Sorteia um operador aleatório
        const operadorSorteado = operadores[Math.floor(Math.random() * operadores.length)];

        // Exibe o resultado na tela
        document.getElementById('operador').innerHTML = `<strong>Operador:</strong> ${operadorSorteado.nome || 'Nenhum'}`;
        document.getElementById('arma').innerHTML = `<strong>Arma:</strong> ${operadorSorteado.arma || 'Nenhuma'}`;

        // Verifica e exibe a mira, se existir
        if (operadorSorteado.mira) {
            document.getElementById('mira').innerHTML = `<strong>Mira:</strong> ${operadorSorteado.mira}`;
        } else {
            document.getElementById('mira').innerHTML = ''; // Esconde a mira se não existir
        }

        // Verifica e exibe o cano, se existir
        if (operadorSorteado.cano) {
            document.getElementById('cano').innerHTML = `<strong>Cano:</strong> ${operadorSorteado.cano}`;
        } else {
            document.getElementById('cano').innerHTML = ''; // Esconde o cano se não existir
        }

        // Verifica e exibe o cabo, se existir
        if (operadorSorteado.cabo) {
            document.getElementById('cabo').innerHTML = `<strong>Cabo:</strong> ${operadorSorteado.cabo}`;
        } else {
            document.getElementById('cabo').innerHTML = ''; // Esconde o cabo se não existir
        }

        // Verifica e exibe a ação, se existir
        if (operadorSorteado.acao) {
            document.getElementById('acao').innerHTML = `<strong>Ação:</strong> ${operadorSorteado.acao}`;
        } else {
            document.getElementById('acao').innerHTML = ''; // Esconde a ação se não existir
        }

        // Verifica e exibe o "caso não consiga fazer", se existir
        if (operadorSorteado['caso nao consiga fazer']) {
            document.getElementById('caso-nao-consiga').innerHTML = `<strong>Caso não consiga:</strong> ${operadorSorteado['caso nao consiga fazer']}`;
        } else {
            document.getElementById('caso-nao-consiga').innerHTML = ''; // Esconde se não existir
        }

        // Mostra a seção de resultado
        document.getElementById('resultado').classList.remove('hidden');
    } catch (error) {
        console.error('Erro ao buscar operadores:', error);
        alert('Erro ao buscar operadores. Verifique o console para mais detalhes.');
    }
}