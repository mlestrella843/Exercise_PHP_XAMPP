<?php
    $txtName="";
    $rdgLenguage="";
    $chkphp="";
    $chkhtml="";
    $chkcss="";

    if($_POST){
        $txtName=( isset( $_POST['txtName']))?$_POST['txtName']:"";
        $rdgLenguage=( isset( $_POST['language']))?$_POST['language']:"";

        $chkphp=( isset( $_POST['chkphp'])=="yes")?"checked":"";
        $chkhtml=( isset( $_POST['chkhtml'])=="yes")?"checked":"";
        $chkcss=( isset( $_POST['chkcss'])=="yes")?"checked":"";

        if($chkphp){
            $var1 =  "I'm learning PHP now";
        }
        if($chkhtml){
            $var2 =  "I'm learning HTML now";
        }
        if($chkcss){
            $var3 =  "I'm learning CSS now";
        }
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
    <strong>And I'm learning those languages: </strong>:
    <br/>
    <?php echo $var1; ?>
    <br/>
    <?php echo $var2; ?>
    <br/>
    <?php echo $var3; ?>
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

        You are learning those languages...<br/>
        <br/> php: <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="yes" id=""><br/>
        <br/> html: <input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="yes" id=""><br/>
        <br/> css: <input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="yes" id=""><br/>

        <input type="submit" value="Send Information">
    </form> 
</body>
</html>