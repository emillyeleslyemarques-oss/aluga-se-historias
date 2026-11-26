<?php 
$linksJS = $linksJS ?? [];
$atributos = $atributo ?? null;
?>

<?php if (!empty($linksJS) && count($linksJS) > 1): ?>
    <?php foreach ($linksJS as $link): ?>
        <?php if (is_array($link) && !array_is_list($link)): ?>
            <?php
                $chaves = array_keys($link);
                $valores = array_values($link); 
                $tamanhoArray = count($link);
                $atributos = "";
                for ($indice=0; $indice < $tamanhoArray; $indice++) { 
                    $atributo = $chaves[$indice] . "=" . $valores[$indice];
                    $atributos = $atributos . "$atributo ";
                }
            ?>
            <script <?= $atributos ?>></script>
            <?php continue ?>
        <?php endif; ?> 
        <script src="<?= $link ?>"></script>
    <?php endforeach; ?>
<?php elseif (!empty($linksJS) && count($linksJS) === 1): ?>
    <script src="<?= $linksJS[0] ?>"></script>
<?php endif ?>
