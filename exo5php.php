<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 5</b></p>
    <form action="exo5php.php" method="POST">
    <label>Entrez un mot</label>
    <input type="text" name="entree" />
    <input type="submit" name="Valid" value="Cliquer sur valider" />
    </form>
    <p class="exo5"><?php echo $_POST['entree'] ?></p>
</body>