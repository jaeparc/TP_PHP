<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 2.1</b></p>
    <?php
    $tableau = array(1, 3, 5, 7, 9);
    for ($i = 0; $i < 5; $i = $i + 1) {
        ?><table border>
            <td><?php echo $tableau[$i]; ?></td>
        </table><?php
    } ?>
</body>