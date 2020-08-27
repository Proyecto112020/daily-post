<?php 
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$foton=$_FILES['foto']['name'];
$fotot=$_FILES['foto']['type'];
$fotos=$_FILES['foto']['size'];
$carpeta='img/'.$foton;
echo $carpeta;
move_uploaded_file($_FILES['foto']['tmp_name'],$carpeta);
include("conexion.php");
$sql="INSERT INTO usuarios(id_usuario,nombre_usuario,usuario,contraseña,foto,clase) VALUES (NULL,'$nombre','$usuario','$clave','$foton',1)";
$q=mysqli_query($conexion,$sql);

?>
