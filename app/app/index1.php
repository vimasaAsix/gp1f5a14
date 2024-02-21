<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predicció Premier League</title>
</head>
<body>
    <h1>Partits de la pròxima jornada</h1>

    <?php
    // Nombres de los equipos
    $equipsPremierLeague = array("Manchester City", "Arsenal", "Liverpool", "Chelsea", "Manchester United", "Tottenham");
    shuffle($equipsPremierLeague);

    $numPartits = count($equipsPremierLeague) / 2;
    echo "<ul>";
    for ($i = 0; $i < $numPartits; $i++) {
        $equipLocal = $equipsPremierLeague[$i];
        $equipVisitant = $equipsPremierLeague[$i + $numPartits];
        echo "<li><a href='aposta.php?local=$equipLocal&visitant=$equipVisitant'> $equipLocal vs $equipVisitant</a></li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
