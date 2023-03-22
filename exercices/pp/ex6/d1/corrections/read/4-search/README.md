# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Recherche

### PHP

```php
<?php

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide', // attention: entrée double!
    'Timide', // attention: entrée double!
    'Simplet',
    'Atchoum',
];

$search = 'Timide';

$result = null; // pas 0 par défaut, car 0 est un index!
foreach ($dwarves as $index => $value) {
    if ($search == $value) {
        $result = $index;
        break; // évite de trouver le second!
    }
}

var_dump($result);
```

## Explications

Le code permet de trouver la première occurrence d'une valeur d'un tableau.

 1. La variable `$dwarves` est initialisée avec une liste de string. Cette liste est un tableau (un "array"), et chaque entrée est une string. Cette variable représente la liste de prénoms des 7 nains de Blanche-Neige. Attention toutefois que cette liste comporte un doublon: l'entrée "Timide" est présente deux fois.
 
    Chacune des 8 entrées est donc indexée dans le tableau, selon un indice allant de 0 à 7:

    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 |
    |------------|---|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | **Timide** | **Timide** | Simplet | Atchoum |

    On remarque que l'on commence un tableau par l'indice 0!

 2. La variable `$search` est initialisée avec la string "Timide". Cette variable représente la valeur à rechercher dans le tableau.

 3. La variable `$result` est initialisée avec la valeur `null`. Cette variable représente l'indice de la valeur recherchée, selon la position de la valeur dans le tableau. La valeur finale de la variable sera donc un entier compris, dans notre cas, entre 0 et 7. Il est donc difficile de déterminer une valeur par défaut, car cette valeur doit différer de 0. En effet, imaginons qu'aucune occurence ne soit trouvée. Dans un tel cas, la valeur initiale de la variable ne sera pas écrasée. Il ne faut donc pas que cette valeur soit 0, car cela signifierait que la valeur se trouverait à l'indice 0, ce qui est faux. Pour cette raison, on doit prendre une valeur différente de toutes les valeurs possibles.

 3. Pour trouver une valeur dans un tableau, il est nécessaire d'itérer sur chacune de ses valeurs à l'aide d'une boucle "for". Concrètement, la boucle "foreach" parcourt le tableau `$dwarves` et, lors de chaque itération, affecte la prochaine valeur de la liste à la variable `$value`, et, en même temps, affecte la clé associée (l'indice dans notre cas) à la variable `$index`.

    Valeurs des variables lors de chaque itération:

    | `$index`  | `$value`  |
    |-----------|-----------|
    | 0         | 'Prof'    |
    | 1         | 'Joyeux'  |
    | ...       | ...       |
    | 4         | Timide    |
    | 5         | Timide    |
    | ...       | ...       |


 4. Dès lors que la valeur de `$value` est identique à la valeur de `$search`, c'est qu'on a trouvé une occurence de la valeur recherchée. Etant donné que l'on demande l'indice, on affecte à la variable `$result` la valeur de `$index`, càd l'indice courant. Dans notre cas, l'indice est 4 (et pas 5).

 5. Si l'on continue à itérer, on peut, en cas de doublon, retomber dans le cas précédent et écraser la valeur de `$result`. L'indice trouvé serait alors celui de la dernière occurrence de la valeur recherchée (indice 5). Ceci n'est pas le comportement demandé. 
 
    Pour empêcher cela, plusieurs possibilités:

    1. Il est possibile d'imaginer le même code avec une boucle "while" que l'on conditionnerait en fonction de l'état de la recherche.

    2. Avec une boucle de type "for"/"foreach", une possibilité serait de tester la valeur de `$result`. Si elle comporte une valeur différente de la valeur initiale, c'est que cette valeur a été écrasée par un indice. Il ne faudrait donc plus écraser la variable pour la suite de la boucle.
 
    3. Dans l'exemple de correction, dès lors que l'on a trouvé une occurence, on interrompt la boucle avec l'instruction `break` (cf. `switch`) (Hors cours). Cette instruction permet de sortir de la boucle courante (comme elle permet de sortir du `switch`). La boucle se termine et la variable `$result` n'est pas écrasée.

    D'autres solutions sont envisageables pour contourner l'instruction `break`, comme l'utilisation d'une boucle "while" à la place d'une boucle "for" ou encore l'utilisation d'un "return" depuis une fonction.

6. La variable `$result` est débuggée.


