<?php
$titilo = 'Cinebox - Inicio';
include './includes/header.php'  ?>

<section id="banner">
    <main class="carrossel-conteiner">
        <div class="carrosel">
            <img src="./assets/IMG/banner/banner_00.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_01.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_02.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_03.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_04.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_05.jpg" alt="banner">
            <img src="./assets/IMG/banner/banner_06.jpg" alt="banner">
        </div>

        <button class="anterior" onclick="javascript:voltarSlide()">
            <i class="bi bi-arrow-left"></i>
        </button>

        <button class="proximo" onclick="javascript:proximoSlide()">
            <i class="bi bi-arrow-right"></i>
        </button>
    </main>
</section>
<section id="filmes-recomendados">
    <h2 class="titulo">filmes</h2>
    <main class="container">
        <div class="row">


            <?php
            for ($i = 0; $i < 8; $i++) {
            ?>
            <div class="col col-3">
                <figure>
                    <img src="./assets/IMG/poster/avatar-o-caminho-da-agua.png" alt="posto avatar-o-caminho-da-agua"
                        class="foto-produto">
                    <figcaption>
                        <h4>Avatar o Caminho da Àgua</h4>
                        <span class="preco">R$ 15,90</span>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt quaerat nihil,
                            magni eos ipsam est laboriosam ducimus rerum earum? Tempora ipsum rem pariatur eos
                            quidem voluptatem,
                            ducimus officia cum ea.
                        </p>
                    </figcaption>
                    <span class="genero">
                        <label style="background-color: #070373; color: white;">Fantasia</label>
                        <label style="background-color: #580259; color: white;">Drama</label>
                        <label style="background-color: #D966Ba; color: white;">Musica</label>
                    </span>
                </figure>
            </div>
           <?php } ?> }
        </div>
    </main>
</section>
<?php include './includes/footer.php' ?>

</html>