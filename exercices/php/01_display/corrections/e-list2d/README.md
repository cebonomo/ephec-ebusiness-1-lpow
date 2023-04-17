# PHP - display - corrections

## array 2d (mporion)

Pour le code complet, voir le fichier [index.php](./index.php).

### Code principal

#### Génération d'une grille

```php
<?php

function getRandomValue()
{
   switch (rand(0, 2)) {
      case 0:
         return '';
      case 1:
         return 'o';
      case 2:
         return 'x';
   }
}

function generateGrid($size)
{
   $grid = [];
   for ($i = 0; $i < $size; $i++) {
      $grid[$i] = [];
      for ($j = 0; $j < $size; $j++) {
         $grid[$i][$j] = getRandomValue();
      }
   }
   return $grid;
}

$grid = generateGrid(6);

```

#### Affichage de la grille

(Afin de simplifier l'affichage, les classes CSS ne sont pas reprises ici. Voir fichiers complets.)

```php
<table>
<?php foreach ($grid as $row) { ?>
    <tr>
        <?php foreach ($row as $cell) { ?>
            <td><?php echo $cell; ?></td>
        <?php } ?>
    </tr>
<?php } ?>
</table>
```

## Explications

Ce code permet de générer un document HTML contenant une grille du jeu du morpion

1. La variable `$grid` ets initialisée avec un tableau à 2d. Pour cette partie, se référer aux exercices de principes de programmation.

2. Dans le "body" du document, on crée un tableau HTML avec la balise "table".

3. Dans la balise table, une première boucle "foreach" permet d'itérer sur la première dimension du tableau, càd sur chaque ligne de la grille du jeu.

4. Lors de chaque itération, on affiche une balise HTML "tr" pour délimiter chaque ligne du tableau HTML.

5. Dans la balise "tr", une seconde boucle "foreach" permet d'itérer sur la deuxième dimension du tableau, càd sur chaque cellule de la ligne courante.

6. Lors de chaque itération, on affiche une balise HTML 'td' pour délimiter chaque cellule du tableau HTML. Dans chaque cellule, on affiche le contenu du tableau PHP, soit l'une des trois valeurs possibles ("", "x", "o").

