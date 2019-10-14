<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>
    <p><b>Exercice 6</b></p>
    <form action="exo6php.php" method="GET">
    <label>Entrez un mot</label>
    <input type="text" name="entree1" />
    <input type="submit" name="Valide" value="Cliquer sur valider" />
    </form>
    <p class="exo6"><?php echo $_GET['entree1'] ?></p>
<body>