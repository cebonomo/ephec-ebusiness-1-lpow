# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Morpions

### PHP

#### Code principal

```php
<?php

function testRow($row, $value)
{
    $score = 0;
    $suite = 0;
    foreach ($row as $cell) {

        if ($cell == $value) {
            $suite++;
            if ($suite == 5) {
                $score++;
                $suite = 0;
            }
        } else {
            $suite = 0; 
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

```

#### Exemple d'utilisation du code pour débuggage

```php
<?php

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

Le code compte le nombre de points de manière horizontale.

1. La fonction `testRows` vérifie les alignements horizontaux. Elle reçoit deux arguments: 
    - `$game` est un tableau à 2 dimensions contenant l'état du jeu.
    - `$value` est une string représentant la valeur à tester (soit "x", soit "o").

2. Dans la fonction `testRows`, on initialise la variable `$score` avec la valeur numérique 0. Cette variable représente le score final tel qu'il sera calculé pour chaque ligne et retourné en fin de fonction.

3. Une première boucle "foreach" parcourt la première dimension du tableau. Cette dimension représente les lignes. Chaque ligne (`$row`) est un tableau contenant les valeurs de chaque cellule du jeu.

4. Lors de chaque itération, on teste chaque ligne en appelant la fonction `testRow`. Le score de chaque ligne, tel qu'il est retourné par la fonction `testRow`, est additionné au résultat final, tel qu'il sera retourné ensuite par `testRows`.

5. La fonction `testRow` calcule les points d'une seule ligne de jeu. Elle reçoit deux arguments: 
    - `$row` est un tableau contenant les valeurs des cellules de la ligne.
    - `$value` est une string représentant la valeur à tester (soit "x", soit "o").

6. Dans la fonction `testRow`, la variable `$score` est initialisée avec la valeur numérique 0. Cette variable représente le score de la ligne, lequel sera retourné en fin de fonction.

7. La variable `$suite` est initialisée avec la valeur numérique 0. Cette variable représente le nombre de valeurs trouvées d'affilée. On doit trouver 5 valeurs d'affilée pour bénéficier de 1 point.

8. Une boucle "foreach" parcourt les valeurs des cellules de la ligne du jeu. Chaque cellule (`$cell`) contient donc une valeur (soit "x", soit "o", soit "") à tester en fonction de `$value`.

9. Lors de chaque itération, on compare la valeur de la cellule avec la valeur à comparer `$value`.

10. Si la valeur de la cellule est identique à la valeur recherchée, on incrémente la variable `$suite`, càd le nombre de valeurs trouvées d'affilées. Sinon, le nombre de valeurs trouvées d'affilée est interrompu, et on réinitialise la variable `$suite` à 0.

Par exemple, si la ligne contient `['x', 'x', 'o']` et si la valeur à tester est "x", la valeur de `$suite` atteindra 2 à l'index 1, puis sera réinitalisée à 0 à cause du "o" final.

11. Si le nombre de valeurs trouvées d'affilée atteint le nombre minimum pour bénéficier d'un point, càd 5, on incrémente la variable `$score`, càd le nombre de points de la ligne, et on réinitialise la variable `$suite` pour recommencer à compter le nombre de valeur trouvées d'affilée.

12. On appelle la fonction `testRows` pour débugger l'ensemble du code.
