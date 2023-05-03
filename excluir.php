<?php

include("conecta.php");
$recid=$_GET["idexc"];
mysqli_query($conexao, "delete from aluno where id=$recid");
header("location:lista.php");

?>