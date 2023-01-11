<?php
    $api=curl_init("https://pokeapi.co/api/v2/pokemon/");
    curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
    $poke=curl_exec($api);
    curl_close($api);

    $datos=json_decode($poke);

    $name = $datos -> name;

    var_dump($datos -> results -> $name);
?>