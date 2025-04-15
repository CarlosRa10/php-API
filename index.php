<?php
    $nombre = "Carlos";
    $edad = 25;
    $numero_favorito = (bool) 7;// 7 es verdadero, 0 es falso - casting a booleano
    $frase_favorita = "La vida es bella";
    var_dump($nombre, $edad, $frase_favorita);
?>


<h1>
    <?= "Hola ". $nombre?>
</h1>


<style>

:root {
    color-scheme: light dark;
}

body {
display: grid;
place-content: center;
}

</style>