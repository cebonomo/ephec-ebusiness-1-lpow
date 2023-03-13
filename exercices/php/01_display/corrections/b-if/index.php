<?php 

$number = rand(0, 9);

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>document de base</title>
    </head>
    <body>
        <p>Voici mon nombre aléatoire: <?php echo $number; ?></p>
        
        <!-- version 1 -->
        <?php if ($number >= 5) { ?>
            <p>Donc, mon nombre est plus grand ou égal à 5!</p>
        <?php } else { ?>
            <p>Donc, mon nombre est plus petit que 5!</p>
        <?php } ?>
        
        <!-- version 2 -->
        <?php if ($number >= 5) {
            echo '<p>Donc, mon nombre est plus grand ou égal à 5!</p>';
         } else { 
            echo '<p>Donc, mon nombre est plus petit que 5!</p>';
        } ?>
        
    </body>
</html>
