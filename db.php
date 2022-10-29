<?php
//configuracion necesaria para aceder a la base de datos.
function conn(){
$hostname ="localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "ficha";

  //Gernerando la coneccion con el servidor 
  $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
  return $conectar;
}