<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 3</b></p>
    <table border="1">
        <tr>
            <?php $tab[0] = array("NOM" => "GARNON", "Prenom" => "Theo", "Password" => "1234");
            $tab[1] = array("NOM" => "GARCIA", "Prenom" => "Flo", "Password" => "4567");
            $tab[2] = array("NOM" => "DEMOLLIENS", "Prenom" => "Nico", "Password" => "8910");
            for ($i = 0; $i < 3; $i++) {
                foreach ($tab[$i] as $Key => $Value) {
                    ?>
        <tr>
            <td><?php echo $Key; ?></td>
            <td><?php echo $Value; ?></td>
        </tr>
        <?php
                }
            }
        ?>
        </tr>
    </table>
</body>