<?php

    $_nomeLivro = $_POST['nome'];
    $_ano = $_POST['ano'];
    $_numPaginas = $_POST['numPaginas'];
    $_genero = $_POST['genero'];

    $dbc = mysqli_connect('localhost','root','','livraria') or die("Nao foi possivel se conectar ao banco!!!");

    $query = ("INSERT INTO livros (nome, ano, num_pagina, genero)
                VALUES ('$_nomeLivro','$_ano','$_numPaginas','$_genero')") 
                or die("Nao foi possivel executar a query!!!");

    $result = mysqli_query($dbc, $query) or die("Nao foi possivel executar a query.");


    mysqli_close($dbc);

?>