# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Morpions

### PHP

```php
<?php

function testRow($row, $value)
{
    $score = 0;
    $suite = 0;
    foreach ($row as $cell) {

        if ($cell == $value) {
            $suite++;
        } else {
            $suite = 0; 
        }

        if ($suite == 5) {
            $score++;
        }
    }
    return $score;
}

function testRows($game, $value) 
{
    $score = 0;
    foreach ($game as $row) {
       $score += testRow($row, $value);
    }
    return $score;
}


$game = [
  ['o', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x', 'o'],
  ['x', 'x', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x'],
  ['o', 'o', 'o', 'o', 'o', 'o', 'x', 'x', 'x', 'x', 'x', 'x'],
];

$result = testRows($game, 'x');
var_dump($result);

$result = testRows($game, 'o');
var_dump($result);
```

## Explications

### Selon les versions

#### Test des lignes horizontales avec foreach et retour en booléen

1. La fonction `testRows` vérifie les alignements horizontaux. Elle reçoit deux arguments: 
    - `$game` est un tableau à 2 dimensions contenant l'état du jeu.
    - `$value` est une string représentant la valeur à tester (soit "x", soit "o").

2. Une première boucle "foreach" parcourt la première dimension du tableau. Cette dimension représente les lignes. Chaque ligne (`$row`) est un tableau à une dimension contenant la valeur de chaque cellule du jeu.

3. Une seconde boucle "foreach" parcourt la seconde dimension du tableau. Cette dimension représnte les cellules de chaque ligne. Chaque cellule (`$cell`) contient une valeur à tester.

TODO!!!!