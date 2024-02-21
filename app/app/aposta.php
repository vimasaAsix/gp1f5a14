<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aposta Premier League</title>

    <style>
        body {
            text-align: justify;
            margin: 20px; /* Ajusta el valor según sea necesario */
        }

        form {
            max-width: 700px; /* Ajusta el valor según sea necesario */
            margin: 0 auto;
        }
    </style>

</head>
<body>
    <h1>Aposta per al partit seleccionat</h1>
    
    <br>

    <?php
    // Obté els equips del paràmetre de la URL
    $equipLocal = $_GET['local'];
    $equipVisitant = $_GET['visitant'];
    ?>
    <form method="post" action="procesar.php">
        <label for="resultat">Resultat del partit:</label>
        <select name="resultat" id="resultat">
            <option value="empat">Empat</option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> guanya</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> guanya</option>
        </select>
        
        <br><br>

        <label for="resultat_detallat">Resultat detallat (opcional):</label>
        <input type="text" name="resultat_detallat" id="resultat_detallat" placeholder="Ex: 3-1">

        <br><br>

        <label for="resultat">Quin és l'equip marca primer (opcional):</label>
        <select name="resultat" id="resultat">
        <option value="empat"></option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> marca primer</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> marca primer</option>
        </select>

        <br><br>

        <label for="resultat">Quin és l'equip amb més posessió de la pilota (opcional):</label>
        <select name="resultat" id="resultat">
        <option value="empat"></option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> tindrà més posessió de la pilota</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> tindrà més posessió de la pilota</option>
        </select>

        <br><br>

        <label for="resultat">Quin és l'equip que farà més xuts a porteria (opcional):</label>
        <select name="resultat" id="resultat">
        <option value="empat"></option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> farà més xuts a porteria</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> farà més xuts a porteria</option>
        </select>

        <br><br>

        <label for="resultat">Quin és l'equip que llençarà més corners (opcional):</label>
        <select name="resultat" id="resultat">
        <option value="empat"></option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> llençarà més corners</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> llençarà més corners</option>
        </select>

        <br><br>

        <label for="resultat">Quin  és l'equip que farà més faltes (opcional):</label>
        <select name="resultat" id="resultat">
        <option value="empat"></option>
            <option value="<?php echo $equipLocal; ?>"><?php echo $equipLocal; ?> farà més faltes</option>
            <option value="<?php echo $equipVisitant; ?>"><?php echo $equipVisitant; ?> farà més faltes</option>
        </select>

        <br><br>
        
        <label for="usuari">Nom d'usuari:</label>
        <input type="text" name="usuari" id="usuari" required>

        <br><br>

        <label for="micropunts">Micropunts a apostar (màxim 1000):</label>
        <input type="number" name="micropunts" id="micropunts" min="0" max="1000" required>

        <br><br>

        <input type="hidden" name="equipLocal" value="<?php echo $equipLocal; ?>">
        <input type="hidden" name="equipVisitant" value="<?php echo $equipVisitant; ?>">

        <button type="submit">Enviar Predicció</button>
    </form>
</body>
</html>


