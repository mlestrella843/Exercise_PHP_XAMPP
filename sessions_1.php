<?php 

session_start();

if( isset($_SESSION["user"]) ) {

    echo "User: ".$_SESSION["user"].", Status: ".$_SESSION["status"];

} else {

   echo "There are not sessions";

}


?>