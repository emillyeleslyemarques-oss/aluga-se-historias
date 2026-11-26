<!DOCTYPE html>
<html lang="pt-br">
<?php 
    $tituloPagina = "Aluga-se Histórias | Sobre";
    $linksCSS = ['assets/css/style.css'];

    include_once "./includes/cabeca.php";
    include_once "./includes/cabecalho.php";
?>

<section class="titulo-pagina">
    <span class="etiqueta">NOSSA HISTÓRIA</span>
    <h1>Sobre a Aluga-se Histórias</h1>
    <p>Mais que uma livraria, um convite para descobrir novos mundos.</p>
</section>

<section class="secao">
    <img src="assets/img/banner.jpg" alt="Livros em uma livraria">

    <div>
        <h2>Compartilhando histórias</h2>
        <p>
            A Aluga-se Histórias é um projeto que tem como objetivo
            incentivar a leitura por meio do aluguel de livros.
        </p>

        <p>
            A proposta é facilitar o acesso a diferentes obras,
            permitindo que mais pessoas tenham contato com a leitura
            de maneira prática e acessível.
        </p>
    </div>
    <div>
        <h2>Nosso objetivo</h2>
        <p>
            Incentivar o hábito da leitura, ampliar o acesso aos livros
            e promover o compartilhamento de conhecimento.
        </p>
    </div>
</section>

<section class="chamada-final">
    <h2>Uma história pode mudar seu dia.</h2>
    <p>Encontre sua próxima leitura com a gente.</p>
    <a href="catalogo.php" class="botao-principal">Conhecer o catálogo</a>
</section>

<?php include __DIR__ . '/includes/rodape.php'; ?>
</html>