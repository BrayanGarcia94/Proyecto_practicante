<?php
    include("connect.php");
    $con = conectar();

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    $sql = "INSERT INTO usuarios VALUES('','$nombres','$apellidos','$correo','$contrasena')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: login.php");
    }else {
    }
?>