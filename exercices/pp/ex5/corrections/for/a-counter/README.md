# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Compteur de boucle

### PHP

#### De 0 jusqu'à n-1 (ex, pour n==5: "01234")

```php
<?php

$n = 5;

for ($i = 0; $i < $n; $i++) {
    echo $i;
}
```

#### De 1 jusqu'à n (ex, pour n==5: "12345")

```php
<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    echo $i;
}
```

#### De n jusqu'à 1 (ex, pour n==5: "54321")

```php
<?php

$n = 5;

for ($i = $n; $i >= 1; $i--) {
    echo $i;
}
```


## Explications

Le code réalise des boucles et affiche, lors de chaque passage, l'état du compteur interne.

 1. La boucle est définie selon le principe suivant:
    - Le compteur `$i` est initialisé à un état de départ en fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i = 0`
        - Cas 1 (de 1 jusqu'à n): `$i = 1`
        - Cas 1 (de n jusqu'à 1): `$i = $n`
    - La fin du compteur `$i` est définie en fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i < n`
        - Cas 1 (de 1 jusqu'à n): `$i <= n`
        - Cas 1 (de n jusqu'à 1): `$i >= 1`
    - Le pas du compteur `$i` (la raison) est défini en fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i++` (incrémentation)
        - Cas 1 (de 1 jusqu'à n): `$i++` (incréemntation)
        - Cas 1 (de n jusqu'à 1): `$i--` (décrémentation)

 2. Le bloc de code de chaque boucle est exécuté autant de fois que défini. Dans chaque bloc de boucle, l'état du compteur `$i` est affiché lors de chaque exécution.
 
    On remarque que la valeur de `$i` suit la logique définie dans la déclaration de boucle:
    - La première valeur de `$i` affichée est celle qui a été initialisée (ex: `$i = 0`).
    - Les valeurs suivantes de `$i` affichées sont incrémentées (ou décrémentées pour le dernier cas) à chaque fois (ex: `$++`). 
    - La boucle s'arrête dès lors la condition n'est plus vraie (ex: `$i <= n`). Si la condition est fausse, le bloc de code n'est PAS exécuté!

    A chaque passage, on connaît ainsi l'état de la boucle grâce à son compteur.


