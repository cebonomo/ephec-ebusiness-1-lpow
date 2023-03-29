# Principes de programmation

## Exercices 6: tableaux associatifs (PHP)

### Objectifs

 1. Savoir déclarer un tableau associatif.

 2. Savoir accéder au valeur depuis une clé.

### Enoncés

#### 1. Création d'un produit

Dans un programme, déclarer un tableau associatif contenant les informations d'un produit de catalogue.

| Clé | Type | Exemple de valeur |
|-----|------|-------------------|
| isPremium | bool | true |
| title | string | Pantalon ample en lin |
| price | string | 69,99 € |
| color | array associatif |`['title' => 'Noir', 'value' => '#272628']`|
| images | array indexé | `['image1.png', 'image2.png']` |

[Correction](./corrections/a-product/)

### Remarques théoriques

#### En JS

A noter qu'il n'existe pas de tableau associatif en JS, au sens strict du terme. Pour une équivalence en matière de structures de donnée, il faut se tourner vers les objets.

### Remarques techniques

#### Clés d'un tableau

Dans un tableau associatif non vide, chaque valeur est associé à une clé. Cette clé est une string. Chaque clé est déterminée de manière arbitraire.

Exemple pour l'array `['a' => 1, 'b' => 6, 'c' => 12]`:

| **Clés**    | a | b | c  |
|-------------|---|---|----|
| **Entrées** | 1 | 6 | 12 |

#### Boucler sur un tableau associatif

Etant donné qu'un tableau associatif demeure un tableau, il est possible de boucler sur un tel tableau, même si une telle manoeuvre est sans doute moins fréquente que pour un tableau associatif.

La boucle "for" tradionnellement incrémentée ne fonctionne pas sur un tableau associatif, car celui-ci ne contient pas d'index numérique. En PHP, on utilise impérativement la variante "foreach" pour boucler sur un array associatif, laquelle permet de connaître à la fois la valeur et la clé.

##### foreach

Pour connaître la valeur:

```php
foreach ($array as $value) {
    echo $value;
}
```

Pour connaître également la clé:

```php
foreach ($array as $key => $value) {
    echo "$key => $value";
}
```

#### Manipulations

Il existe de nombreuses fonctions ou méthodes de manipulation de tableau. Toutefois, cette matière n'est pas abordée au cours. Pour plus d'informations, voir la documentation.

### Documentations

#### JS

[MDN docs - Array](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array)

#### PHP

[PHP doc - tableaux](https://www.php.net/manual/fr/language.types.array.php)
