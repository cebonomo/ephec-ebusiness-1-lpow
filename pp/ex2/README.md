# Principes de programmation

## Exercices 2: variables et constantes

### Remarques techniques préalables

#### Déclarations et définitions

##### JavaScript

JavaScript nécessite, pour un code plus propre, de déclarer ses variables. Dans tous les cas, une constante nécessite d'être déclarée. Pour faire simple, il est recommandé d'utiliser le mot-clé `let` pour déclarer une variable, et le mot-clé `const` pour définir une constante.

En Javascript, une variable déclarée mais non initialisée prend la valeur `undefined`.

Pour plus d'information, voir [MDN docs - variables](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Grammar_and_types#d%C3%A9clarations).

##### PHP

Attention qu'en PHP, le nom d'une variable commence toujours par `$`. 

Si PHP ne demande pas de déclarer ses variables (juste de les initialiser), il est toutefois nécessaire de définir les constantes.

Pour plus d'information, voir [PHP doc - variables](https://www.php.net/manual/fr/language.variables.php) et [PHP doc - constantes](https://www.php.net/manual/fr/language.constants.php).

#### Portée

La [portée](https://fr.wikipedia.org/wiki/Port%C3%A9e_(informatique)) d'une variable ou d'une constante est l'étendue de code dans lequelle sera accessible cette variable ou cette constante. La portée diffère selon la syntaxte de déclaration et le langage. On parle de portée "globale" lorsque la variable ou la constante est accessible partout dans le code.

La portée d'une variable n'est pas gérée de la même manière en JS et en PHP. Une des principales différences réside dans le fait qu'une variable JS porte également dans les fonctions, tandis qu'il n'est, par défaut, pas possible d'accéder aux variables externes à une fonction en PHP. Par contre, les deux langages partage le point commun qu'une variable locale à une fonction n'est pas accessible en dehors de celle-ci (en tout cas, pour JS, si la variable est déclarée avec `let`).

##### JavaScript

###### Accès à une variable globale

```javascript
let foo = 'foo'
function bar() {
    console.log(foo) //log 'foo'
}
bar()
```

Il est néanmoins possible d'écrire le code en passant la variable en argument lors de l'appel de la fonction.

```javascript
let foo = 'foo'
function bar(foo) {
    console.log(foo) // log 'foo'
}
bar(foo)
```

###### Accès à une variable locale

```javascript
function bar() {
    let foo = 'foo'
}
bar()
console.log(foo) // Uncaught ReferenceError: foo is not defined
```

###### Doc

Pour plus d'information (notions avancées), voir :
 - [MDN docs - var](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/var)
 - [MDN docs - let](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/let)
 - [Stackoverflow](https://stackoverflow.com/questions/762011/what-is-the-difference-between-let-and-var) 


##### PHP

###### Accès à une variable globale

```php
<?php

$foo = 'foo';
function bar()
{
    var_dump($foo); // Warning: Undefined variable $foo
}
bar();
```

Pour accéder à la variable depuis la fonction, plusieurs techniques existent. Personnellement, je recommande de passer la variable en argument.

```php
<?php

$foo = 'foo';
function bar($foo)
{
    var_dump($foo); // string(3) "foo"
}
bar($foo);
```

###### Accès à une variable locale

```php
<?php

function bar() {
    $foo = 'foo';
}
bar();
var_dump($foo); // Warning: Undefined variable $foo
```

###### Doc

Pour plus d'information (notions avancées), voir [PHP doc - portée des variables](https://www.php.net/manual/fr/language.variables.scope.php).


### Enoncés

1. Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

2. Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

3. Ecrire un programme qui calcule la somme TVAC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante. Le résultat est affecté dans une nouvelle variable.

4. Ecrire un programme qui affecte à une variable la chaîne de caratères `J'ai écrit "var".` où `var` est une variable.

5. Ecrire un programme qui indique si un nombre contenu dans une variable est positif (0 étant positif).

[Corrections](./corrections)
