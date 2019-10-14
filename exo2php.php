<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 2</b></p>
    <form action="exo2php.php" method="POST">
        <label>Votre chiffre</label>
        <input type="text" name="LeChiffre" />
        <input type="submit" name="Valider" value="Cliquer pour valider" />
    </form>
    <?php

    if (isset($_POST['LeChiffre']) && $_POST['LeChiffre'] != 0) {
        if ($_POST['LeChiffre'] % 2 == 0) {
            ?><p><?php echo "Paire" ?></p><?php
        } 
        else {
            ?><p><?php echo "Impaire"; ?></p><?php
        }
    } 
    else {
            ?><p><?php echo "Invalide"; ?></p><?php
    } ?>
</body>