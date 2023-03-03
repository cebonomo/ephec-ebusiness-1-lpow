# Tableaux indexés simples

## Exercices 1: lecture

### Objectifs

 1. Savoir déclarer un tableau non vide.

 2. Savoir accéder à une valeur d'un tableau depuis un index.

 3. Savoir boucler sur les valeurs d'un tableau.

 4. Savoir boucler sur les index d'un tableau.

 5. Comprendre l'instruction `break` dans une boucle. 

### Enoncés

#### 1. Sélection d'un élève

Ecrire un programme choississant un élève d'une classe.

Pour cela, il est nécessaire de :
 - lister les élèves dans un tableau indexé.
 - déterminer un indice (ou index) compris entre 0 et la longueur-1 du tableau.

En PHP, la longueur d'un tableau peut être connue grâce à la fonction `count` ([PHP doc - count](https://www.php.net/manual/fr/function.count.php)).
 
Pour rendre l'exemple plus fun (optionnel), on peut imaginer déterminer l'indice de manière aléatoire. En PHP, voir par exemple la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)) qui peut retourner un nombre compris entre deux valeurs (hors cours).

#### 2. Calculs

Ecrire un programme calculant la somme et la moyenne d'une liste de nombres.

#### 3. Recherche d'indice

Ecrire une fonction retournant l'indice (ou index) d'une valeur contenue dans un tableau. Si plusieurs valeurs identiques existent dans le tableau, la fonction retournera uniquement l'indice de la première valeur. Par exemple, pour le tableau `['chiot', 'chaton', 'chaton', ...]`, la fonction retournera l'indice `1` pour la valeur `'chaton'`.

## Exercices 2: écriture

### Objectifs

 1. Savoir écraser une valeur prédéfinie.

 2. Savoir ajouter des valeurs en fin de tableau.

 3. TODO: Comprendre l'instruction `continue` dans une boucle.

### Enoncés

 1. Remplacer un élément de tableau selon son indice.

 2. Ecrire un programme séparant, depuis une liste de nombres, les nombres strictements positifs, les 0 et les nombres strictement négatifs.
 
 3. Ecrire une fonction classant par ordre croissant une liste de nombres.
