<?php
    $txtName="";
    if($_POST){
        $txtName=( isset( $_POST['txtName']))?$_POST['txtName']:"";
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
    <?php } ?>

    <form action="receptionForm.php" method="post">
        <input value="<?php echo $txtName; ?>" type="text" name="txtName" id="">

        <input type="submit" value="Send Information">
    </form> 
</body>
</html>