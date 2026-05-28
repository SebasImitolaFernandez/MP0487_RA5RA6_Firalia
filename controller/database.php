<?php
//https://phppot.com/php/php-upload-image-to-database/
//https://www.youtube.com/watch?v=5L9UhOnuos0&t=801s
//Credenciales que usaremos para entrar en la bbdd

$host ="i42m2j.h.filess.io";
$dbname = "mp0487_firalia_showndead";
$username = "mp0487_firalia_showndead"; //IMPORTANTE CAMBIAR , NO QUEREMOS ENTRAR CON ROOT
$password = "861e73c3f684728267e556252a9f8881ce48db21";

//Objeto mysqli

$mysqli = new mysqli($host, $username, $password, $dbname);

//Si error, devolver mensaje

if ($mysqli->connect_errno){

    die("Connection error: " . $mysqli->connect_error);

}

return $mysqli;
?>