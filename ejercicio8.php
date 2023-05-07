<?php 

    if($_POST){ 

    $value1=$_POST['value1'];
    $value2=$_POST['value2'];

    $sum=$value1+$value2;
    $substract=$value1-$value2;
    $multiply=$value1*$value2;
    $divide=$value1/$value2;

    echo "The results are: ";
    echo "<br/>"."The Sum is ".$sum;
    echo "<br/>"."The substract is ".$substract;
    echo "<br/>"."The multiply is ".$multiply;
    echo "<br/>"."The division is ".$divide;

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
    <form action="ejercicio8.php" method="post">
        Value1:
        <input type="text" name="value1" id="">
        <br/>
        Value2:
        <input type="text" name="value2" id="">
        <br/>
        <input type="submit" value="Send">
    </form>

</body>
</html>