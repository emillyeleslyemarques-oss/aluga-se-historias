<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    $linksCSS = $linksCSS ?? [];
    $linkIcone = $linkIcone ?? null;
    $atributos = $atributo ?? null;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?></title>
    
    <?php if (isset($linkIcone)): ?>  
        <link rel="icon" type="image/svg+xml" href="assets/img/icone.svg">
    <?php endif; ?>

    <?php if (!empty($linksCSS) && count($linksCSS) > 1): ?>
        <?php foreach ($linksCSS as $link): ?>
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
                <link rel="stylesheet" <?= $atributos ?>>
                <?php continue ?>
            <?php endif; ?> 
            <link rel="stylesheet" href="<?= $link ?>">
        <?php endforeach; ?>
    <?php elseif (!empty($linksCSS) && count($linksCSS) === 1): ?>
        <link rel="stylesheet" href="<?= $linksCSS[0] ?>">
    <?php endif ?>
</head>