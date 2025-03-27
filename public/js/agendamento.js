// Aguarde até que o DOM esteja completamente carregado
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-agendamento');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o comportamento padrão de envio do formulário

        const biValue = document.getElementById('bi').value;

        // Verifica se o campo BI foi preenchido
        if (!biValue) {
            alert('Por favor, insira o número do BI.');
            return;
        }

        // Faz a requisição AJAX usando fetch
        fetch('/agendar/registrar', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ bi: biValue })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('mensagem').innerText = 'Agendamento realizado com sucesso!';
            } else {
                document.getElementById('mensagem').innerText = 'Doador não encontrado.';
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('mensagem').innerText = 'Erro ao processar a requisição.';
        });
    });
});
