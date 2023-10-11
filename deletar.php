<?php
    include_once("conexao.php");

    if(!isset($_GET["id"]))
         header("location:index.php");
    
    if(empty($_GET["id"]))
        header("location : index.php");

    $id = $_GET["id"];

    $sql = "DELE FROM pessoa WHERE pk_pessoa=$id";

    mysqli_query($conn, $sql);

    if(mysqli_error()=="")
        header("location:index.php");
?>