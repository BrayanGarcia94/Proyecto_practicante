<?php

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    session_start();

    $_SESSION['correo']=$correo;
    $_SESSION['correo']="Si";

    $con = mysqli_connect("localhost","root","","pokeapi");

    $query = "SELECT * FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'";
    $resultado = mysqli_query($con,$query);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: poke_info.php");
    }else{
        ?>
        <?php
            include("login.php");
        ?>
        <h1 class="alert">Los datos ingresados son incorrectos</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($con)
?>