<?php 
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$foto=$_FILES['foto']['tmp_name'];
include("conexion.php");
$sql="INSERT INTO usuarios(id_usuario,nombre_usuario,usuario,contraseña,foto,clase) VALUES (NULL,'$nombre','$usuario','$clave','$foto',1)";
$q=mysqli_query($conexion,$sql);
header("location:index.php");
?>
