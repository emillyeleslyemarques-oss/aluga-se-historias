<!DOCTYPE html>
<html lang="pt-br">
<?php
    $tituloPagina = "Painel de Administração";
    $linksCSS = [["href" => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css", "integrity" => "sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX", "crossorigin" => "anonymous"], "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css",'/../assets/css/style.css'];

    include_once __DIR__ . "/../includes/cabeca.php"
?>
<body>
    <?php include_once __DIR__ . "/includes/sidebar.php" ?>
    


    <?php
        $linksJS = [["src" => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js", "integrity" => "sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu", "crossorigin" => "anonymous"]];
        include __DIR__ . "/../includes/scripts.php" 
    ?>
</body>
</html>