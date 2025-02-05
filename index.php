<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinebox</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <link rel="stylesheet" href="./assets/CSS/carrossel.css">
    <link rel="stylesheet" href="./assets/CSS/filmes.css">
</head>

<?php include './includes/header.php'  ?>

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

<?php include './includes/listarfilmes.php' ?>

<?php include './includes/footer.php' ?>

</html>