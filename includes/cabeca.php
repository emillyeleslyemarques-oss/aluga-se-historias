<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    $linksCSS = $linksCSS ?? [];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?></title>
    <link rel="icon" type="image/svg+xml" href="assets/img/icone.svg">

    <?php if (!empty($linksCSS) && count($linksCSS) > 1): ?>
        <?php foreach ($linksCSS as $link): ?>
            <link rel="stylesheet" href="<?= $link ?>">
        <?php endforeach; ?>
    <?php elseif (!empty($linksCSS) && count($linksCSS) === 1): ?>
        <link rel="stylesheet" href="<?= $linksCSS[0] ?>">
    <?php endif ?>
</head>