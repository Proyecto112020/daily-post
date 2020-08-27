<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daily Post</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo jorge.png">
    <link rel="stylesheet" href="diseño.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>    
<title>Document</title>
</head>
<body>
    <div class="banner">
    <a href="index.php"><img src="logo jorge.png" class="logo"></a>
    <div class="botones">
    <button class="boton">Quienes somos</button>
    <button class="boton">contactenos</button>
    <button class="boton">sugerencias</button>
    <button class="boton">ayuda</button>
    <a href="registrarse.php"><button class="boton">registrarme</button></a>
    <button class="boton">login</button>
    </div>
    </div>
    <center>
        <div>
    <form action="insertar.php" method="POST" enctype="multipart/form-data">
   <br> <input type="text" name="nombre" placeholder="nombre">
  <br><br>  <input type="text" name="usuario" placeholder="Usuario">
   <br><br> <input type="text" name="clave" placeholder="Clave">
    <br><br><input type="file" name="foto" >
    <br><br><input type="submit" name="enviar">
    </form>
    </div>
    </center>
</body>
</html>