# Exercices de programmation

Les deux langages vus au cours sont JavaScript et PHP. Les exercices qui suivent impliquent une logique similaire pour résoudre les problèmes dans chaque langage. Autrement dit, à part bien sûr les règles syntaxiques propres à chaque langage, les codes en JavaScript et en PHP seront identiques quant à leur logique.

## Exercice 1: opérateurs

### Remarques techniques préalables

L'utilisation d'opérateur nécessite la compréhension préalable de la notion de type de donnée.

#### Principaux types scalaires

| Types                | JS        | PHP           | Exemples                |
|----------------------|-----------|---------------|-------------------------|
| Nombre               | `Number`  | `int`, `float`|  `-1`, `0`, `1.50`, ... |
| Chaîne de caractères | `String`  | `string`      | `"foo"`, `'bar'`, ...   |
| Booléen              | `Boolean` | `bool`        | `true`, `false`         |

A noter (notions avancées) qu'en JavaScript, les valeurs primitives ne sont minipulées au travers d'objets immuables. Pour plus d'information sur les types en JavaScript, voir [MDN docs - types](https://developer.mozilla.org/fr/docs/Web/JavaScript/Data_structures).

##### Javascript: valeurs primitives particulières

(Notions avancées)

  - `undefined` ([MDN docs - undefined](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/undefined))
  - `NaN` ([MDN docs - NaN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/NaN))

#### Connaître le type

(Notions avancées)

##### JavaScript

Voir l'opérateur `typeof` ([MDN docs - typeof](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Operators/typeof)). 

##### PHP

