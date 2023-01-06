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

La [portée](https://fr.wikipedia.org/wiki/Port%C3%A9e_(informatique)) d'une variable est l'étendue de code dans lequelle sera accessible cette variable. La portée diffère selon la syntaxte de déclaration et le langage.

### Enoncés

1. Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

2. Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

3. Ecrire un programme qui calcule la somme TVAC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante. Le résultat est affecté dans une nouvelle variable.

4. (Optionnel pour lpow) Ecrire un programme qui affecte à une variable la chaîne de caratères `J'ai écrit "var".` où `var` est une variable.

5. (Optionnel pour lpow) Ecrire un programme qui indique si un nombre contenu dans une variable est un nombre pair.

[Corrections](./corrections)