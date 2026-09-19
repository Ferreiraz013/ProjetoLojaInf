<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento via Pix</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="aplicacao">
        <main class="conteudo">

            <header class="topo">
                <div>
                    <span class="mini-titulo">PAGAMENTO</span>
                    <h1>Pix</h1>
                </div>
            </header>

            <div class="area-central">
                <div class="pix-pagina">

                    <div class="pix-info">
                        <span class="resumo-label">PRODUTO</span>

                        <h3>
                            <?php echo htmlspecialchars($nomeProduto ?? 'Produto não informado', ENT_QUOTES, 'UTF-8'); ?>
                        </h3>

                        <p>Pagamento via Pix.</p>

                        <strong class="preco-grande">
                            R$
                            <?php echo number_format((float)($valorProduto ?? 0), 2, ',', '.'); ?>
                        </strong>

                        <div class="pix-aviso">
                            <span>✓</span>

                            <div>
                                <strong>Pagamento instantâneo</strong>
                                <small>Escaneie o QR Code para pagar.</small>
                            </div>
                        </div>
                    </div>

                    <div class="qr-area">

                        <div class="qr-box">
                            <img
                                src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&data=<?php echo urlencode('TS-INFORMATICA-' . ($produtoEscolhido ?? 'produto')); ?>"
                                alt="QR Code Pix">
                        </div>

                        <form action="resultado.php" method="post">

                            <input
                                type="hidden"
                                name="produto"
                                value="<?php echo htmlspecialchars($nomeProduto ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                            <input
                                type="hidden"
                                name="valor"
                                value="<?php echo htmlspecialchars($valorProduto ?? '0', ENT_QUOTES, 'UTF-8'); ?>">

                            <input
                                type="hidden"
                                name="pagamento"
                                value="Pix">

                            <button class="botao-principal" type="submit">
                                Já realizei o pagamento
                            </button>

                        </form>

                    </div>

                </div>
            </div>

            <footer class="rodape">
                <span>© 2026 TS Informática</span>
                <span>Projeto educacional</span>
            </footer>

        </main>
    </div>
</body>

</html>