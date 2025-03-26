<?php
require './classes/Filmes.php';
include './includes/header.php';
$titilo = 'Cinebox - Inicio';
include './includes/banner.php';

$filmes = new Filmes();
$dadosFilmes = $filmes -> exibirlistaFilmes(8);

include './includes/filmes_lista.php';
include './includes/footer.php';
