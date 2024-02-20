<?php
// Verificar si se han enviado datos mediante el método POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener un identificador único para la cookie
    $cookieIdentifier = uniqid("apuesta_", true);

    // Obtener los datos del formulario
    $resultat = $_POST["resultat"];
    $resultatDetallat = isset($_POST["resultat_detallat"]) ? $_POST["resultat_detallat"] : "No proporcionat";
    $usuari = $_POST["usuari"];
    $micropunts = $_POST["micropunts"];
    $equipLocal = $_POST["equipLocal"];
    $equipVisitant = $_POST["equipVisitant"];

    // Crear una cadena de texto con los datos
    $datosAposta = "Resultat: $resultat\n";
    $datosAposta .= "Resultat Detallat: $resultatDetallat\n";
    $datosAposta .= "Nom d'usuari: $usuari\n";
    $datosAposta .= "Micropunts: $micropunts\n";
    $datosAposta .= "Equip Local: $equipLocal\n";
    $datosAposta .= "Equip Visitant: $equipVisitant\n";
    $datosAposta .= "-----------------------------\n";

    // Guardar los datos en una cookie con un nombre único
    setcookie("datos_apuesta_$cookieIdentifier", $datosAposta, time() + 3600, "/");

    // Mostrar mensaje de éxito
    echo "<p>Dades guardades correctament en cookies.</p>";
} else {
    // Si no se enviaron datos mediante POST, mostrar un mensaje de error
    echo "<p>Error: No s'han rebut dades del formulari.</p>";
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Predicción</title>
</head>
<body>
    <h1>Dades rebudes des del formulari d'aposta</h1>
	<h1>hecho<h1>
    <a href="index1.php">Volver a la página principal</a>
</body>
</html>
