<?php 

    if($_POST){
        $name = $_POST['txtName'];
        $lastname = $_POST['txtLastname'];

        echo "Hello ".$name." ".$lastname;
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

    <form action="ejercicio5.php" method="post">
        Name:
        <input type="text" name="txtName" id="">
        <br/>
        LastName:
        <input type="text" name="txtLastname" id="">
        <br/>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>