<?php
    include("conecta.php");
    include("index.php");

    $nome=$_GET["linkform"];
    $seleciona=mysqli_query($conexao, "select * from aluno");
      while ($campo= mysqli_fetch_array($seleciona)){


     $string = $campo["email"];
     $newstring=explode("@",$string);

  
     if ($newstring[1] == "gmail.com") {
     	envia_gmail($string, $nome); 
       //header("location:index.php"); 
     } elseif ($newstring[1] == "hotmail.com") {
     	envia_hotmail($string, $nome);
      // header("location:indexhotmail.php");
     }elseif ($newstring[1] == "outlook.com") {
     	envia_outlook($string, $nome);
     }else{
        echo "Email não localizado!";
     }

   }

   ?>

