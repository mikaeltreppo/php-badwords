<?php

$frasi = $_GET['frase'];
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
    <h1>
        <?php 
        echo  $frasi; 
         ?>
    </h1>
    
    <span>La lunghezza della stringa è di: <?php 
      echo strlen($frasi);
     ?> caratteri
     </span>
</body>
</html>