<?php
include("conexion.php");

$nombre=$_POST['nombreform'];
$contra=$_POST['contraform'];
$direccion=$_POST['dirform'];
$telefono=$_POST['telform'];
$correo=$_POST['emailform'];
$calles=$_POST['calleform'];
$termino=$_POST['terminoform'];


$sql="INSERT INTO registro(nombre,contraseña,direccion,telefono,correo,calles,termino)
VALUES ('$nombre',$contra,'$direccion','$telefono','$correo','$calles','$termino')";



$resultado= mysqli_query($cone,$sql);
if($resultado)
{
    header("Location:contacto.html");
}
else 
{
    echo"Fallido";
}
mysqli_close($cone);
?>