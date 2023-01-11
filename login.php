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
  <title>Inicio de sesión</title>
</head>
<body>
  <?php
    echo '<script>alert("Debes iniciar sesión para ver esto")</script>';
  ?>
  <form action="bd_auth.php" method="POST">
  <section class="form-login">
    <h5>Iniciar sesión</h5>
    <input class="controls" type="text" name="correo" value="" placeholder="Correo electrónico">
    <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
    <input class="buttons" type="submit" name="" value="Ingresar">
    <p><a href="#">¿Olvidaste tu Contraseña?</a></p>
    <p>Aún no tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
  </section>
  </form>
</body>
</html>