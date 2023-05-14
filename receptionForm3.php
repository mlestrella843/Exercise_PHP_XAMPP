<?php
    $txtName="";
    $rdgLenguage="";

    $chkphp="";
    $chkhtml="";
    $chkcss="";

    $lsAnime="";

    if($_POST){
        $txtName=( isset( $_POST['txtName']))?$_POST['txtName']:"";
        $rdgLenguage=( isset( $_POST['language']))?$_POST['language']:"";

        $chkphp=( isset( $_POST['chkphp'])=="yes")?"checked":"";
        $chkhtml=( isset( $_POST['chkhtml'])=="yes")?"checked":"";
        $chkcss=( isset( $_POST['chkcss'])=="yes")?"checked":"";

        $lsAnime=( isset( $_POST['lsAnime']) )?$_POST['lsAnime']:"";
       // print_r($lsAnime)."<br/>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises PHP</title>
</head>
<body>
    <br/>
    <?php  if($_POST) { ?> 
    <strong>Hello</strong>: <?php echo $txtName; ?>
    <br/>
    <br/>
    <strong>My favorite language is: </strong>: <?php echo $rdgLenguage; ?>
    <br/>
    <br/>
    <strong>And I'm learning those languages: </strong>:
    <br/>
    <?php echo ($chkphp=="checked")?"PHP":"";  ?> 
    <?php echo ($chkhtml=="checked")?"HTML":"";  ?>  
    <?php echo ($chkcss=="checked")?"CSS":"";  ?>  
    <br/> 
    <br/>
    <strong>My favorite Anime is: </strong>: <?php echo $lsAnime; ?>  
    <br/> 
    <br/>
    <?php } ?>
   
    <form action="receptionForm3.php" method="post">
        Name: <br/>
        <input value="<?php echo $txtName; ?>" type="text" name="txtName" id="">
        <br/>
        <br/>
        What do you prefer? <br/>
        <br/> php: <input type="radio" <?php echo ($rdgLenguage=="php")?"checked":"";?> name="language" value="php" id=""><br/>
        <br/> html: <input type="radio" <?php echo ($rdgLenguage=="html")?"checked":"";?> name="language" value="html" id=""><br/>
        <br/> css: <input type="radio" <?php echo ($rdgLenguage=="css")?"checked":"";?> name="language" value="css" id=""><br/>
        <br/>
        <br/>

        You are learning those languages...<br/>
        <br/> php: <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="yes" id=""><br/>
        <br/> html: <input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="yes" id=""><br/>
        <br/> css: <input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="yes" id=""><br/>
        <br/>
        <br/>

        Which Anime do you like? .<br/>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo($lsAnime=="naruto")?"selected":""; ?> >Naruto</option>
            <option value="bleach" <?php echo($lsAnime=="bleach")?"selected":""; ?> >Bleach</option>
            <option value="dragon" <?php echo($lsAnime=="dragon")?"selected":""; ?> >Dragon Ball</option>
        </select>
        <br/>
        <br/>
        <br/>
        <input type="submit" value="Send Information">
    </form> 
</body>
</html>