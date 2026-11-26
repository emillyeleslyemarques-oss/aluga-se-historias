<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    $linksCSS = $linksCSS ?? [];
    $linkIcone = $linkIcone ?? null;

    function transformarArrayEmAtributosHTML(array $array) : string {
        $chaves = array_keys($array);
        $valores = array_values($array); 
        $tamanhoArray = count($array);
        $atributosHTML = "";

        for ($indice=0; $indice < $tamanhoArray; $indice++) { 
            $atributoHTML = $chaves[$indice] . "=" . $valores[$indice];
            $atributosHTML = $atributosHTML . "$atributoHTML ";
        }
        return $atributosHTML;
    }
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
                <?php $atributos = transformarArrayEmAtributosHTML($link)?>
                <link rel="stylesheet" <?= $atributos ?>>
                <?php continue ?>
            <?php endif; ?> 
            <link rel="stylesheet" href="<?= $link ?>">
        <?php endforeach; ?>
    <?php elseif (!empty($linksCSS) && count($linksCSS) === 1): ?>
        <?php if (is_array($linksCSS[0]) && !array_is_list($linksCSS[0])): ?>
                <?php $atributos = transformarArrayEmAtributosHTML($linksCSS[0])?>
                <link rel="stylesheet" <?= $atributos ?>>
        <?php else: ?>
            <link rel="stylesheet" href="<?= $linksCSS[0] ?>">
        <?php endif; ?>
    <?php endif ?>
</head>