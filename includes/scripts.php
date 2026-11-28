<?php $linksJS = $linksJS ?? []; ?>

<?php foreach ($linksJS as $link): ?>
    <?php if (is_array($link) && !array_is_list($link)): ?>
        <?php $atributos = transformarArrayEmAtributosHTML($link)?>
        <script <?= $atributos ?>></script>
    <?php else: ?>
        <script src="<?= htmlspecialchars($link, ENT_QUOTES, "UTF-8") ?>"></script>    
    <?php endif; ?>
<?php endforeach; ?>