<?php 

    // Si no se especifica el tipo de indice por default sera numerico
    $frutas = array("Fresa", "Manzana", "Uvas");

    //Se puede especificar un tipo de indice no numerico como este abajo

    $frutas2 = array("f"=>"fresas", "m"=>"manzana", "u"=>"uvas");

    print_r($frutas);

    echo "<br/>".$frutas[0]."<br/>";

    print_r($frutas2);

    //A esto se le llama indice asociativo, porque el indice puedo ponerle cualquier elemto que me permita controlar y asociarlo.
    echo "<br/>".$frutas2["m"]."<br/>";

    //Recorriendo el arreglo con for con indice numerico

    for($indice=0; $indice<3; $indice++){
        echo $frutas[$indice]."<br/>";
    }

    //Recorriendo el arreglo con for con indice no numerico

    echo "Array with indice not numeric"."<br/>";

    foreach($frutas as $indice=>$valor){
        //Aqui se coloca el nombre del arreglo mas el indice, se imprimira el valor.
      //  echo $frutas[$indice]."<br/>";

        //tambien se puede poner directamente el valor de cada indice despues de ser recorrido por el foreach
        echo $valor."<br/>";
    }

?>