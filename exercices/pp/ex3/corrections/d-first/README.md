# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Equation du premier degré

### JavaScript

```javascript
let a = parseFloat(prompt('a (float)', '')) || 0
let b = parseFloat(prompt('b (float)', '')) || 0
let c = parseFloat(prompt('c (float)', '')) || 0
let x
let message = ''

if (a != 0) {
    x = (c-b)/a
    if (b < 0) {
        message = a + '*' + x + b + '=' + c
    } else {
        message = a + '*' + x + '+' + b + '=' + c
    }
} else {
    message = 'pas de solution réelle'
}

console.log(a, b, c, x, message)
```

### PHP

```php
<?php

$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$c = (float)($_GET['c'] ?? 0);

$message = '';

if ($a != 0) {
    $x = ($c-$b)/$a;
    if ($b < 0) {
        $message = $a . '*' . $x . $b . '=' . $c;
    } else {
        $message = $a . '*' . $x . '+' . $b . '=' . $c;
    }
} else {
    $message = 'pas de solution réelle';
}

var_dump($a, $b, $c, $message);
```


## Explications

Le code résoud une équation linéaire de la forme ax + b = c.

 1. Les variables `$a`, `$b` et `$c` sont initialisées avec une valeur numérique. Elles représentent les différents termes de l'équation.
 
 2. La variable `$message` est initialisée avec une chaîne vide et contiendra l'affichage final.

 3. Une condition vérifie si `$a` n'est pas égal à 0. En effet, si c'était le cas, l'équation ne comprendrait pas de solution réelle. Il faut donc diférencier les deux cas.
 
 4. Si `$a` n'est pas égal à 0, la variable `$x` est définie comme le résultat de l'équation. A noter l'utilisation de parenthèses afin de forcer la précédence des opérateurs.

 5. Une fois la solution trouvée, on peut traiter l'affichage. Pour cela, il suffit de concaténer les valeurs contenues dans les différentes variables avec les opérateurs mathématiques nécessaires au calcul. L'affichage diffère toutefois en fonction du signe de la valeur de `$b`, qui est un nombre positif ou négatif. Si `$b` est inférieur à 0, le signe négatif sera converti directement en string durant la concaténation. Sinon, il faut spécifier le signe positif de manière explicite.

 6. Si `$a` est égal à 0, le message est défini comme "pas de solution réelle".

 7. Enfin, la fonction `var_dump` est utilisée pour débugger le résultat.
