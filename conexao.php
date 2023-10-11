<?php
    $server_name = "localhost";
    $data_base= "quintafeira";
    $user_name = "root";
    $password = "";

    //string de conexão
    $conn = mysqli_connect($server_name, $user_name, $password, $data_base);

    //validação de conexão
    if (!$conn) {
        die("Falha na conexão:" .mysqli_connect_error());
    }

    // echo "conexão realizada com sucesso!";
    // mysqli_close ($conn);

?>