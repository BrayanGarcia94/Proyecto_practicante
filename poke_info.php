<?php
    session_start();
    if ($_SESSION["correo"] != "Si"){
        header("Location:login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="script.js" type="text/javascript" defer></script>
    <title>Información del pokémon</title>
</head>
<body>
    <section class="pokeCard">
        <form action="poke_info.php" method="post">
            <h3>Pokedex Casera</h3><br>
            <h3>Realizar otra búsqueda</h3><br>
            <input type="text" name="pokemon" id="pokemon" value="" placeholder="Ingresa nombre o número del pokemon"/>
            <input type="submit" value="Buscar">
        </form>
    <?php
        $id = $_POST['pokemon'];

        $api=curl_init("https://pokeapi.co/api/v2/pokemon/$id");
        curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
        $poke=curl_exec($api);
        curl_close($api);

        $datos=json_decode($poke);

        echo '<br><h2>NOMBRE</h2>';
        echo $datos -> name. '<br>';
        echo '<img src="'.$datos->sprites->back_default.'" width="200">';
        echo '<img src="'.$datos->sprites->front_default.'" width="200">';

        echo '<h2>HABILIDADES</h2>';
        foreach($datos->abilities as $k => $v){
            echo $v -> ability -> name.'<br>';
        }

        echo '<h2>TIPO</h2>';
        echo $datos -> types[0] -> type -> name;
    ?>
    </section>
</body>
</html>