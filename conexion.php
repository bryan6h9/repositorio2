<?php
$usuario="root";
$password="";
$bd="Integradora";
$host="127.0.0.1";
$cone="mysqli_connect"($host,$usuario,$password,$bd);
if($cone)
{
    echo"Conexion exitosa";
}
else 
{
    echo"Conexion fallida";
}
?>
