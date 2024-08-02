<?php
$titulo = trim($_POST['nombre']);
$year = trim($_POST['year']);
$apikey = 'c61ccb5f'; //clave de API

$url = "http://www.omdbapi.com/?t=" . urlencode($titulo) ."&y=".urlencode($year)."&apikey=" . $apikey;

$response = file_get_contents($url);
$data = json_decode($response, true);

if ($data['Response'] == 'True') {
    echo "<h1>Resultado:</h1>";
    echo "Título: " . $data['Title'] . "<br>";
    echo "Año: " . $data['Year'] . "<br>";
    echo "Clasificación: " . $data['Rated'] . "<br>";
    echo "Fecha de lanzamiento: " . $data['Released'] . "<br>";
    echo "Duración: " . $data['Runtime'] . "<br>";
    echo "Género: " . $data['Genre'] . "<br>";
    echo "Director: " . $data['Director'] . "<br>";
    echo "Guionista(s): " . $data['Writer'] . "<br>";
    echo "Actores: " . $data['Actors'] . "<br>";
    echo "Sinopsis: " . $data['Plot'] . "<br>";
    echo "Idioma: " . $data['Language'] . "<br>";
    echo "País: " . $data['Country'] . "<br>";
    echo "Premios: " . $data['Awards'] . "<br>";
    
    echo "Ratings:<br>";
    foreach ($data['Ratings'] as $rating) {
        echo "- " . $rating['Source'] . ": " . $rating['Value'] . "<br>";
    }
    
    echo "Tipo: " . $data['Type'] . "<br>";
    echo "<img src='" . $data['Poster'] . "' alt='Poster'>";
} else {
    echo "Película no encontrada.";
}
?>
