<table  class="tabled" border="0" cellspacing="0" cellpadding="0">
	<tr><th>foto</th><th>id</th><th>nombre</th><th>usuario</th><th>clave</th><th>clase</th></tr>
	<tr></tr>
	<?php 
include("conexion.php");
    $buscar="SELECT * FROM usuarios";

    $result=mysqli_query($conexion,$buscar);
    while($registros=mysqli_fetch_array($result)) {
    ?>
<tr>
         
          <td><img src="data:image/jpg;base64,<?php echo base64_encode($registros['foto']); ?>" width="40px"></td>
          <td><?php echo $registros['id_usuario']; ?></td>
          <td><?php echo $registros['nombre_usuario']; ?></td>
          <td><?php echo $registros['usuario']; ?></td>
          <td><?php echo $registros['contraseña']; ?></td>
          <td><?php echo $registros['clase']; ?></td>
          
          
</tr>
        <?php 
        } ?>
	</table>