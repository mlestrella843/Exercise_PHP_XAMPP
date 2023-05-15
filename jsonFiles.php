<?php

    $jsonContent='[
        { "name":"Maria", "lastname": "Estrella"},
        { "name":"josefina", "lastname": "Alvarez"}
    ]';

    $result=json_decode($jsonContent);

    foreach($result as $person){
        echo ($person->name)."  ".($person->lastname)."<br/>";
    }

?>