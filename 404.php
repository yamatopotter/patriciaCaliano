<?php get_header(); ?>
<main class="page-404">
    <h1>Oops...</h1>
    <h2>A página solicitada não pode ser encontrada</h2>

    <p>Desculpe, mas a página que você procura não existe ou pode ter sido removida.</p>

    <a href="<?= get_home_url() ?>" class="btn btn-primary p-3 mt-3">Voltar para a página inicial</a>
</main>
<?php get_footer(); ?>