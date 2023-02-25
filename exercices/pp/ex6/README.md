# Principes de programmation

## Exercices 6: tableaux indexés

### Types de tableau

 - [Tableaux indexés](./d1/).
 - [Tableaux indexés à n dimensions](./dn/).

### Remarques théoriques

#### Manipulations

Il existe de nombreuses fonctions ou méthodes de manipulation de tableau. Toutefois, cette matière n'est pas abordée au cours.

### Remarques techniques

#### Différentes formes de déclaration

Tant en JS qu'en PHP, il existe plusieurs façon de déclarer un tableau. Je recommande la notation suivante, car plus récente et plus simple.

##### PHP

```php
$a = []; // initialisation d'un tableau vide
$b = [1, 2, 3]; // initialisation d'un tableau contenant des exemples de valeurs (entiers) indexées
$b = ['a' => 1, 'b' => 2, 'c' => 3]; // initialisation d'un tableau associatifs contenant des exemples de valeurs (entiers) associées à des clés
```

#### Boucler sur un tableau

La boucle "for" est habituellement utilisée pour boucler sur un tableau.

##### PHP

Il est possible, mais pas recommandé, d'utiliser la notation du "for" incrémenté.

```php
for ($i = 0, $length = count($array); $i < $length; $i++) {
    echo $array[$i];
}
```

Les notations suivantes sont toutefois à privilégier.

```php
foreach ($array as $value) {
    echo $value;
}
```
Pour connaître l'index (ou la clé dans le cas d'un tableau associatif):

```php
foreach ($array as $key => $value) {
    echo "$key => $value";
}
```

### Documentations

#### JS

[MDN docs - Array](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array)

#### PHP

[PHP doc - tableaux](https://www.php.net/manual/fr/language.types.array.php)
