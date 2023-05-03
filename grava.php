<?php

include("conecta.php");

$nome=$_GET["nomeform"]; 
$email=$_GET["emailform"];

mysqli_query($conexao, "insert into aluno (nome, email) values ('$nome', '$email')");

header("location: lista.php");

?>