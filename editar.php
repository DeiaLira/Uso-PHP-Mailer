<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <title> Alterar Dados </title>
  <meta charset="utf-8">
</head>
<body>

<?php

include("conecta.php");
$recid=$_GET["editaid"];
$seleciona=mysqli_query($conexao, "select * from aluno where id=$recid");
$campo=mysqli_fetch_array($seleciona);

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="../imagem/1.png" width="200" height="70" alt="" loading="lazy"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="../index.html"> Início <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="../cadastrar.html">Cadastrar Aluno</a>
      <a class="nav-item nav-link" href="lista.php">Listar Alunos</a>
      <a class="nav-item nav-link" href="enviaremail.php">Enviar Email</a>
    </div>
  </div>
</nav>

<form class="tam" method="post" action="gravaedita.php">
  <div class="form-group">
    <input type="hidden" name="fid" value="<?=$campo['id']?>">
    <label for="exampleInputPassword1">Nome do Aluno:</label>
    <input class="form-control" type="text" placeholder="Nome Completo" name="nomeform" required class="input" value="<?=$campo['nome']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email do Aluno:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailform" required class="input" value="<?=$campo['email']?>">
    <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu email com mais ninguém.</small>
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>