Voir la fonction `gettype` ([PHP doc - gettype](https://www.php.net/manual/fr/function.gettype.php)).

### Enoncés

1. Déterminer le résultat de chaque code, en précisant la valeur et le type.

#### Opérateurs arithmétiques

```javascript
(2 + 2 * 3) / 4 
// que vaut l'expression?
```

```javascript
25 % 2
// que vaut l'expression?
```

#### Opérateurs de comparaison

##### Grandeur

```javascript
6 > 5
// que vaut l'expression?
```

```javascript
6 < 6
// que vaut l'expression?
```

```javascript
6 >= 5
// que vaut l'expression?
```

```javascript
6 >= 6
// que vaut l'expression?
```

##### Egalité

```javascript
6 == 6
// que vaut l'expression?
```

```javascript
6 != 6
// que vaut l'expression?
```

```javascript
true == true
// que vaut l'expression?
```

```javascript
'foo' == 'foo'
// que vaut l'expression?
```

```javascript
6 == '6' //égalité non stricte
// que vaut l'expression?
```

```javascript
6 === '6' //égalité stricte
// que vaut l'expression?
```

```javascript
6 === 6 //égalité stricte
// que vaut l'expression?
```

```javascript
6 !== 5
// que vaut l'expression?
```

```javascript
6 !== '5'
// que vaut l'expression?
```

```javascript
true == 1
// que vaut l'expression?
```

```javascript
true === 1
// que vaut l'expression?
```

```javascript
false == 0
// que vaut l'expression?
```

```javascript
false === 0
// que vaut l'expression?
```

```javascript
true == 'foo'
// que vaut l'expression?
```

```javascript
false == ''
// que vaut l'expression?
```

#### Opérateurs logiques

```javascript
true && true
// que vaut l'expression?
```

```javascript
true && false
// que vaut l'expression?
```

```javascript
true || false
// que vaut l'expression?
```

```javascript
!true && true
// que vaut l'expression?
```

```javascript
!(true && false)
// que vaut l'expression?
```

#### Opérateurs de concaténation

##### JavaScript

```javascript
// opérateur de concaténation spécifique à javascript
'a' + 'b'
// que vaut l'expression?
```

```javascript
// opérateur de concaténation spécifique à javascript
'1' + '2'
// que vaut l'expression?
```

##### PHP

```php
<?php

// opérateur de concaténation spécifique à php
'a' . 'b';
// que vaut l'expression?
```

```php
<?php

// opérateur de concaténation spécifique à php
'1' . '2';
// que vaut l'expression?
```

#### Opérateurs d'affectation (ou assignation)

```javascript
a = 1 //initialisation de a
b = 2 //initiatlisation de b
a = b //affectation de la valeur de b à a
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 2
a = b
b = 3
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1 + 2
// que vaut a ?
```

```javascript
a = 0
a += 1
// que vaut a ?
```

```javascript
a = 2
a *= 3
// que vaut a ?
```

```javascript
a = 0
a++ //incrémentation
// que vaut a ?
```

```javascript
a = 1
b = 5
a = b-- //décrémentation
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 5
a = --b
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 5
a += --b
// que vaut a ?
// que vaut b ?
```

```javascript
// opérateur de concaténation spécifique à javascript
let a = 1
let b = '5'
a += b
// que vaut a ?
// que vaut b ?
```

```php
<?php

// opérateur de concaténation spécifique à php
$a = 1;
$b = '5';
$a .= $b;
// que vaut $a ?
// que vaut $b ?
```


## Exercice 2: variables et constantes

### Remarques techniques préalables

#### Déclarations et définitions

##### JavaScript

JavaScript nécessite, pour un code plus propre, de déclarer ses variables. Dans tous les cas, une constante nécessite d'être déclarée. Pour faire simple, il est recommandé d'utiliser le mot-clé `var` ou `let` pour déclarer une variable, et le mot-clé `const` pour définir une constante.

A noter que, en Javascript, une variable déclarée mais non affectée prend la valeur `undefined`.

Pour plus d'information, voir [MDN docs - variables](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Grammar_and_types#d%C3%A9clarations).

##### PHP

Si PHP ne demande pas de déclarer ses variables, il est toutefois nécessaire de définir les constantes.

Pour plus d'information, voir [PHP doc - variables](https://www.php.net/manual/fr/language.variables.php) et [PHP doc - constantes](https://www.php.net/manual/fr/language.constants.php).

#### Portée

La [portée](https://fr.wikipedia.org/wiki/Port%C3%A9e_(informatique)) d'une variable ou d'une constante est l'étendue de code dans lequelle sera accessible cette variable ou cette constante. La portée diffère selon la syntaxte de déclaration et le langage. On parle de portée "globale" lorsque la variable ou la constante est accessible partout dans le code.

#### Debuggage

##### Input

Dans les exercices suivants, pour faciliter le débuggage, il est possible d'affecter de manière dynamique la valeur des variables initiales, de sorte que l'utilisateur puisse entrer des valeurs différentes pour simuler un comportement différent du programme.

En Javascript, le code sera, par exemple:

```javascript
let value = parseFloat(prompt('Valeur à affecter', '')) || 0
// La variable "value" condiendra la valeur (nombre flottant) entrée par l'utilisateur dans le prompt du navigateur.
```

En PHP, le code sera, par exemple:

```php
<?php

$value = (float)($_GET['value'] ?? 0);
/*
    La variable "$value" condiendra la valeur (nombre flottant) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=123
    Dans cet exemple, "$value" vaudra le nombre 123
*/
```

##### Output

Dans les exercices suivants, pour faciliter le débuggage, il est possible d'afficher le résultat des variables.

En Javascript, le code sera, par exemple:

```javascript
let value = parseFloat(prompt('Valeur à affecter', '')) || 0

console.log(value)
// La valeur de la variable "value" sera affiché dans la console du navigateur.
```

En PHP, le code sera, par exemple:

```php
<?php

$value = (float)($_GET['value'] ?? 0);

var_dump($value);
// La valeur de la variable "$value" sera affiché dans le navigateur ayant appelé le script.
```

### Enoncés

1. Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

2. Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

3. Ecrire un programme qui calcule la somme TTC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante. Le résultat est affecté dans une nouvelle variable.


## Exercice 3: conditions

1. Ecrire un programme qui vérifie **si** un nombre contenu dans une variable est compris entre 10 et 20.

2. Ecrire un programme qui calcule le montant de la prime d'un vendeur en fonction de son chiffre de vente. La prime vaut 10% de son chiffre de vente **si** le montant de la vente dépasse 1000€.

3. Idem, mais primes progressives: 
    - 0€: 2%
    - 500€: 5%
    - 1000€: 10%

4. Ecrire un programme qui affiche et résoud une équation du premier degré: `ax + b = c`. Les valeurs de `a`, `b` et `c` sont des variables. Résoudre l'équation signifie trouver la valeur de `x`, soit `x = (c-b)/a`. Le programme veille à gérer le cas suivant:
    - `a = 0`: pas de solution réelle
    - `b < 0`: affichage avec signe négatif

5. Ecrire un programme qui affiche et résoud une équation du second degré: `ax² + bx + c = 0`. Les valeurs de `a`, `b` et `c` sont des variables. Résoudre l'équation signifie trouver la valeur de `x`, soit `Δ` le discriminant du trinôme `ax² + bx + c`: (`Δ = b² - 4ac`). Le programme veille à gérer les cas suivants: 
    - `a = 0`: pas de solution réelle
    - `Δ < 0`: solution valant `x = -(b/(2a))`
    - `Δ = 0`: pas de solution réelle  
    - `Δ > 0`: solution valant `x = (-b-√Δ)/(2a)` et `x = (-b+√Δ)/(2a)`
    - `b < 0`: affichage avec signe négatif
    - `c < 0`: affichage avec signe négatif


## Exercice bonus: game

 1. Dans le fichier [exbonus/v1.html](./exbonus/v1.html), modifier le code pour que bouge la balle(`circle`).
 2. Dans le fichier [exbonus/v2.html](./exbonus/v2.html), modifier le code pour que la balle rebondisse sur les bords du cadre (les dimensions du cadre sont définies dans `stage`).
 3. Dans le fichier [exbonus/v3.html](./exbonus/v3.html), modifier le code pour que la balle change de couleur avec le temps (les couleurs courantes se trouve dans `rgb`).
 4. Dans le fichier [exbonus/v4.html](./exbonus/v4.html), modifier le code pour afficher une plateforme rectangulaire en bas. Cette plateforme doit se deplacer de gauche à droite lorsque l'utilisateur appuie sur les flèches correspondantes de son clavier. (Voir [MDN docs - keyboard events](https://developer.mozilla.org/en-US/docs/Web/API/KeyboardEvent).)
 5. Dans le fichier [exbonus/v5.html](./exbonus/v5.html), modifier le code pour que la balle ne rebondisse en bas que lorsqu'elle rencontre la plateforme. Si la plateforme laisse passer la balle, celle-ci est remise au centre.
 6. Solution dans le fichier [exbonus/v6.html](./exbonus/v6.html).
