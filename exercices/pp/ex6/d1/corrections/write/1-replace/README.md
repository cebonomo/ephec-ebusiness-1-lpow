# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Remplacement

### PHP

```php
<?php

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide',
    'Simplet',
    'Atchoum',
];

$dwarves[5] = 'Dur d\'oreille';

var_dump($dwarves);
```

## Explications

Le code remplace l'entrée d'une liste. Concrètement, il remplace, parmi la liste des sept nains de Blanche-Neige, l'entrée "Simplet" par "Dur d'oreille".

 1. La variable `$dwarves` est initialisée avec une liste de string. Cette liste est un tableau (un "array"), et chaque entrée est une string. Cette variable représente la liste de prénoms des 7 nains de Blanche-Neige, dont on va extraire une valeur.
 
    Chacune des 7 entrées est donc indexée dans le tableau, selon un indice allant de 0 à 6:

    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
    |------------|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | Timide | Simplet | Atchoum |

    On remarque que l'on commence un tableau par l'indice 0! Le dernier indice vaut donc n-1.

 2. L'entrée de l'indice 5 est écrasée avec une nouvelle valeur. 

    Les valeurs du tableau sont désormais:
    
    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
    |------------|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | Timide | *Dur d'oreille* | Atchoum |

    Aucune valeur n'a été ajoutée. Les indices sont conservés.

 3. L'array est débuggé.
