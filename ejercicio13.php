<?php

    if($_POST){
        $valor=$_POST['btnValor'];
            switch($valor){

                case 1: 
                    echo "The user press button 1";
                break;

                case 2: 
                    echo "The user press button 2";
                break;

                case 3: 
                    echo "The user press button 3";
                break;
            }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
       <input type="submit" name="btnValor" value="1">
       <br/>
       <input type="submit" name="btnValor" value="2">
       <br/>
       <input type="submit" name="btnValor" value="3">
    </form>   
</body>
</html>