<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styletheo.css">
    <title> Entrainement PHP </title>
</head>

<body>
    <p>Exercice 1</p>
    <?php 
            $variabletest = rand(0,100);
                if($variabletest%2 == 0)
                {    
                    ?><p class="paire"><?php
                        echo "la variable aleatoire vaut $variabletest et est paire";
                        ?></p><?php
                }
                else
                {?>
                    <p class="impaire"><?php
                        echo "la variable aleatoire vaut $variabletest et est impaire"; ?>
                    </p>
                    <?php
                } 
        ?>
    <p>Exercice 2</p>
    <form action="index2.php" method="POST">
        <label>Votre chiffre</label>
        <input type="text" name="LeChiffre" />
        <input type="submit" name="Valider" value="Cliquer pour valider" />
    </form>
    <?php
  
        if(isset($_POST['LeChiffre']) && $_POST['LeChiffre'] != 0){
            if($_POST['LeChiffre']%2==0){
                ?><p><?php echo "Paire" ?></p><?php 
            }
            else{
                ?><p><?php echo "Impaire"; ?></p><?php
            } 
        }
        else{
            ?><p><?php
            echo "Invalide";?></p><?php
        }?>
    <p>Exercice 2.1</p>
    <?php
    $tableau = array(1,3,5,7,9);
    for($i = 0 ; $i < 5; $i = $i + 1){
        ?><table border><td><?php echo $tableau[$i]; ?></td></table><?php
    } ?>
    <p>Exercice 2.2</p>
    <?php
    $tableau1 = array(
        'nom' => 'GARNON',
        'prenom' => 'Theo',
        'password' => 'motdepasse123',
    );
        echo $tableau1['nom']?><br><?php;?>
        <?php echo $tableau1['prenom']?><br><?php;?>
        <?php echo $tableau1['password']?><br><?php;?>
    <p>Exercice 3</p>
    <?php
    $tableau2 = array(
    )
    ?>
</body>

</html>