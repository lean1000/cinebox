<section id="filmes-recomendados">
    <h2 class="titulo">filmes</h2>
    <main class="container">

        <div class="row">

            <?php foreach ($dadosFilmes as $value){ 
                include './includes/filmes_card.php';}
            ?>
            
        </div>

    </main>
</section>