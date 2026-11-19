<?php include __DIR__ . '/includes/cabecalho.php'; ?>

<main>
    <section class="titulo-pagina">
        <span class="etiqueta">SUA PRÓXIMA LEITURA</span>
        <h1>Solicitar aluguel</h1>
        <p>Preencha os dados para solicitar seu livro.</p>
    </section>

    <section class="formulario-container">
        <form class="formulario" action="#" method="post">

            <h2>Seus dados</h2>
            <p class="formulario-descricao">Preencha os campos abaixo para continuar.</p>

            <div class="campos-formulario">
                <div class="campo">
                    <label for="nome">Nome completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>

                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999" required>
                </div>

                <div class="campo">
                    <label for="livro">Livro desejado</label>
                    <select id="livro" name="livro" required>
                        <option value="">Selecione um livro</option>
                        <option>Jardim de Memórias</option>
                        <option>O Último Segredo</option>
                        <option>O Reino Esquecido</option>
                        <option>Cartas para o Amanhã</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="prazo">Prazo de aluguel</label>
                    <select id="prazo" name="prazo" required>
                        <option value="">Selecione o prazo</option>
                        <option>7 dias</option>
                        <option>14 dias</option>
                        <option>30 dias</option>
                    </select>
                </div>
            </div>

            <label class="termos">
                <input type="checkbox" name="termos" required>
                <span>Li e aceito os termos de aluguel.</span>
            </label>

            <button type="submit" class="botao-principal">Enviar solicitação</button>
        </form>
    </section>
</main>

<?php include __DIR__ . '/includes/rodape.php'; ?>