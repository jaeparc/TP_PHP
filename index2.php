<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 1</b></p>
    <?php
    $variabletest = rand(0, 100);
    if ($variabletest % 2 == 0) {
        ?><p class="paire"><?php
            echo "la variable aleatoire vaut $variabletest et est paire";
        ?></p><?php
    } 
    else { ?>
        <p class="impaire"><?php
            echo "la variable aleatoire vaut $variabletest et est impaire"; ?>
        </p>
    <?php
    }
    ?>
    <p><b>Exercice 2</b></p>
    <form action="index2.php" method="POST">
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
    <p><b>Exercice 2.1</b></p>
    <?php
    $tableau = array(1, 3, 5, 7, 9);
    for ($i = 0; $i < 5; $i = $i + 1) {
        ?><table border>
            <td><?php echo $tableau[$i]; ?></td>
        </table><?php
    } ?>
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
    <p><b>Exercice 4</b></p>
    <form action="index2.php" method="POST">
    <label>Valeur de A</label>
    <input type="text" name="A" />
    <label>Valeur de B</label>
    <input type="text" name="B" />
    <label>Valeur de C</label>
    <input type="text" name="C" />
    <input type="submit" name="Valider" value="Cliquer pour valider" />
    </form>
    <?php
    $valeurA = $_POST['A'];
    $valeurB = $_POST['B'];
    $valeurC = $_POST['C'];
    $delta = ($valeurB * $valeurB)-4*$valeurA*$valeurC;
    $x1 = ($valeurB*(-1)-sqrt($delta))/2*$valeurA;
    $x2 = ($valeurB*(-1)+sqrt($delta))/2*$valeurA;
    $x3 = ($valeurB*(-1))/2*$valeurA;
    if($delta > 0)
    {
        ?><p>Il y a 2 solutions : <?php echo $x1; ?> et <?php echo $x2; ?></p><?php
    }
    if($delta == 0)
    {
        ?><p>Il y a qu'une seule solution qui est : <?php echo $x3;
    } 
    if($delta < 0)
    {
        ?><p>Il n'y a pas de solution réelle</p><?php
    }?>
    <p><b>Exercice 5</b></p>
    <form action="index2.php" method="POST">
    <label>Entrez un mot</label>
    <input type="text" name="entree" />
    <input type="submit" name="Valid" value="Cliquer sur valider" />
    </form>
    <p class="exo5"><?php echo $_POST['entree'] ?></p>
    <p><b>Exercice 6</b></p>
    <form action="index2.php" method="GET">
    <label>Entrez un mot</label>
    <input type="text" name="entree1" />
    <input type="submit" name="Valide" value="Cliquer sur valider" />
    </form>
    <p class="exo6"><?php echo $_GET['entree1'] ?></p>
    <p><b>Exercice 7</b></p>
    <form action="index2.php" method="POST">
    <label>Entrez un mot</label>
    <input type="text" name="entree2" />
    <input type="submit" name="Validerr" value="Cliquer sur valider" />
    </form>
    <?php $_SESSION["var"] = $_POST['entree2']; ?>
    <p><?php echo $_SESSION["var"]; ?></p>
    <p><b>Exercice final</b></p>
    <form action="index2.php" method="POST">
    <label>Entrez pseudo</label>
    <input type="text" name="entree3" />
    <input type="text" name="entree4" />
    <input type="submit" name="Validerrr" value="Cliquer sur valider" />
    </form>
    <?php if(isset($_POST['entree3']) && $_POST['entree3'] == "theo" && isset($_POST['entree4']) && $_POST['entree4'] == "garnon"){
        ?><p>Ok</p><?php
    }
    else{
        ?><p>not ok</p><?php
    }
    ?>

</body>

</html>