# PHP - display - corrections

## echo

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

```php
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
    </body>
</html>
```

## Explications

Ce code permet de générer un document HTML contenant une valeur dynamique (en l'occurrence, un nombre aléatoire).

 1. La variable `$number` est initialisée avec une valeur numérique. Cette valeur est générée de manière aléatoire grâce à la fonction native `rand` (hors cours).

 2. La valeur de la variable `$number` est affichée à l'intérieur d'un paragraphe HTML à l'aide de l'instruction `echo`. 
 
  - ON remarque que, en PHP, le code PHP peut s'insérer partout.
  - On remarque que, en PHP, la variable initialisée en haut du fichier est donc accessible dans l'ensemble du même fichier.
