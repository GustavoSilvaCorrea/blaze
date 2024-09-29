
            function atualizarCarteira(novoSaldo) {
                // Envia o novo saldo ao PHP usando AJAX (fetch)
                fetch('atualizar_carteira.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'novo_saldo=' + encodeURIComponent(novoSaldo)
                    })
                    .then(response => response.text())
                    .then(data => {
                        console.log(data); // Exibe a resposta do PHP no console
                        alert("Carteira atualizada com sucesso no banco de dados!");
                    })
                    .catch(error => {
                        console.error('Erro ao atualizar carteira:', error);
                        alert("Erro ao atualizar carteira no banco de dados.");
                    });
            }