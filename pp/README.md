# Exercices de programmation

Les deux langages vus au cours sont JavaScript et PHP. Les exercices qui suivent impliquent une logique similaire pour résoudre les problèmes dans chaque langage. Autrement dit, à part bien sûr les règles syntaxiques propres à chaque langage, les codes en JavaScript et en PHP seront identiques quant à leur logique.

## Exercices 1: opérateurs

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


## Exercices 2: variables et constantes

### Remarques techniques préalables

#### Déclarations et définitions

##### JavaScript

JavaScript nécessite, pour un code plus propre, de déclarer ses variables. Dans tous les cas, une constante nécessite d'être déclarée. Pour faire simple, il est recommandé d'utiliser le mot-clé `var` ou `let` pour déclarer une variable, et le mot-clé `const` pour définir une constante.

A noter que, en Javascript, une variable déclarée mais non initialisée prend la valeur `undefined`.

Pour plus d'information, voir [MDN docs - variables](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Grammar_and_types#d%C3%A9clarations).

##### PHP

Si PHP ne demande pas de déclarer ses variables, il est toutefois nécessaire de définir les constantes.

Pour plus d'information, voir [PHP doc - variables](https://www.php.net/manual/fr/language.variables.php) et [PHP doc - constantes](https://www.php.net/manual/fr/language.constants.php).

#### Portée

