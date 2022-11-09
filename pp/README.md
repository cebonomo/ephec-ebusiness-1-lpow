# Exercices de programmation

## Exercice 1: expressions

1. Déterminer le résultat de chaque expression, en précisant la valeur et le type.

### Opérateurs arithmétiques

```javascript
(2 + 2 * 3) / 4 
// que vaut l'expression?
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
b = 2
a = b
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
a = 1
b = 5
a = b--
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

### Opérateurs de comparaison

#### Grandeur

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

#### Egalité

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

#### Egalité avec transtypage

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

### Opérateurs logiques

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

### Opérateurs de concaténation

#### JavaScript

```javascript
// opérateur de concaténation spécifique à javascript
let a = 'a' + 'b'
// que vaut a ?
```

```javascript
// opérateur de concaténation spécifique à javascript
let a = '1' + '2'
// que vaut a ?
```

```javascript
// opérateur de concaténation spécifique à javascript
let a = 1
let b = '5'
a += b
// que vaut a ?
// que vaut b ?
```

#### PHP

```php
<?php

// opérateur de concaténation spécifique à php
$a = 'a' . 'b';
// que vaut $a ?
```

```php
<?php

// opérateur de concaténation spécifique à php
$a = '1' . '2';
// que vaut $a ?
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

## Exercice 2: variables

### Remarques techniques préalables

#### Langages

Les deux langages vus au cours sont JavaScript et PHP. Les exercices qui suivent impliquent une logique similaire pour résoudre les problèmes dans chaque langage. Autrement dit, à part bien sûr les règles syntaxiques propres à chaque langage, les codes en JavaScript et en PHP seront identiques quant à leur logique.

#### Input

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
    Dans cet exemple, "$value" vaudra le nombre 123.00
*/
```

#### Output

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

### Permutation de valeurs

1. Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

### Opérations arithmétiques simples

1. Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

### Définition de constantes

1. Ecrire un programme qui calcule la somme TTC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante. Le résultat est affecté dans une nouvelle variable.


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
    - `Δ < 0`: solution valant `x = -(b/2a)`
    - `Δ = 0`: pas de solution réelle  
    - `Δ < 0`: solution valant `x = (-b - √Δ) / (2a)` et `x = (-b + √Δ) / (2a)`
    - `b < 0`: affichage avec signe négatif
    - `c < 0`: affichage avec signe négatif


