<?php
    include_once("conexao.php"); //inclui o arquivo de conexão com o banco de dados

    //TRATAMENTOS DE ERROS
    if(!isset($_GET["id"])) //verifica se existe a chave "id" no array $_GET
        header("location:index.php"); //caso não existe, redireciona para index.php

    if($_GET ["id"]=="") //verifica se o "id" é vazio
        header ("location: index.php"); //caso esteja vazio, redireciona para index.php

//FIM - TRATAMENTO DE ERROS

$id = $_GET["id"]; //chave primaria do registro procurado(pessoa)

$sql = "SELECT pk_pessoa, nome, prof, nascimento,sexo, peso, altura FROM pessoa WHERE pk_pessoa=".$id;
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($query);

echo "<pre>";
var_dump($row);
echo "</pre>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>CRUD - Update</title>
</head>
<body>
    <div class="container">
        <h1>Veja os dados abaixo e, altere o que desejar</h1>

        <form action="alterar.php" method="post">

        <form>
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" aria-describedby="nome" name= "nome" value="<?php echo $row["nome"]; ?>">
    <input type="hidden" name="id" value="<?php echo $row["pk_pessoa"]; ?>>
  </div>
  <div class="mb-3">
    <label for="prof" class="form-label">Profissão</label>
    <input type="text" class="form-control" id="prof" name="prof" value="<?php echo $row["prof"]; ?>">
  </div>
  <div class="mb-3">
    <label for="nascimento" class="form-label">Nascimento</label>
    <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $row["nascimento"]; ?>">
  </div>
  <div class="mb-3">
    <label for="sexo" class="form-label">Sexo</label>
    <select name="sexo" id="sexo" class="form-select">
        <option value="M" <?php echo $row["sexo"]=="M" ? "selected" : ""; ?>>Masculino</option>
        <option value="F" <?php echo $row["sexo"]=="F" ? "selected" : ""; ?>>Feminino</option>
        <option value="T" <?php echo $row["sexo"]=="T" ? "selected" : ""; ?>>Transgênero</option>
        <option value="NB" <?php echo $row["sexo"]=="NB" ? "selected" : ""; ?>>Não-binário</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="peso" class="form-label">Peso</label>
    <input type="text" class="form-control" id="peso" name="peso" value="<?php echo $row["peso"]; ?>">
  </div>
  <div class="mb-3">
    <label for="altura" class="form-label">Altura</label>
    <input type="text" class="form-control" id="altura" name="altura" value="<?php echo $row["altura"]; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>





        </form>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>