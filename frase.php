<?php

$frasi = $_GET['frase'];
$censura= $_GET['censura'];
$censurato = str_replace($censura, "***", $frasi);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> La frase senza censura è:
        <?php
        echo  $frasi; 
         ?>
    </h1>

    <span>La lunghezza della stringa è di: <?php 
      echo strlen($frasi);
     ?> caratteri
     </span>
     
     <h2>La frase con censure è: 
        <?php
           echo $censurato;
         ?>
     </h2>
     <span>La lunghezza della stringa è di: <?php 
      echo strlen($censurato);
     ?> caratteri
     </span>
</body>
</html>