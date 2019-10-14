<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice 4</b></p>
    <form action="exo4php.php" method="POST">
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
</body>