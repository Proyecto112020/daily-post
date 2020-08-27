<?php 
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$foton=$_FILES['foto']['name'];
$fotot=$_FILES['foto']['type'];
$fotos=$_FILES['foto']['size'];
$carpeta=$_SERVER['document_root'].'/img';
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta.$foton);
include("conexion.php");
$foto=$foton.".".$fotot;
$sql="INSERT INTO usuarios(id_usuario,nombre_usuario,usuario,contraseña,foto,clase) VALUES (NULL,'$nombre','$usuario','$clave','$foto',1)";
$q=mysqli_query($conexion,$sql);
header("location:index.php");
?>
