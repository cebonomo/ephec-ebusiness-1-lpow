# PHP - display - corrections

## array

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

```php
<?php 

$barbapapas = [
    'Barbapapa',
    'Barbamama',
    'Barbidou',
    'Barbibul',
    'Barbidur',
    'Barbouille',
    'Barbabelle',
    'Barbotine',
    'Barbalala',
];

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Liste des Barbapapas</title>
    </head>
    <body>
        <h1>Liste des Barbapapas</h1>
        <ul>
            <?php foreach ($barbapapas as $barbapapa) {?>
                <li>
                    <?php echo $barbapapa; ?>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>
```

## Explications

Ce code permet de générer un document HTML contenant une liste affichée de manière dynamique.

 1. La variable `$barbapapas` est initialisée avec un array de string.

 2. Dans le "body" du document, on crée une liste HTML de type "ul". Chaque "li" est généré depuis une boucle PHP. Concrètement, PHP boucle sur l'array `$barbapapas` et affiche la valeur de chaque entrée `$barbapapa`.