La [portée](https://fr.wikipedia.org/wiki/Port%C3%A9e_(informatique)) d'une variable ou d'une constante est l'étendue de code dans lequelle sera accessible cette variable ou cette constante. La portée diffère selon la syntaxte de déclaration et le langage. On parle de portée "globale" lorsque la variable ou la constante est accessible partout dans le code.

#### Debuggage

##### Input

Dans les exercices suivants, pour faciliter le débuggage, il est possible d'affecter de manière dynamique la valeur des variables initiales, de sorte que l'utilisateur puisse entrer des valeurs différentes pour simuler un comportement différent du programme.

###### JavaScript

En Javascript, le code sera, par exemple:

- String

```javascript
let value = prompt('Valeur à affecter (string)', '')
// La variable "value" condiendra la valeur (chaîne de caractères) entrée par l'utilisateur dans le prompt du navigateur.
```

- Int

```javascript
let value = parseInt(prompt('Valeur à affecter (int)', '')) || 0
// La variable "value" condiendra la valeur (nombre entier) entrée par l'utilisateur dans le prompt du navigateur.
```

- Float

```javascript
let value = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
// La variable "value" condiendra la valeur (nombre flottant) entrée par l'utilisateur dans le prompt du navigateur.
```

###### PHP

PHP peut récupérer les données passées dans la querystring de l'URL, notamment via la superglobale `$_GET` ([PHP doc- $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)).

La querystring est la partie de l'URL qui se place après le chemin et qui débute par le caractère `?`. Chaque donnée est une association `name=value`. Dans le cas de plusieurs valeurs à faire passer, la querystring prendra le format suivant: `?name1=value1&name2=value2...`.

La querystring est donc une des possibilités pour débugger le code:

- string

```php
<?php

$value = $_GET['value'] ?? ''
/*
    La variable "$value" condiendra la valeur (chaîne de caractère) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=abc
    Dans cet exemple, "$value" vaudra la string "abc"
*/
```

- int

```php
<?php

$value = (int)($_GET['value'] ?? 0);
/*
    La variable "$value" condiendra la valeur (nombre entier) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=123
    Dans cet exemple, "$value" vaudra le nombre 123
*/
```

- float

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

###### JavaScript

Dans les exercices suivants, pour faciliter le débuggage, il est possible d'afficher le résultat des variables.

En Javascript, le code sera, par exemple:

```javascript
let value = parseFloat(prompt('Valeur à affecter', '')) || 0

console.log(value)
// La valeur de la variable "value" sera affiché dans la console du navigateur.
```

###### PHP

En PHP, le code permettant d'afficher le contenu d'une variable sera, par exemple:

```php
<?php

$value = (float)($_GET['value'] ?? 0);

var_dump($value); //debug $value
// La valeur de la variable "$value" sera affiché dans le navigateur ayant appelé le script.
```

Pour simplement envoyer du texte dans le flux de sortie (et donc l'afficher dans le navigateur), le code sera, par exemple:

```php
<?php

echo $value; //affiche le contenu textuel de $value
```

Pour afficher un texte dans du HTML, le code sera, par exemple:

```php
<p><?php echo "Mon paragraphe."; ?></p>
```

A noter que la balise PHP fermante `?>` n'est indispensable que lorsque l'on écrit dans du HTML.

### Enoncés

1. Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

2. Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

3. Ecrire un programme qui calcule la somme TVAC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante. Le résultat est affecté dans une nouvelle variable.

4. Ecrire un programme qui affecte à une variable la chaîne de caratères `J'ai écrit "var".` où `var` est une variable.

5. Ecrire un programme qui indique si un nombre contenu dans une variable est positif (0 étant positif).

[Corrections](./ex2)


## Exercices 3: conditions

### if

1. Ecrire un programme qui vérifie **si** un nombre contenu dans une variable est compris entre 10 et 20 inclus et affiche un message personnalisé en fonction du résulat.

2. Ecrire un programme qui calcule le montant de la prime d'un vendeur en fonction de son chiffre de vente. La prime vaut 10% de son chiffre de vente **si** le montant de la vente dépasse 1000€.

3. Idem, mais primes progressives, à partir des montants suivants: 
    - 0€: 2%
    - 500€: 5%
    - 1000€: 10%

4. Ecrire un programme qui résoud et affiche une équation du premier degré: `ax + b = c`. Les valeurs de `a`, `b` et `c` sont des variables. Résoudre l'équation signifie trouver la valeur de `x`, soit `x = (c-b)/a`. Le programme veille à gérer le cas suivant:
    - `a = 0`: pas de solution réelle
    - `b < 0`: affichage avec signe négatif

5. (Optionnel) Ecrire un programme qui résoud et affiche une équation du second degré: `ax² + bx + c = 0`. Les valeurs de `a`, `b` et `c` sont des variables. Résoudre l'équation signifie trouver la valeur de `x`, soit `Δ` le discriminant du trinôme `ax² + bx + c`: (`Δ = b² - 4ac`). Le programme veille à gérer les cas suivants: 
    - `a = 0`: équation du premier degré
    - `Δ < 0`: solution valant `x = -(b/(2a))`
    - `Δ = 0`: pas de solution réelle  
    - `Δ > 0`: solution valant `x = (-b-√Δ)/(2a)` et `x = (-b+√Δ)/(2a)`
    - `b < 0`: affichage avec signe négatif
    - `c < 0`: affichage avec signe négatif

### switch

1. Ecrire un programme qui corrige la réponse à une question:
    - Question: Quelle est la capitale de la Belgique?
    - Réponses acceptées: Bruxelles, Brussel ou Brussels
    - Si mauvaise réponse: Message d'erreur indiquant que la réponse n'est pas correcte.
    - Si aucune valeur (string vide): Message d'erreur spécifique indiquant qu'une réponse est requise.

[Corrections](./ex3)

## Exercices 4: boucles

### for

1. Ecrire un programme qui calcule les tables de multiplication (0 -> 10) d'une variable contenant un nombre entier compris entre 1 et 10.

2. Ecrire un programme qui liste tous les calculs possibles entre deux entiers positifs et dont le résulat est une variable contenant un nombre entier compris entre 1 et 10. (ex, pour 3: 0+3, 1+2, 2+1, 3+0)

3. Ecrire un programme qui affecte à une variable une chaîne de cracatère concaténant tous les entiers compris entre 1 et une variable contenant un entier positif. Chaque nombre doit être séparé par un point. (ex, pour 5: "1.2.3.4.5")

4. Idem, mais inversé. (ex, pour 5: "5.4.3.2.1")

5. Ecrire un programme affichant les sorties ci-après, le nombre de lignes étant défini dans une variable. Exemple, pour 5 lignes:

Cas 1:
```
>
>>
>>>
>>>>
>>>>>
```

Cas 2:
```
>>>>>
>>>>
>>>
>>
>
```

Cas 3:
```
>
>>
>>>
>>
>
```

### while

 1. Ecrire un programme calculant la [suite de Fibonacci](https://fr.wikipedia.org/wiki/Suite_de_Fibonacci) jusqu'à un nombre entier non nul limite.
    
 2. Ecrire un programme calculant le [PPCM](https://fr.wikipedia.org/wiki/Plus_petit_commun_multiple) de deux entiers non nuls.


## Exercices 5: fonctions

### Remarques théoriques

#### Notion de fonction

Selon les paradigmes et les languages, la notion de fonction peut varier. En JavaScript et en PHP, par fonction, on entend un bloc de code pouvant (ou pas) modifier l'état du programme et pouvant (ou pas) retourner une valeur. En ce sens, on peut appréhender une fonction comme une instruction permettant au codeur de structurer son programme.

### Enoncés

 1. Ecrire un programme contenant une fonction retournant la valeur absolue d'un nombre (ex: si le nombre est -5, la fonction retournera 5).

 2. Ecrire une programme contenant une fonction retourtant les résultats suivants:
    - -1: si nombre strictement négatif
    - 0: si 0 ou -0
    - 1: si nombre strictement positif

 3. Ecrire un programme contenant une fonction permettant de diviser 2 nombres et qui gère l'impossibilité de diviser par 0. 

 4. Ecrire une programme contenant une fonction calculant la puissance d'un nombre exposé en n, selon le principe suivant:
    - Si n vaut 1: le résulat vaut le nombre
    - Si n est pair: le résulat vaut (a² exposé en (n/2))
    - Si n est impair: le résultat vaut (a * (a² exposé en (n-1)/2))
    (Voir la [formule mathématique](../resources/images/pow-fomula.png).)

 5. Refactorer le programme de l'équation du second degré.


## Exercices 6: array

 1. Ecrire un programme choississant de manière aléatoire un élève d'une classe.

 2. Ecrire un programme calculant la somme et la moyenne d'une liste de nombres.

 3. Ecrire un programme séparant, depuis une liste de nombres, les nombres strictements positifs, les 0 et les nombres strictement négatifs.

 4. Ecrire un programme classant une liste de nombres par ordre croissant.

 5. Ecrire un programme intervertissant deux valeurs données d'une liste.


## Exercices bonus: casse-briques

Objectif: réaliser un code élémentaire de [casse-brique](https://fr.wikipedia.org/wiki/Casse-briques).

 1. Dans le fichier [exbonus/v1.html](./exbonus/v1.html), modifier le code pour que bouge la balle (`circle`).
 2. Dans le fichier [exbonus/v2.html](./exbonus/v2.html), modifier le code pour que la balle rebondisse sur tous les bords du cadre (les dimensions du cadre sont définies dans `stage`).
 3. Dans le fichier [exbonus/v3.html](./exbonus/v3.html), modifier le code pour que la balle change de couleur avec le temps (les couleurs courantes se trouve dans `rgb`).
 4. Dans le fichier [exbonus/v4.html](./exbonus/v4.html), modifier le code pour afficher une plateforme rectangulaire en bas. Cette plateforme doit se deplacer de gauche à droite lorsque l'utilisateur appuie sur les flèches correspondantes de son clavier. (Voir [MDN docs - keyboard events](https://developer.mozilla.org/en-US/docs/Web/API/KeyboardEvent).)
 5. Dans le fichier [exbonus/v5.html](./exbonus/v5.html), modifier le code pour que la balle ne rebondisse en bas que lorsqu'elle rencontre la plateforme. Si la plateforme laisse passer la balle, celle-ci est remise au centre.
 6. Solution dans le fichier [exbonus/v6.html](./exbonus/v6.html).
