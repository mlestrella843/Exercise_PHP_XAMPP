<?php 


    $server="localhost"; //127.0.0.1
    $user="root";
    $password="";

    try{

        $connection= new PDO("mysql:host=$server;dbname:album", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connection established";


    }catch(PDOException $error){
        echo "Connection wrong".$error;

    }


?>