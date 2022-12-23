# Principes de programmation

## Exercices 6: tableaux

### Documentations

#### JS

[MDN docs - Array](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array)

#### PHP

[PHP doc - tableaux](https://www.php.net/manual/fr/language.types.array.php)

### Enoncés

#### Tableaux à 1 dimension

##### Tableaux indexés

###### Bases

 1. Ecrire un programme choississant de manière aléatoire un élève d'une classe. Pour cela, il faut utiliser une fonction native donnant un nombre aléatoire, lequel déterminera un des indices du tableau.

 2. Ecrire un programme calculant la somme et la moyenne d'une liste de nombres.

 3. Ecrire une fonction retournant l'indice d'une valeur contenue dans un tableau. Par exemple, pour le tableau `['chiot', 'chaton', ...]`, la fonction retournera l'indice `1` pour la valeur `'chaton'`.

 4. Ecrire un programme séparant, depuis une liste de nombres, les nombres strictements positifs, les 0 et les nombres strictement négatifs.
 
 5. Ecrire une fonction classant par ordre croissant une liste de nombres.

###### Manipulations

TODO voir listes des fonctions

##### Tableaux associatifs (seulement PHP)

TODO
 
#### Tableaux à n dimensions

##### Tableaux indexés

 1. Jeux du [morpion](https://fr.wikipedia.org/wiki/Morpion_(jeu)): soit un tableau de 3x3 (9 cases de morpion en tout: 3 lignes et 3 colonnes) contenant 3 valeurs possibles ("", "o" et "x"). Ecrire un programme qui vérifie l'état du tableau pour savoir si des "o" ou des "x" sont alignés horizontalement, verticalement ou en diagonale.

 2. Soit un tableau contenant des entiers ou des tableaux, eux-mêmes contenant des entiers ou des tableaux, etc, et ce de manière récursive. Ecrire un programme calculant le nombre total de 0 présents dans le tableau.

##### Tableaux associatifs (seulement PHP)

 1. Ecrire un programme générant une phrase absurde générée aléatoirement depuis des listes de parties de phrases (groupe sujet, groupe verbal, ...). Les listes sont contenues dans un tableaux à 2 dimensions. La première dimension est un tableau associatif contenant les différents groupes. La deuxième dimension est une liste indexée de morceaux de phrase associées à chaque groupe. (Voir [fichier d'exemple](./corrections/sentences.php) de données.)
