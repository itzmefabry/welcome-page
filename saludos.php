//iniciamos en html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="class.css">
</head>
<body>
<h2>SALUDOS</h2>    
//ponemos 5 botones en un form post para poderlos usar en php
<form action="" method="POST">
    <button type="submit" name="Espanol">Español</button>
    <button type="submit" name="Ingles">Inglés</button>
    <button type="submit" name="Ruso">Ruso</button>
    <button type="submit" name="Chino">Chino</button>
    <button type="submit" name="Japones">Japonés</button>
</form>
        <br>
//ponemos un retorno al index
        <a href="index.php">Volver</a>


</body>
</html>



<?php
// hacemos los if.. si se presiona un boton devuelve un eco 
// con el texto en ese idioma
if (isset($_POST['Espanol'])) {
    echo "<h3>¡Saludos Colega!</h3>";
} elseif (isset($_POST['Ingles'])) {
    echo "<h3>Hello my friend!</h3>";
} elseif (isset($_POST['Ruso'])) {
    echo "<h3>Привет коллега!</h3>";
} elseif (isset($_POST['Chino'])) {
    echo "<h3>你好，朋友！</h3>";
} elseif (isset($_POST['Japones'])) {
    echo "<h3>こんにちは、友人！</h3>";
}

?>