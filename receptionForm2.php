<?php

    $txtName="";
    $rdgLenguage="";

    if($_POST){
        $txtName=( isset( $_POST['txtName']))?$_POST['txtName']:"";
        $rdgLenguage=( isset( $_POST['language']))?$_POST['language']:"";
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
    <?php  if($_POST) { ?> 
    <strong>Hello</strong>: <?php echo $txtName; ?>
    <br/>
    <strong>Your favorite language is: </strong>: <?php echo $rdgLenguage; ?>
    <br/>
    <?php } ?>

    <form action="receptionForm2.php" method="post">
        Name: <br/>
        <input value="<?php echo $txtName; ?>" type="text" name="txtName" id="">
        <br/>
        What do you prefer? <br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguage=="php")?"checked":"";?> name="language" value="php" id=""><br/>
        <br/> html: <input type="radio" <?php echo ($rdgLenguage=="html")?"checked":"";?> name="language" value="html" id=""><br/>
        <br/> css: <input type="radio" <?php echo ($rdgLenguage=="css")?"checked":"";?> name="language" value="css" id=""><br/>

        <input type="submit" value="Send Information">
    </form> 
</body>
</html>