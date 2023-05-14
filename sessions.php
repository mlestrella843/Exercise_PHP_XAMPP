<?php 

session_start();

$_SESSION["user"]="mestrella";
$_SESSION["status"]="logued";

echo "Session started"."<br/>";

echo "User: ".$_SESSION["user"].", Status: ".$_SESSION["status"];

?>