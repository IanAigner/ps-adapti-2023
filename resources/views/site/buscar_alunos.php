<?php
    if (isset($_GET['nome_pesquisa'])) {

    $nome_pesquisa = htmlspecialchars($_GET['nome_pesquisa']);

    $servername = "127.0.0.1";
    $username = "admin@material.com";
    $password = "sua_senha";
    $dbname = "ps-adapti";


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM alunos WHERE nome LIKE '%$nome_pesquisa%'";


    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
    }
    } else {
    echo "Nenhum resultado encontrado para '$nome_pesquisa'.";
    }

    $conn->close();
    }
?>
