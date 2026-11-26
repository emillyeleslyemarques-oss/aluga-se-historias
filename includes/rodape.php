<?php $linksJS = $linksJS ?? []; ?>

</main>

<footer class="rodape">
    <div class="rodape-conteudo">
        <a href="index.php" class="logo logo-rodape">📖 Aluga-se Histórias.</a>
        <p>Mais que livros, novas histórias.</p>
    </div>
    <p class="copyright">© 2026 Aluga-se Histórias. Projeto Integrador.</p>
</footer>

<?php if (!empty($linksJS) && count($linksJS) > 1): ?>
    <?php foreach ($linksJS as $link): ?>
        <script src="<?= $linksJS[0] ?>"></script>
    <?php endforeach; ?>
<?php elseif (!empty($linksJS) && count($linksJS) === 1): ?>
    <script src="<?= $linksJS[0] ?>"></script>
<?php endif ?>

</body>