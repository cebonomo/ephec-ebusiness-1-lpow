# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Pyramides

### PHP

#### Cas 1: croissant

```php
<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo '<br>';
}
``` 

#### Cas 2: décroissant

```php
<?php

$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n-$i; $j++) {
        echo $j;
    }
    echo '<br>';
}

```

## Explications

#### Cas 1: croissant

1. La boucle #1 itère en incérementant `$i` de 0 à `$n` exclus.

    Par exemple, si `$n` vaut 5, `$i` sera incrémenté de de 0 à 4.

2. On déclare une boucle #2 dans cette boucle #1. Cette boucle #2 sera donc exécuté de n fois.

2. La boucle #2 itère en incrémentant `$j` de 1 à `$n-$i`, inclus. La longueur de la boucle #2 dépend donc de l'état de la boucle #1.

    Par exemple, lors de la première itération de la boucle #1, `$i` vallant 0, la boucle #2 itère de 1 à `$n-0`, soit, par exemple, 5 inclus.

    Voici un exemple d'évolution de la longeur de la boucle 2 en fonction de l'état de la boucle #1:

| $i | $n-$i | itérations de $j (inclus)  |
|----|-------|----------------------------|
| 0  | 5-0   | 1 -> 5                     |
| 1  | 5-1   | 1 -> 4                     |
| 2  | 5-2   | 1 -> 3                     |
| 3  | 5-3   | 1 -> 2                     |
| 4  | 5-4   | 1 -> 1                     |

    A noter qu'il faut surtout utiliser une autre variable de compteur pour la boucle #2 (ex: `$j`) pour ne pas interférer avec la boucle #1 (ex: `$i`).

#### Cas 1: décroissant

Même logique, si ce n'est que la boucle #2 itère en décrémentant.
