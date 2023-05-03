<?php

include("conecta.php");

$id=$_POST["fid"]; 
$nome=$_POST["nomeform"]; 
$email=$_POST["emailform"];

mysqli_query($conexao,"update aluno set nome='$nome', email='$email' where id='$id'");
header("location: lista.php");

?>