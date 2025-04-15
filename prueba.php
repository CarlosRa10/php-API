<?php
    $nombre = "Carlos";
    $edad = 25;
    $is_dev = true; // booleano
    $numero_favorito = (bool) 7;// 7 es verdadero, 0 es falso - casting a booleano
    $frase_favorita = "La vida es bella";
    $is_old = $edad > 18;
    //var_dump($nombre, $edad, $frase_favorita);

    //constante globlal
    define("PI", 3.1416); // constante global, no se puede cambiar su valor
    define('LOGO_URL', 'https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png'); 

    //constantes locales
    const NOMBRE = "Carlos"; // constante local, no se puede cambiar su valor

    //Ternario
    $out_put_age = ($edad > 18) ? "Eres mayor de edad" : "Eres menor de edad";

    //Match
    $out_put_age = match(true) {
        $edad > 17 => "Eres mayor de edad, $nombre",
        $edad < 18 => "Eres menor de edad,  $nombre",
        default => "No se puede determinar la edad"
    };

    //Arrays
    $best_languages = ["PHP", "JavaScript", "Python", "Java", "C++"];
    $best_languages[1] = "Typescript";
    
    //Arrays Asociativos - parecido a un objeto en JS o diccionario en Python
    $person = [
        "nombre" => "Carlos",
        "edad" => 25,
        "is_dev" => true,
        "languages" => ["PHP","JavaScript", "Python","Java","C++"]
    ];

    $person["nombre"] = "Carlos Eduardo";
    $person["languages"][] = "Typescript";
?>

<h3>El mejor lenguaje es <?= $best_languages[1] ?></h3>

<ul>
    <?php foreach($best_languages as $key => $language): ?>
        <li><?= $key ." ". $language ?></li>
    <?php endforeach; ?>
</ul>



    <!-- <?php if($is_old) : ?>
        <h2>Eres Mayor de edad</h2>
        <?php elseif($is_dev) : ?>
            <h2>Eres desarrollador</h2>
            <?php else : ?>
                <h2>Eres menor de edad</h2>
                <?php endif; ?> 
                
                
                <?php 
    if($edad > 18) {
        echo "Eres mayor de edad";
    }elseif ($is_dev){
        echo "Eres desarrollador";
    } else {
        echo "Eres menor de edad";
    }
    
?>  -->


<h2><?= $out_put_age ?></h2>
<img src="<?= LOGO_URL ?>" alt="Logo de Google" width="300" height="200">

<h1>
    <!-- <?= "Hola ". $nombre?> -->
    <?= NOMBRE?> 
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