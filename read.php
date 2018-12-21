<?php

$_campoSelecionado = $_POST['select'];
$_palavraChave = $_POST['palavraChave'];


$dbc = mysqli_connect('localhost', 'root', '', 'livraria') or die('Nao foi possível se conectar ao banco.');

$query = ("SELECT id, nome, ano, num_pagina, genero FROM livros WHERE $_campoSelecionado LIKE '%$_palavraChave%'");

$result = mysqli_query($dbc, $query) or die("Não foi possivel efetuar a operação!!!");


if ($_campoSelecionado == 'nome') {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $ano = $row['ano'];
        $numPagina = $row['num_pagina'];
        $genero = $row['genero'];
        echo $id . ' - ' . $nome . ' - ' . $ano . ' - ' . $numPagina . ' - ' . $genero . '<br />';
    }
    mysqli_close($dbc);

} elseif ($_campoSelecionado == 'ano') {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $ano = $row['ano'];
        $numPagina = $row['num_pagina'];
        $genero = $row['genero'];
        echo $id . ' - ' . $nome . ' - ' . $ano . ' - ' . $numPagina . ' - ' . $genero . '<br />';
    }
    mysqli_close($dbc);
} elseif ($_campoSelecionado == 'num_pagina') {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $ano = $row['ano'];
        $numPagina = $row['num_pagina'];
        $genero = $row['genero'];
        echo $id . ' - ' . $nome . ' - ' . $ano . ' - ' . $numPagina . ' - ' . $genero . '<br />';
    }
    mysqli_close($dbc);
} elseif ($_campoSelecionado == 'genero') {
    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nome = $row['nome'];
        $ano = $row['ano'];
        $numPagina = $row['num_pagina'];
        $genero = $row['genero'];
        echo $id . ' - ' . $nome . ' - ' . $ano . ' - ' . $numPagina . ' - ' . $genero . '<br />';
    }
    mysqli_close($dbc);

}
echo '<a href="read.html">Retornar</a>'

?>