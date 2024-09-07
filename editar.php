<?php
echo "<a href='registro.php'>Registro</a>";
echo "<a href='consulta.php'>Consulta</a>";
//llamar archivo conexion.php
include("conexion.php");
$Id=@$_GET['ideditar'];
$sql="SELECT * FROM registro WHERE ID='$Id'";
$result = mysqli_query($cone,$sql);
$row=mysqli_fetch_assoc($result);
$nombre=$row['nombre'];
$correo=$row['correo'];
if(isset($_POST['update'])){
$nombreNUEVO=$_POST['nombrenuevo'];
$correoNUEVO=$_POST['emailnuevo'];
$sql = "UPDATE registro SET nombre='$nombreNUEVO',correo='$correoNUEVO' WHERE ID='$Id'";//comillasmen id
$result = mysqli_query($cone,$sql);
if($result){
mysqli_close($cone);
//echo "Registro actualizado exitosamente";
header('location:consulta.php');
}else{
echo "Error en la conexion";
}
}else{
echo "Error en la actualizacion";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main.css"/>
<title>Update User Register</title>
</head>
<body>
<?php echo "<a href='registro.php'>Home</a>"?>
<?php echo "<a href='consulta.php'>Consulta</a>"?>
<div class="central">
<form method="post">
<!--<form action="<?=$_SERVER['PHP_SELF']?>" method="post">-->
<fieldset>
<legend>
<h1>
Update User Register
</h1>
<h1>
Data
</h1>
</legend>
<label for="formvalue1">
Name:
</label>
<input type="text" name="nombrenuevo" value="<?php echo $nombre;?>">
<br>
<label for="formvalue2">
email:
</label>
<input type="text" name="emailnuevo" value="<?php echo $correo;?>">
<br>
</fieldset>
<p class="container">
<input type="submit" name="update" value="Update" onclick="mensaje()">
<input type="reset" value="Reset">
</p>
<script type='text/javascript'>function mensaje() {alert('Registro actualizado exitosamente');}
</script>
</form>
</div>
</body>
</html>





























