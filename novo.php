<?php
    include_once("conexao.php");

    if(!isset($_POST ["nome"]))
        header("location:index.php");


    $nome = $_POST["nome"];
    $prof = $_POST["prof"];
    $nascimento = $_POST["nascimento"];
    $sexo = $_POST["sexo"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $sql = "INSERT INTO pessoa(nome, prof, nascimento, sexo, peso, altura) VALUES('$nome', '$prof', '$nascimento', '$sexo', '$peso', '$altura')";
    mysqli_query($conn, $sql);

    if(mysqli_error()=="")
        header("location:index.php");

?>