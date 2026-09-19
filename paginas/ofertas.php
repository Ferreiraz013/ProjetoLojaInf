<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas da Semana - RS Home Informática</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="aplicacao">

        <?php
        $paginaAtual = 'ofertas';
        $estaNasPaginas = true;
        include '../includes/menu.php';
        ?>

        <main class="conteudo">

            <header class="topo">

                <div>
                    <span class="mini-titulo">
                        TS INFORMÁTICA
                    </span>

                    <h1>Ofertas da Semana</h1>
                </div>

                <div class="perfil">
                    <div class="avatar">RS</div>

                    <div>
                        <strong>Cliente</strong>
                        <small>Promoções especiais</small>
                    </div>
                </div>

            </header>

            <div class="area-central">

                <section class="produtos">

                    <div class="cabecalho-secao">
                        <div>
                            <span class="mini-titulo">
                                PROMOÇÕES
                            </span>
                            <h2>Produtos em oferta</h2>
                        </div>

                        <span class="contador">
                            6 produtos
                        </span>
                    </div>

                    <div class="grade-produtos">

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1591488320449-011701bb6704?auto=format&fit=crop&w=700&q=80" alt="Placa de vídeo RTX">
                                <span class="tag-produto">-18%</span>
                            </div>

                            <div class="produto-info">
                                <h3>Placa de Vídeo RTX</h3>
                                <p>Desempenho premium para jogos e edição de vídeo.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 2.049,90</strong>
                                    </div>

                                    <a href="compras.php?produto=placa-de-video-rtx" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68?auto=format&fit=crop&w=700&q=80" alt="Notebook Pro">
                                <span class="tag-produto">-12%</span>
                            </div>

                            <div class="produto-info">
                                <h3>Notebook Pro</h3>
                                <p>Leve, rápido e ideal para estudo e trabalho.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 3.099,90</strong>
                                    </div>

                                    <a href="compras.php?produto=notebook-pro" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?auto=format&fit=crop&w=700&q=80" alt="Memória RAM DDR4">
                                <span class="tag-produto">-20%</span>
                            </div>

                            <div class="produto-info">
                                <h3>Memória RAM DDR4</h3>
                                <p>Mais estabilidade e velocidade para multitarefa.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 289,90</strong>
                                    </div>

                                    <a href="compras.php?produto=memoria-ram-ddr4" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=80" alt="Processador Intel i5">
                                <span class="tag-produto">-15%</span>
                            </div>

                            <div class="produto-info">
                                <h3>Processador Intel i5</h3>
                                <p>Potência para desempenho geral e produtividade.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 1.199,00</strong>
                                    </div>

                                    <a href="compras.php?produto=processador-intel-i5" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1587202372775-e229f172b9d7?auto=format&fit=crop&w=700&q=80" alt="SSD 1TB">
                                <span class="tag-produto">-25%</span>
                            </div>

                            <div class="produto-info">
                                <h3>SSD 1TB</h3>
                                <p>Mais velocidade de inicialização e carregamento.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 419,90</strong>
                                    </div>

                                    <a href="compras.php?produto=ssd-1tb" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                        <article class="produto-card">
                            <div class="produto-imagem">
                                <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?auto=format&fit=crop&w=700&q=80" alt="Monitor gamer 27 polegadas">
                                <span class="tag-produto">-30%</span>
                            </div>

                            <div class="produto-info">
                                <h3>Monitor Gamer 27"</h3>
                                <p>Imagem nítida com melhor imersão para jogos.</p>

                                <div class="produto-final">
                                    <div>
                                        <small>Promoção</small>
                                        <strong>R$ 1.399,00</strong>
                                    </div>

                                    <a href="compras.php?produto=monitor-gamer-27" class="botao-comprar">Comprar</a>
                                </div>
                            </div>
                        </article>

                    </div>

                </section>

            </div>

            <footer class="rodape">
                <span>© 2026 TS Informática</span>
                <span>Projeto educacional</span>
            </footer>

        </main>

    </div>

</body>

</html>
