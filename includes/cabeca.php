<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    $linksCSS = $linksCSS ?? [];
    $linkIcone = $linkIcone ?? null;
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
            <link rel="stylesheet" href="<?= $link ?>">
        <?php endforeach; ?>
    <?php elseif (!empty($linksCSS) && count($linksCSS) === 1): ?>
        <link rel="stylesheet" href="<?= $linksCSS[0] ?>">
    <?php endif ?>
</head>