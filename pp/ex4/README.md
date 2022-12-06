# Principes de programmation

## Exercices 4: fonctions

### Remarques théoriques

#### Notion de fonction

Selon les paradigmes et les languages, la notion de fonction peut varier. En JavaScript et en PHP, par fonction, on entend un bloc de code pouvant (ou pas) modifier l'état du programme et pouvant (ou pas) retourner une valeur. En ce sens, on peut appréhender une fonction comme une instruction permettant au codeur de structurer son programme.

### Documentations

#### JS

[MDN docs - fonctions](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/function)

#### PHP

[PHP doc - fonctions](https://www.php.net/manual/fr/language.functions.php)

### Enoncés

 1. Ecrire un programme contenant une fonction retournant la valeur absolue d'un nombre (ex: si le nombre est -5, la fonction retournera 5, et si le nombre est 5, la fonctionnera retournera également 5).

 2. Ecrire une programme contenant une fonction retourtant les résultats suivants:
    - -1: si nombre strictement négatif
    - 0: si 0 (ou -0)
    - 1: si nombre strictement positif

 3. Ecrire un programme contenant une fonction permettant de diviser 2 nombres (attention à la division par 0). 

 4. (Optionel) Ecrire une programme contenant une fonction calculant la puissance d'un nombre a exposé en n, selon le principe suivant:
    - Si n vaut 1: le résulat vaut a
    - Si n est pair: le résulat vaut (a² exposé en (n/2))
    - Si n est impair: le résultat vaut (a * (a² exposé en ((n-1)/2)))
    (Voir la [formule mathématique](../resources/images/pow-fomula.png).)

 5. Refactorer le programme de l'équation du second degré.

[Corrections](./corrections)
