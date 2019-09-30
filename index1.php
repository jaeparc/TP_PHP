<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styletheo.css">
        <title> Entrainement PHP </title>
    </head>
    <body>
        <?php 
            $variabletest = rand(0,100);
                if($variabletest%2 == 0)
                {    
                    ?><p class="paire"><?php
                        echo "la variable vaut $variabletest et est paire";
                        ?></p><?php
                }
                else
                {?>
                    <p class="impaire"><?php
                        echo "la variable vaut $variabletest et est impaire"; ?>
                    </p>
                    <?php
                } 
        ?>
    </body>
</html>