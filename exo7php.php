<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 7</b></p>
    <form action="exo7php.php" method="POST">
    <label>Entrez un mot</label>
    <input type="text" name="entree2" />
    <input type="submit" name="Validerr" value="Cliquer sur valider" />
    </form>
    <?php $_SESSION["var"] = $_POST['entree2']; ?>
    <p><?php echo $_SESSION["var"]; ?></p>
</body>