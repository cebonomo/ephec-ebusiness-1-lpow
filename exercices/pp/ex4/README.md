# Principes de programmation

## Exercices 4: fonctions

### Remarques théoriques

#### Notion de fonction

Selon les paradigmes et les languages, la notion de fonction peut varier. En JavaScript et en PHP, par fonction, on entend un bloc de code pouvant (ou pas) modifier l'état du programme et pouvant (ou pas) retourner une valeur. En ce sens, on peut appréhender une fonction comme une instruction permettant au codeur de structurer son programme.

#### Portée des variables et fonctions

La portée d'une variable n'est pas gérée de la même manière en JS et en PHP. 

##### Accès à une variable globale

Une des principales différences entre JS et PHP réside dans le fait qu'une variable JS porte également dans les fonctions, tandis qu'il n'est, par défaut, pas possible d'accéder aux variables externes à une fonction en PHP. 

###### JavaScript

JavaScript permet d'accéder à une variable externe à la fonction.

```javascript
let foo = 'foo'
function bar() {
    console.log(foo) //log 'foo'
}
bar()
```

Il est néanmoins possible d'écrire également le code en passant la variable en argument lors de l'appel de la fonction. Si cette écriture est possible, elle est, selon moi, à privilégier.

```javascript
let foo = 'foo'
function bar(foo) {
    console.log(foo) // log 'foo'
}
bar(foo)
```

###### PHP

Contrairement à JS, PHP ne permet pas, par défaut, d'accéder à une variable externe à la fonction.

```php
<?php

$foo = 'foo';
function bar()
{
    var_dump($foo); // Warning: Undefined variable $foo
}
bar();
```

Pour accéder à la variable depuis la fonction, plusieurs techniques existent. Personnellement, je recommande de passer simplement la variable en argument.

```php
<?php

$foo = 'foo';
function bar($foo)
{
    var_dump($foo); // string(3) "foo"
}
bar($foo);
```

##### Accès à une variable locale

JS et PHP partagent le point commun qu'une variable locale à une fonction n'est pas accessible en dehors de celle-ci (en tout cas, pour JS, si la variable est déclarée avec `let`).

###### JavaScript

JavaScript ne permet pas d'accéder, depuis l'extérieur d'une fonction, à une variable déclarée à l'intérieur d'une fonction.

```javascript
function bar() {
    let foo = 'foo'
}
bar()
console.log(foo) // Uncaught ReferenceError: foo is not defined
```

###### PHP

PHP ne permet pas non plus d'accéder, depuis l'extérieur d'une fonction, à une variable déclarée à l'intérieur d'une fonction.

```php
<?php

function bar() {
    $foo = 'foo';
}
bar();
var_dump($foo); // Warning: Undefined variable $foo
```

##### Doc

Pour plus d'information sur la portée en JS (notions avancées), voir :
 - [MDN docs - var](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/var)
 - [MDN docs - let](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/let)
 - [Stackoverflow](https://stackoverflow.com/questions/762011/what-is-the-difference-between-let-and-var) 

Pour plus d'information sur la portée en PHP (notions avancées), voir [PHP doc - portée des variables](https://www.php.net/manual/fr/language.variables.scope.php).


#### Paramètres et arguments

##### Arguments obligatoires

PHP et JS ne partagent pas la même gestion des arguments. En PHP, lors de l'appel de la fonction, il est obligatoire de passer en argument tous les paramètres déclarés sans valeur par défaut. Ce n'est pas le cas en JS qui donnera alors aux paramètres manquants la valeur `undefined`.

###### JS

```javascript
function bar(foo) {
    console.log(foo) // undefined
}
bar()
```

###### PHP

```php
<?php

function bar($foo) {
    var_dump($foo);
}
bar(); //Fatal error: Uncaught ArgumentCountError: Too few arguments to function bar()
```

### Objectifs

 1. Savoir déclarer et appeler une fonction avec ou sans paramètre.

 2. Savoir déclarer et appeler une fonction retournant une valeur.

 3. Comprendre l'utilité d'une fonction en cas de code/logique dupliqué.

 4. (Optionel au Q1) Comprendre le principe d'appel récurrent.

### Enoncés

 1. Ecrire un programme contenant une fonction retournant la valeur absolue d'un nombre (ex: si le nombre est -5, la fonction retournera 5, et si le nombre est 5, la fonctionnera retournera également 5).

 2. Ecrire une programme contenant une fonction retournant les résultats suivants:
    - -1: si nombre strictement négatif
    - 0: si 0 (ou -0)
    - 1: si nombre strictement positif

 3. Ecrire un programme contenant une fonction permettant de diviser 2 nombres (attention à la division par 0). 

 4. (Optionel au Q1, obligatoire au Q2) Ecrire une programme contenant une fonction calculant la puissance d'un nombre a exposé en n, selon le principe suivant (voir la [formule mathématique](../../resources/images/pow-fomula.png)):
    - Si n vaut 1: le résulat vaut a
    - Si n est pair: le résulat vaut (a² exposé en (n/2))
    - Si n est impair: le résultat vaut (a * (a² exposé en ((n-1)/2)))

 5. (optionel au Q1, obligatoire au Q2) Refactorer le programme de l'équation du second degré. En effet, on remarque que ce programme tel qu'écrit dans sa [première version](../ex3/corrections/README.md#php-4) comporte plusieurs morceaux de code fort similaires. De telles duplications de code sont à proscrire. Il serait donc intéressant de refactorer (c'est-à-dire réécrire d'une meilleure façon) le programme en utilisant notamment des fonctions.

[Corrections](./corrections)

### Documentations

#### JS

[MDN docs - fonctions](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/function)

#### PHP

[PHP doc - fonctions](https://www.php.net/manual/fr/language.functions.php)

