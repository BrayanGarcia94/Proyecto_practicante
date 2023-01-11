<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">

    <title>Listado de pokemones</title>
</head>
<body>
    <section class="pokeIndex">
    <center>
        <form action="poke_info.php" method="post">
            <h1>Pokedex Casera</h1><br>
            <h3>Bienvenido a tu pokedex!</h3><br>
            <h4>Para empezar, introduce el número o nombre del pokemon que desees buscar</h4><br>
            <input type="text" name="pokemon" id="pokemon" value="" placeholder="Ingresa nombre o número del pokemon"/>
            <input type="submit" value="Buscar">
        </form>
    </center>
    </section>
</body>
</html>