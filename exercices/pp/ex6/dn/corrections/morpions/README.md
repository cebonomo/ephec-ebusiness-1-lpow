# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Morpions

### PHP

#### Test des lignes horizontales avec foreach et retour en booléen

```php
<?php

function testRows($game, $value) 
{
    foreach ($game as $row) {
        $rowResult = true;
        foreach ($row as $cell) {
            if ($cell != $value) {
                $rowResult = false; 
                break;
            }
        }
        if ($rowResult) {
            return true;
        }
    }

    return false;
}


$game = [
  ['', 'x', 'o'],
  ['x', 'x', 'x'],
  ['o', 'o', 'o'],
];

$result = testRows($game, 'x');
var_dump($result);

$result = testRows($game, 'o');
var_dump($result);
```

#### Test des lignes horizontales avec foreach et retour en tableau 

```php
<?php

function testRows($game, $value) 
{
    $result = [];

    foreach ($game as $row) {
        $rowResult = true;
        foreach ($row as $cell) {
            if ($cell != $value) {
                $rowResult = false; 
                break;
            }
        }
        $result[] = $rowResult;
    }

    return $result;
}


$game = [
  ['', 'x', 'o'],
  ['x', 'x', 'x'],
  ['o', 'o', 'o'],
];

$result = testRows($game, 'x');
var_dump($result);

$result = testRows($game, 'o');
var_dump($result);
```

#### Test des lignes horizontales avec for et retour en tableau 

```php
<?php

function testRows($game, $value) 
{
    $result = [];
    for ($i = 0, $rowLength = count($game); $i < $rowLength; $i++) {
        $rowResult = true;
        for ($j = 0, $colLength = count($game[$i]); $j < $colLength; $j++) {
            if ($game[$i][$j] != $value) {
                $rowResult = false; 
                break;
            }
        }
        $result[] = $rowResult;
    }

    return $result;
}


$game = [
  ['', 'x', 'o'],
  ['x', 'x', 'x'],
  ['o', 'o', 'o'],
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

4. La variable `$rowResult` est initialisée avec la valeur par défaut `true`. Cette variable représente le resultat de la ligne tel qu'il nous faut encore le déterminer.

5. On teste la valeur de chaque cellule de la ligne. Dès lors qu'une de ces valeurs ne contient pas la valeur de référence, c'est que la ligne entière est mauvaise. C'est pourquoi, par défaut, `$rowResult` vaut `true`, mais que si une seule cellule n'est pas correcte, `$rowResult` vaut `false`.

    On note l'utilisation de l'instruction `break` (hors cours). Celle-ci permet d'interrompre la boucle courrante (celle des cellules). Dans ce cas-ci, cette instruction n'est pas obligatoire: le résultat ne serait pas modifié en l'abscence de l'instruction. Elle permet juste d'épargner du temps de calcul en racourciçant la boucle.

6. Dès qu'une ligne est correcte, càd que `$rowResult` vaut `true` après avoir parcouru toutes les cellules, on considère que le jeu est valide. On retourne `true`. 

7. Si on arrive à la fin de la fonction, c'est qu'on n'a pas retourné `true` parce qu'aucune ligne n'était valide. Autrement dit, il faut retourner `false`.
