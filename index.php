<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <h1>Buscar Pelicula:</h1>
        <label for="nombre">Nombre-></label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="year">Año-></label>
        <input type="number" step="1" id="year" name="year" placeholder="Ingrese el año (opcional)">
        <button type="submit" name="Buscar">Buscar</button>
    </form>
</body>
</html>
<?php
if (isset($_POST['Buscar'])) {
    include 'pelis.php';
}
?>