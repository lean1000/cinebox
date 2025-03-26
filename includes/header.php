<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($titulo)) {
            echo $titilo;
        } else {
            echo 'Cinebox';
        }
        ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/CSS/style.css">
    <link rel="stylesheet" href="./assets/CSS/carrossel.css">
    <link rel="stylesheet" href="./assets/CSS/filmes.css">
    <link rel="stylesheet" href="./assets/CSS/usuario.css">
    <link rel="stylesheet" href="./assets/CSS/login.css">
    <link rel="stylesheet" href="./assets/CSS/detalhes.css">

</head>

<body>
    <header>
        <nav>
            <a href="#" class="logo">

                <h1>Cine Box</h1>

            </a>

            <ul class="menu-perfil">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./listarfilmes.php">Filmes</a></li>
                <li><a href="./sobre.php">Sobre</a></li>
            </ul>

            <ul class="menu-perfil">
                <li><a href="#"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="#"><i class="bi bi-cart"></i></a></li>
                <li><a href="./usuario-login.php"><i class="bi bi-person-circle"></i></i></a></li>
            </ul>

            <button class="menu-oculto" onclick="javascript:abrirNav()">
                <i class="bi bi-list"></i>
            </button>

            <div id="offcanvas" class="menu-oculto">

                <button class="fechar" onclick="javascript:fecharnav()">
                    <i class="bi bi-x"></i>
                </button>

                <a href="index.html">Inicio</a>
                <a href="#">Filmes</a>
                <a href="#">Sobre</a>

            </div>
        </nav>
    </header>