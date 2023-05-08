<?php 

    $server="localhost"; //127.0.0.1
    $user="root";
    $password="";

    try{

        $connection= new PDO("mysql:host=$server;dbname=album", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //Insert data into table fotos.
        $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'playing with programming', 'foto.jpg');";

        //Executes tha SQL instruction
        $connection->exec($sql);

        echo "Connection established";

    }catch(PDOException $error){
        echo "Connection wrong".$error;
    }

?>