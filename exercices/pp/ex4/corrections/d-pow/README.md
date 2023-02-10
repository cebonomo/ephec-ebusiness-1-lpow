# Exercices 4: solutions

Le code ci-après est repris des fichiers de solution.

## Puissances

### JavaScript

```javascript
// déclaration de la fonction
function calculatePow(base, exponent) {
    if (exponent == 0) {
        return 1
    }
    if (exponent == 1) {
        return base
    }
    if (exponent % 2) {
        return base * calculatePow(
            base*base,
            (exponent-1)/2
        )
    }
    return calculatePow(
        base*base,
        exponent/2
    )
}

// on appelle la fonction pour tester son comportement
let a = parseFloat(prompt('a', '')) || 0
let n = parseFloat(prompt('n', '')) || 0
let result = calculatePow(a, n)

console.log(a, n, result)
```

### PHP

```php
<?php

// déclaration de la fonction
function calculatePow($base, $exponent)
{
	if ($exponent == 0) {
        return 1;
    }
    if ($exponent == 1) {
        return $base;
    }
    if ($exponent % 2) {
        return $base * calculatePow(
            $base*$base,
            ($exponent-1)/2
        );
    }
    return calculatePow(
        $base*$base,
        $exponent/2
    );
}

// on appelle la fonction pour tester son comportement
// note: la structure des boucles sera vue plus tard dans le cours

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        $result = calculatePow($i, $j);
        echo "$i^$j = $result";
        echo '<br>';
    } 
} 
```

## Explications

Le code utilise une fonction pour calculer la puissance d'un nombre grâce à une approche récursive.

1. La fonction "calculatePow" comprend deux paramètrs: `$base` représente la base de la puissance, et `$exponent` représente l'exposant de la puissance.

2. Lorsque l'exposant est égal à 0, la fonction renvoie 1, qui est la valeur de toute puissance avec un tel exposant.

3. Si l'exposant est égal à 1, la fonction renvoie simplement la base, car la puissance de tout nombre par 1 est égale à ce nombre.

4. Dans le cas où l'exposant est impair, la fonction calcule la puissance en multipliant la base par le résultat de la même fonction. Dans ce second appel de la fonction, la base est le carré de la base courante, et l'exposant est la moitié inférieure de l'exposant courant (donc, par exemple, la moitié inférieure de 5 sera 2). Le nouvel exposant sera donc pair.

5. Si l'exposant est pair, la fonction calcule la puissance en appelant la même fonction avec une base qui est le carré de la base courante et un exposant qui est divisé par 2.

Pour information, l'algorithme utilise une approche de découpe par moitié de l'exposant pour rendre le calcul plus rapide. C'est une implémentation de l'algorithme de puissance rapide ou "exponentiation rapide".
