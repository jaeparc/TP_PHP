<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
coucou
    <form action="index2.php" method="POST">
        <label>Votre chiffre</label>
        <input type="text" name="LeChiffre" />
        <input type="submit" name="Valider" value="Cliquer pour valider" />
    </form>
    <?php
  
        if(isset($_POST['LeChiffre']) && $_POST['LeChiffre'] != 0){
            echo "Ma valeur est ".$_POST['LeChiffre'];
        }
        else{
            echo "Invalide";
        }
    ?>
</body>

</html>