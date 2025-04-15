<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
//Inicializar una nueva sesión de CURL; ch = Curl handle
//Indicar que queremmos recibir el resultado de la petición y no mostrarla en pantallacurl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// para que me devuelva el resultado
//Ejecutar la petición y guardar el resultado en una variable
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
var_dump($data);
?>



<main>
    <h2>La próxima película de Marvel</h2>
</main>




<style>
  :root {
    color-scheme: light dark;
  }
  body {
    display: grid;
    place-content: center;
  }
</style>