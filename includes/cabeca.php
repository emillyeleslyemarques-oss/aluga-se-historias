<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    define("LINKS_CSS", []);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?></title>

    <?php if (!empty(LINKS_CSS) && count(LINKS_CSS) > 1): ?>
        <?php foreach (LINKS_CSS as $link): ?>
            <link rel="stylesheet" href="<?= $link ?>">
        <?php endforeach; ?>
    <?php elseif (!empty(LINKS_CSS) && count(LINKS_CSS) === 1): ?>
        <link rel="stylesheet" href="<?= LINKS_CSS[0] ?>">
    <?php endif ?>
</head>