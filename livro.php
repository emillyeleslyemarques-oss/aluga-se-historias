<?php include __DIR__ . '/includes/cabecalho.php'; ?>

<main class="secao">
    <a href="catalogo.php" class="voltar">← Voltar para o catálogo</a>

    <section class="detalhes-livro">
        <div class="capa-detalhe">
            <img src="img/livro1.jpg" alt="Capa do livro Jardim de Memórias">
        </div>

        <div class="informacoes-livro">
            <span class="genero-romance">Romance</span>
            <h1>Jardim de Memórias</h1>
            <p class="autor">Autora: Ana Martins</p>

            <p>Uma história emocionante sobre recomeços, descobertas e a importância das lembranças.</p>

            <div class="informacoes-extra">
                <p><strong>Gênero:</strong> Romance</p>
                <p><strong>Páginas:</strong> 320</p>
                <p><strong>Disponibilidade:</strong> Disponível para aluguel</p>
                <p><strong>Prazo:</strong> 14 dias</p>
            </div>

            <a href="aluguel.php" class="botao-principal">Solicitar aluguel</a>
            <a href="catalogo.php" class="botao-secundario">Voltar ao catálogo</a>
        </div>
    </section>

    <section class="descricao-livro">
        <h2>Sobre o livro</h2>
        <p>
            Uma narrativa sobre novas oportunidades, sentimentos e
            caminhos inesperados. Uma leitura para quem gosta de
            histórias que despertam emoções.
        </p>
    </section>
</main>

<?php include __DIR__ . '/includes/rodape.php'; ?>