<?php

    // con este nombre de file.txt se creara el archivo
    $nameFile = "file.txt";

    // el archivo que se vaya a crear tendra este contenido
    $contentFile="Hello I'm Maria and I will be a great programmer";

    //esta variable tendra el valor o settings para crear el archivo.
    $fileToCreate = fopen($nameFile, "w");

    //Aqui se escribe el archivo con el contenido.
    fwrite($fileToCreate, $contentFile);

    //aqui se cierra
    fclose($fileToCreate);



?>