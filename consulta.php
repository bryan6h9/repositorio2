<table>
<tr>
    <th>Id</th>
    <th>nombre</th>
    <th>contraseña</th>
    <th>direccion</th>
    <th>telefono</th>
 *  </th>correo electronico</th>
 *   <th>calles</th>
   

</tr>

<?php
include("conexion.php");
$acceso_db = mysqli_select_db($cone,$bd); if($acceso_db){
echo "Acceso a la base de datos realizado exitosamente";} else{
echo "Error en el acceso a la base de datos";}

//Consulta 
$sql="SELECT*from registro";
//$sql="SELECT * FROM registro WHERE Nombre='Luz'";
$result=mysqli_query($cone,$sql); while($row=mysqli_fetch_array($result)){ echo "<tr>";
echo "<td>".$row['Id']."</td>"; echo "<td>".$row['nombre']."</td>"; echo "<td>".$row['correo']."</td>";
echo "<td> <a href='editar.php?ideditar=".$row['Id']."'>Editar</a>"."-";	
echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='eliminar.php?ideliminar=".$row['Id']."'>Eliminar</a> </td>";
"</tr>";}
$cone->close();
?>
</table>