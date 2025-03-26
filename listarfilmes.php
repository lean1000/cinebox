<?php

$titulo = "";
include './includes/header.php';
include './includes/filmes_lista.php';

$filme = new Filmes();
$dadosFilmes = $filme->exibirlistaFilmes();

include './includes/filme_lista.php';
include './includes/footer.php';