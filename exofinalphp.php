<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p><b>Exercice final</b></p>
    <form action="exofinalphp.php" method="POST">
    <label>Entrez pseudo</label>
    <input type="text" name="entree3" />
    <label>Entrez mot de passe</label>
    <input type="text" name="entree4" />
    <input type="submit" name="Validerrr" value="Cliquer sur valider" />
    </form>
    <?php if(isset($_POST['entree3']) && $_POST['entree3'] == "theo" && isset($_POST['entree4']) && $_POST['entree4'] == "garnon"){
        ?><p>Logged succesfully</p><?php
    }
    else{
        ?><p>Wrong username or password</p><?php
    }
    ?>
</body>
