# PP - tableaux indexés à n dimensions

## Objectifs

 1. Savoir déclarer un tableau à 2 dimensions.

 2. Parcourir chaque dimension à l'aide d'une boucle.

 3. Savoir accéder aux valeurs finales.

## Enoncés

### 1. Jeux du morpion - déclaration
 
Soit une grille de jeux du [morpion](https://fr.wikipedia.org/wiki/Morpion_(jeu)) contenant 3 valeurs possibles ("", "o" et "x").

Déclarer, de manière dynamique, une grille de taille x (x lignes sur x colonnes).

Pour rendre l'exemple plus intéressant (optionnel), on peut imaginer déterminer chaque valeur de manière aléatoire. En PHP, voir par exemple la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)) qui peut retourner un nombre compris entre deux valeurs (hors cours). Il est donc possible de déterminer une valeur ("", "o" et "x") en fonction de 3 nombres différents.


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

$size = 6;

$game = [];
for ($i = 0; $i < $size; $i++) {
   $game[$i] = [];
   for ($j = 0; $j < $size; $j++) {
      $game[$i][$j] = getRandomValue();
   }
}

var_dump($game);
```

### 2. Jeux du morpion - vérification

Ecrire un programme qui vérifie l'état du jeu en déterminant si des "o" ou des "x" sont alignés horizontalement, verticalement ou en diagonale, et ce sur au moins x cases d'affilées. Le programme indique le nombre de points pour chaque signe, càd le nombre de fois où l'on retrouve un alignement de 5 cases.

Ce problème étant avancé, il est intéressant de construire des versions différentes de plus en plus avancées:
 - Dans un premier temps, ne vérifier que les lignes.
 - Dans un second temps, étendre la vérification aux colonnes.
 - Enfin, étendre la vérification aux lignes diagonales.


