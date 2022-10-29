<?php
include_once('db.php');
$RUT=$_POST['RUT'];
$Nombres=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$Direccion=$_POST['Direccion'];
$Ciudad=$_POST['Ciudad'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Fechadenacimiento=$_POST['Fecha_de_nacimiento'];
$Estadocivil=$_POST['Estado_civil'];
$Comentarios=$_POST['Comentarios'];





echo "Los datos son los siguentes: <br>";
echo "$RUT, $Nombres, $Apellidos, $Direccion, $Ciudad, $Telefono, $Email, $Fechadenacimiento, $Estadocivil y $Comentarios";

//

            $conectar=conn(); //Ejecutar las condiciones de la base de datos
            //consultar si existe registro
            $sql="SELECT RUT from medica where RUT='".$RUT."'";
            //$result = mysqli_query($conectar,$sql);
            $result = $conectar->query($sql);
            $rut_resultante;
               // echo "Pasa por aqui";
            if ($result->num_rows > 0) { 
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "Pasa por aqui 2";
             $rut_resultante=  $row["RUT"];
  }
            } else {
               // echo "Pasa por aqui 3";

                $rut_resultante="";
            }
            if ($RUT==$rut_resultante){
                $sql="UPDATE medica SET RUT='".$RUT."', Nombres='".$Nombres."', Apellidos='".$Apellidos."', Direccion='".$Direccion."', Ciudad='".$Ciudad."', Telefono=".$Telefono.", Email='".$Email."', Fecha_de_nacimiento=".$Fechadenacimiento.", Estado_civil='".$Estadocivil."', Comentarios='".$Comentarios."' WHERE RUT='".$RUT."'";
            
                $resul = mysqli_query($conectar , $sql)or trigger_error("Query failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
            }
            else{
            $sql="INSERT INTO medica (RUT, Nombres, Apellidos, Direccion, Ciudad, Telefono, Email, Fecha_de_nacimiento, Estado_civil, Comentarios)
            VALUES ('$RUT','$Nombres','$Apellidos','$Direccion','$Ciudad','$Telefono','$Email','$Fechadenacimiento','$Estadocivil','$Comentarios')";
            $resul = mysqli_query($conectar , $sql)or trigger_error("Query failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
            }

            echo "$sql";
    
?>

