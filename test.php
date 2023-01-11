<?php

    $base = "https://pokeapi.co/api/v2/pokemon/";
    for($id=1; $id<5; $id++){
        $data = file_get_contents($base.$id.'/');
        $pokemon = json_decode($data);
        echo $pokemon -> name ."<br>";
        echo $pokemon -> abilities ."<br>";
    }

    $api=curl_init("https://pokeapi.co/api/v2/pokemon/");
    curl_setopt($api, CURLOPT_RETURNTRANSFER, TRUE);
    $poke=curl_exec($api);
    curl_close($api);

    $datos=json_decode($poke);

    echo "<table><thead><tr><td>ID</td><td>Nombre</td><td>Ver Pokemon</td></tr></thead><tbody>";
    foreach($datos as $post){
        echo "<tr><td>".$post ['nombre']."</td><td>".$post ['url']."</td></tr>";
    }
    echo "</tbody></table>";