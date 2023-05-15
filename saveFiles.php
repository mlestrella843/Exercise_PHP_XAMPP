
<?php 

    if($_POST){

        print_r($_POST);

        print_r($_FILES['file']['name']); //Aqui se saca el valor en especifico del arreglo que me interesa, el cual es el nombre del archivo.

        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);

    }

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
    <form action="saveFiles.php" enctype="multipart/form-data" method="post">
            Imgage:
            <input type="file" name="file" id="">
            <br/>

            <input type="submit" name="send" value="Send Info">

    </form>
    
</body>
</html>