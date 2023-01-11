<?php
  include("connect.php");
  $con=conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Registrar usuario</title>
</head>
<body>
  
  <form action="bd_con.php" method="POST">
  <section class="form-register">
    <h5>Formulario de registro</h5>
    <input class="controls" type="text" name="nombres" value="" placeholder="Ingrese sus nombres">
    <input class="controls" type="text" name="apellidos" value="" placeholder="Ingrese sus apellidos">
    <input class="controls" type="text" name="correo" value="" placeholder="Ingrese su correo electrónico">
    <input class="controls" type="password" name="contrasena" value="" placeholder="Ingrese su contraseña">
    <input class="buttons" type="submit" value="Registrarme">
    <p><a href="#">¿Olvidaste tu Contraseña?</a></p>
    <p>Ya posees una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
  </section>
  </form>
</body>
</html>