<?php 

    //se crea variable para guardar la longitud  del archivo txt.
    $file="content.txt";

    // se crea variable que guarda en contenido del archivo cuando es abierto.
    $fileOpen=fopen($file, "r");

    // la variable content ya tendra el contenido del archivo luego de ser leido.
    $content=fread($fileOpen, filesize($file));

    //Aqui se imprime el contenido dentro de este archivo php
    echo $content;

?>