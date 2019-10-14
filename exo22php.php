<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 2.2</b></p>
    <?php
    $tableau1 = array(
        'nom' => 'GARNON',
        'prenom' => 'Theo',
        'password' => 'motdepasse123',
    );
    echo $tableau1['nom'] ?><br><?php;
    echo $tableau1['prenom'] ?><br><?php;
    echo $tableau1['password'] ?><br><?php; ?>
</body>