<?php $linksJS = $linksJS ?? []; ?>

<?php if (!empty($linksJS) && count($linksJS) > 1): ?>
    <?php foreach ($linksJS as $link): ?>
        <?php if (is_array($link) && !array_is_list($link)): ?>
            <?php $atributos = transformarArrayEmAtributosHTML($link)?>
            <script <?= $atributos ?>></script>
            <?php continue ?>
        <?php endif; ?> 
        <script src="<?= $link ?>"></script>
    <?php endforeach; ?>
<?php elseif (!empty($linksJS) && count($linksJS) === 1): ?>
    <?php if (is_array($linksJS[0]) && !array_is_list($linksJS[0])): ?>
        <?php $atributos = transformarArrayEmAtributosHTML($linksJS[0]);?>
        <script <?= $atributos; ?>></script>
    <?php else: ?>
        <script src="<?= $linksJS[0] ?>"></script>
    <?php endif; ?>
<?php endif ?>
