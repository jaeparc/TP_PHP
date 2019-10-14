<?php
session_start();

if (isset($_POST['nom']) and !empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title>Entrainement PHP</title>
</head>

<body>
    <p><b>Exercice 8</b></p>
    <form action="exo8php.php" method="post">
        <p>Votre nom : <input type="text" name="nom" /></p>

        <p><input type="submit" value="OK"></p>
    
    </form>
    Ton nom est: <?php echo $_SESSION['nom']; ?>

    <a href="exo8php.php ">Déconnexion </a>
    <?php
    session_start();
    session_destroy();
    ?>
</body>
</html>