<?php
$Id=$_GET['ideliminar'];
include("conexion.php");
$sql="DELETE FROM registro WHERE Id='".$Id."'";
$result = mysqli_query($cone,$sql);
if($result) {
echo "Registro eliminado exitosamente";
header('location:consulta.php');
}else{
echo "Error en la conexion";
}
mysqli_close($cone);
?>