<?php
include_once('db.php');
$Buscar=$_POST['buscar'];

$conectar=conn(); //Ejecutar las condiciones de la base de datos
            //consultar si existe registro
$sql="SELECT * from medica where Apellidos ='".$Buscar."'";
 //$result = mysqli_query($conectar,$sql);
 $result = $conectar->query($sql);

               // echo "Pasa por aqui";
 if ($result->num_rows > 0) { 
 // output data of each row
 while($row = $result->fetch_assoc()) {
    echo "RUT: " . $row["RUT"]. " - Nombre: " . $row["Nombres"]. " " . $row["Apellidos"]. "<br>";
    echo "Direccion: " . $row["Direccion"]. " - Ciudad: " . $row["Ciudad"]. " " ;

 }
 } else {
    echo "No existen resultados";
 }