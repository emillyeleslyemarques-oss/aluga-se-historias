<?php 
    $tituloPagina = $tituloPagina ?? "Aluga-se Histórias";
    $linksCSS = $linksCSS ?? [];
    $linkIcone = $linkIcone ?? null;

    function transformarArrayEmAtributosHTML(array $array) : string {
        $chaves = array_keys($array);
        $valores = array_values($array); 
        $tamanhoArray = count($array);
        $atributos = "";

        for($indice=0; $indice < $tamanhoArray; $indice++) { 
            $atributos .= $chaves[$indice] . '="' . htmlspecialchars($valores[$indice], ENT_QUOTES, "UTF-8") .'" ';
        }
        
        return trim($atributos);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tituloPagina ?></title>
    
    <?php if(isset($linkIcone)): ?>  
        <link rel="icon" type="image/svg+xml" href="assets/img/icone.svg">
    <?php endif; ?>

    <?php foreach($linksCSS as $link): ?>
        <?php if(is_array($link) && !array_is_list($link)): ?>
            <?php $atributos = transformarArrayEmAtributosHTML($link); ?>
            <link rel="stylesheet" <?= $atributos ?>>
        <?php else: ?>
            <link rel="stylesheet" href="<?= htmlspecialchars($link, ENT_QUOTES,"UTF-8") ?>">
        <?php endif; ?>
    <?php endforeach; ?>
</head>
