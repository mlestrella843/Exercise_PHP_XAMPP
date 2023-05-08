<?php 

    $server="localhost"; //127.0.0.1
    $user="root";
    $password="";

    try{

        $connection= new PDO("mysql:host=$server;dbname=album", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //Leer data into table fotos.
        $sql="SELECT * FROM `fotos`";

        $sentencia=$connection->prepare($sql);
        $sentencia->execute();
        //Resultado viene en forma de arreglo
        $resultado=$sentencia->fetchAll();

        //Aqui imprimimos el resultado completo (en forma de arreglo de objetos) de la base de datos
       // print_r($resultado);

        //recorremos el arreglo $resultado para poder imprimirlo, o sacar alguna informacion en especifico, en este caso la propiedad nombre de la tabla foto
        foreach($resultado as $elemento) {
            echo $elemento['nombre']."<br/>";
        }
        echo "Connection established";

    }catch(PDOException $error){
        echo "Connection wrong".$error;
    }









?>